# Anotherkit
This is a starterkit for Kirby. It sets you up with Kirby 3.5+, TailwindCSS 2.0+ and AlpineJS.

## Installation & setup
Start your new project with the following command:

```
composer create-project diverently/anotherkit yourprojectname
```

A new folder `yourprojectname` will be created with Kirby already setup. Next, `cd` into the project and run the following two command:

```
npm install
npx mix
```

This will install TailwindCSS and AlpineJS and run Laravel Mix to bundle everything. From there, you can follow the [Tailwind Docs](https://tailwindcss.com/docs/configuration) for setting up your project specific configuration.

## Change package.json
This starterkit includes the semantic-release package. To use it, you should change the repository in `package.json`. If you don't want to automatically version your repo, just remove the package by running `npm uninstall semantic-release last-release-git` and remove the release entry in `package.json`.

You should also change the name and description in `package.json` and `composer.json`.
