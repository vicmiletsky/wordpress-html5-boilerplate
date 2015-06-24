## Overview
Simple base for creating Wordpress themes, based on HTML5 BOILERPLATE 5.2.0 (http://html5boilerplate.com/)  
Uses LESS (http://lesscss.org/) as CSS pre-processor and relies on wp-less plugin (https://github.com/oncletom/wp-less)

## Deps
* wp-less - https://github.com/oncletom/wp-less

## Usage
1. Copy this bootstrap to `wp-content/themes/your-theme` (and remove this readme)
2. Install & activate wp-less (https://github.com/oncletom/wp-less)
3. ...
4. Profit, start implementing your functionality!
5. Don't forget to create actual screenshot.png

## Structure
* `assets/less/style.less` - the main theme style, includes all css components and modules via @import. 
Made so to serve all styles in a single minified file. This file is enqueued in `functions/enqueue.php` and then handled by wp-less. 
* `assets/less/components` - put here your styles and then import in style.less, or use existing structure
* `assets/js` - your custom javascript goes here
* `assets/vendor` - put external js libs here
* `functions/` - everything from this folder is reqired_once in functions.php, made so to break functions into smaller files
* `style.css` - here you put your theme details (http://codex.wordpress.org/Theme_Development#Theme_Stylesheet)
* Enqueue your styles and scripts in `functions/enqueue.php`
