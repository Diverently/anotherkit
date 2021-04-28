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

## Semantic versioning
This starterkit uses [semantic-release](https://github.com/semantic-release/semantic-release) to automatically tag your commits. Here is an example of the release type that will be done based on a commit message (taken from their Readme):

| Commit message                                                                                                                                                                                   | Release type               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | -------------------------- |
| `fix(pencil): stop graphite breaking when too much pressure applied`                                                                                                                             | Patch Release              |
| `feat(pencil): add 'graphiteWidth' option`                                                                                                                                                       | ~~Minor~~ Feature Release  |
| `perf(pencil): remove graphiteWidth option`<br><br>`BREAKING CHANGE: The graphiteWidth option has been removed.`<br>`The default graphite width of 10mm is always used for performance reasons.` | ~~Major~~ Breaking Release |

semantic-release uses [Angular Commit Message Conventions](https://github.com/angular/angular/blob/master/CONTRIBUTING.md#-commit-message-format), so the type can be one of the following:

* **build**: Changes that affect the build system or external dependencies (example scopes: gulp, broccoli, npm)
* **ci**: Changes to our CI configuration files and scripts (example scopes: Circle, BrowserStack, SauceLabs)
* **docs**: Documentation only changes
* **feat**: A new feature
* **fix**: A bug fix
* **perf**: A code change that improves performance
* **refactor**: A code change that neither fixes a bug nor adds a feature
* **test**: Adding missing tests or correcting existing tests
* **chore**: Changes that affect external dependencies for example
