# houseStyle

This is the house style for distraction projects. This will be used as the boilerplate for projects that fit this sort of design in order the skip the cruft and leave extra time for the features that matter. This document will be treated as the design document. Therefor should any help be required this should be here to reference. If you find anything that should or could be in here, please submit a bug report. 

This front end code is intended to go hand-in-hand with the custom wordpress install that will be uploaded here: LINK PENDING. 

This custom wordpress install will be pre-configured to match this front-end, therefore it is important to not change any of the standard variable or function names. 

## File Layout

The project will be created having done a lot of the work to shift it to a template already done. This is why the files are seperated into sections and the file sturcture is pre-organized into the standard wordpress template structure. 

## Dependencies

At the time of writing this project is based off: 
- Twitter Bootstrap
- Javascript
- jQuery
- Slick Carousel 
- PHP
- Wordpress

## Building A Wordpress Template

This section will cover converting the house style into a wordpress template.

Converting a Bootstrap front end into a wordpress theme is generally an easy process. To begin with the pages need to be seperated into seperate files. THe files must be saved as PHP files in order for them to be recognized by wordpress. This is essential for parsing the PHP in the files. The necessary files are: 

- header.php
- index.php
- footer.php
- functions.php
- style.css

All of these files above should be kept in the root of the theme folder. It is also important to create the:

* /js
* /css
* /img
  
folders to utilize for customization later. However at this time nothing goes in them.

## CSS

In order for Wordpress to recognize the theme a speific comment needs to place at the top of style.css: 

/*

- Theme Name: distractionBasic
- Theme URI: ENTER Later
- Description: Distraction basic theme
- Version: 0.1
- License: REVIEW LICENSES
- License URI: LICENSE LINK

*/

Theme name decides the name in wordpress. Theme URI allows others to find the theme if it is hosted anywhere. The License is important. Due to this theme being created in-house for Distraction the license will be reviewed and an appropriate on chosen in the future.

Wordpress requires bootstrap imports to be imported in the CSS. Although our theme pulls the files from the CDN, the local files are also referenced so that they can be placed in via FTP should the CDN's go down. Here is the standard imports required for the theme. Bootstrap CSS is kept in the CSS folder.

- @import url('css/bootstrap-theme.css');
- @import url('css/bootstrap-theme.min.css');
- @import url('css/bootstrap.css');
- @import url('css/bootstrap.min.css');

## Header 

The header structure is important as the order of dependencies determines whether specific functionality. The order in the header.php is typically best to keep unless other technologies are being used, in which case they should at the bottom of the header, not in front of jQuery or the Bootstrap CDN. 

#### Using Multiple Headers

    <?php get_header('') ?> 

This function allows for a different header to loaded in via the correct page file. You may need a different header for the page should you want to optimize what is loaded via each page or provide a different appearence to the header of the site. 

It is important to note that any header created other than the standard header needs to be prefixed with "header-". For example: 
    
    header-secondHeader.php.
You must also ensure to have the wordpress head function at the bottom of the <head> tags because some Wordpress plugins rely on it. For example: 

    <head> <?php wp_head(); ?> </head>

## Page Templates

The get_header function is placed at the top of new page template files in order to pull their specific header. Utilizing page templates is important for providing different layouts and functionality to different pages on the site. In order for templates to be recognized on each page file in wordpress it requires a comment in the top of the file again:

/**
 * Template Name: TEMPLATE PAGE NAME
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 
**/

This is where the main content and functionlity for this theme is pulled from for the templates. For user freindliness every editable text field is implemented using custom fields to ensure the client can edit it easily. For information on how to instantiate fields please check the functions section. 

The custom fields tend to follow the naming convention of extraContent

For a blog style page, the template must be named 

  home.php
  
in order for the right template to be inherited, otherwise it will use the index.php template, which is typically the front page. 


## Functions
