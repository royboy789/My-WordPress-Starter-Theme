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
- Gulp (gulp cli)
    
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
Twitter Bootstrap is included, if you do not want bootstrap check out the `no-bootstrap` branch
  
__Customizing Bootstrap SASS__  
Open `/assets/scss/_bootstrap-custom` and comment out any css you do not need for your build.  

__Customizing Bootstrap JS__  
Open `gulfile.js` and comment out any JS files you do not need from the `jsFileList` array.

Gulp
=====  
- `gulp sass` - Minify CSS
- `gulp js` - Concatenate & Minify JS
