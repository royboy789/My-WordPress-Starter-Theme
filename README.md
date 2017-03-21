My Starter Theme
----------------------
  
This is where I start with custom WP builds
  
Technology
==========
- SASS *CSS Pre-Processor*
- Gulp *For compiling minified CSS and JS*

Requirements
============
- Node (npm cli)
- Grunt (grunt cli)
    
Quick Start
===========
- Clone Repo into your themes directory

Build
======
- Open theme directory in Terminal
- Run `npm install`
- Run `gulp sass`
- Run `gulp js`
  
  
To Add JS or CSS
=================
Enqueue scripts in `theme-enqueue.php`.  
To add scripts to gulp task add them to the __jsFileList__ array in `gulpfile.js`
  
  
Bootstrap
=========
The `no-bootstrap` branch does not include bootstrap, check the `master` branch

Gulp
=====  
- `gulp sass` - Minify CSS
- `gulp js` - Concatenate & Minify JS
