#!/usr/bin/env php
<?php

function ask(string $question, string $default = ''): string {
    $answer = readline($question . ($default ? " ({$default})" : null) . ': ');

    if (! $answer) {
        return $default;
    }

    return $answer;
}

function confirm(string $question, bool $default = false): bool {
    $answer = ask($question . ' (' . ($default ? 'Y/n' : 'y/N') . ')');

    if (! $answer) {
        return $default;
    }

    return strtolower($answer) === 'y';
}

function writeln(string $line): void {
    echo $line . PHP_EOL;
}

function run(string $command): string {
    return trim(shell_exec($command));
}

function str_after(string $subject, string $search): string {
    $pos = strrpos($subject, $search);

    if ($pos === false) {
        return $subject;
    }

    return substr($subject, $pos + strlen($search));
}

function slugify(string $subject): string {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $subject), '-'));
}

function title_case(string $subject): string {
    return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $subject)));
}

function replace_in_file(string $file, array $replacements): void {
    $contents = file_get_contents($file);

    file_put_contents(
        $file,
        str_replace(
            array_keys($replacements),
            array_values($replacements),
            $contents
        )
    );
}

function removeReadmeParagraphs(string $file): void {
    $contents = file_get_contents($file);

    file_put_contents(
        $file,
        preg_replace('/<!--delete-->.*<!--\/delete-->/s', '', $contents) ?: $contents
    );
}

function determineSeparator(string $path): string {
    return str_replace('/', DIRECTORY_SEPARATOR, $path);
}

function replaceForWindows(): array {
    return preg_split('/\\r\\n|\\r|\\n/', run('dir /S /B * | findstr /v /i .git\ | findstr /v /i vendor | findstr /v /i '.basename(__FILE__).' | findstr /r /i /M /F:/ ":author :vendor :package local-url Anotherkit anotherkit vendor_name vendor_slug author@domain.com"'));
}

function replaceForAllOtherOSes(): array {
    return explode(PHP_EOL, run('grep -E -r -l -i ":author|:vendor|:package|local-url|Anotherkit|anotherkit|vendor_name|vendor_slug|author@domain.com" --exclude-dir=vendor ./* ./.github/* | grep -v ' . basename(__FILE__)));
}

$gitName = run('git config user.name');
$authorName = ask('Author name', $gitName);

$gitEmail = run('git config user.email');
$authorEmail = ask('Author email', $gitEmail);

$vendorNameGuess = explode(':', run('git config remote.origin.url'))[1] ?? '';
$vendorName = ask('Vendor name', $vendorNameGuess);
$vendorSlug = slugify($vendorName);

$currentDirectory = getcwd();
$folderName = basename($currentDirectory);

$packageName = ask('Package name', title_case($folderName));
$packageSlug = slugify($packageName);

$description = ask('Package description', "This is my package {$packageSlug}");

writeln('------');
writeln("Author     : {$authorName} ({$authorEmail})");
writeln("Vendor     : {$vendorName} ({$vendorSlug})");
writeln("Package    : {$packageSlug} <{$description}>");
writeln('------');

writeln('This script will replace the above values in all relevant files in the project directory.');

if (! confirm('Modify files?', true)) {
    exit(1);
}

$files = (str_starts_with(strtoupper(PHP_OS), 'WIN') ? replaceForWindows() : replaceForAllOtherOSes());

foreach ($files as $file) {
    replace_in_file($file, [
        ':author_name' => $authorName,
        'author@domain.com' => $authorEmail,
        ':vendor_name' => $vendorName,
        ':vendor_slug' => $vendorSlug,
        ':package_name' => $packageName,
        ':package_slug' => $packageSlug,
        'local-url' => $folderName,
        'Anotherkit' => $packageName,
        'anotherkit' => $packageSlug,
        ':package_description' => $description,
        'diverently/anotherkit' => $vendorSlug . '/' . $packageSlug,
        'Another kirby project template' => $description,
        'This is a starterkit for Kirby. It sets you up with Kirby 3.5+, TailwindCSS 2.0+ and AlpineJS.' => $description,
        'Robert Cordes' => $authorName,
        'robert@diverently.com' => $authorEmail,
    ]);

    if (str_contains($file, 'README.md')) {
        removeReadmeParagraphs($file);
    }
}

confirm('Execute `composer install` and `npm install`?') && run('composer install && npm install');
confirm('Let this script delete itself?', true) && unlink(__FILE__);
