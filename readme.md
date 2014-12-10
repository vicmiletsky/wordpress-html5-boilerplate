##Overview
Simple base for creating Wordpress themes, based on HTML5 BOILERPLATE 4.3.0 (http://html5boilerplate.com/)

##Usage
1. Copy these files to wp-content/themes/your-theme
2. Install & activate wp-less (https://github.com/oncletom/wp-less)
3. ...
4. Profit, start implementing your functionality

##Structure
1. assets/less/style.less - the main theme style, includes all css components and modules via @import. 
Made so to serve all styles in a single minified file. This file is enqueued in header.php and then handled by wp-less.
2. assets/less/components - put here your styles and then import in style.less, or use existing structure
3. assets/js - your javascript goes here
4. functions/ - everything from this folder is reqired_once in functions.php, made so to break functions into smaller files
5. style.css - here you put your theme details (http://codex.wordpress.org/Theme_Development#Theme_Stylesheet)
