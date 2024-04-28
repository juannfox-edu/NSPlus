# AMD - Compiled Javascript

**Moodle** uses [AMD](https://docs.moodle.org/dev/Tutorial#Adding_Javascript) (Asynchronous Module Definition) compiled *Javascript* files, under the `amd/src` folder. This is a choice of performance and is enforced as a requirement; [Grunt](https://gruntjs.com/getting-started) is used to compile the code.

## Initial setup

### Configuring the project for Grunt

As per the following [guide](https://gruntjs.com/project-scaffolding), install **Grunt**

```bash
npm install -g grunt-cli grunt-init
```

And then download the [template for Gruntfile](https://github.com/gruntjs/grunt-init-gruntfile) by cloning the repository under `$HOME/.grunt-init`.
Then scaffold the repository:

```bash
grunt-init grunt-init-gruntfile
```

This will create an **NPM** `package.json` and a **Grunt** `Gruntfile.js`.
