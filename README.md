#Starter Files
=============

Utilizing Sass/SCSS


I utilize starter files to create the beginning of each project. I like to use Sass and create separate .scss files for each major module to match each defined section from the kickoff meeting. This leads to the CSS folder looking something similar to:

* _general.scss
* _global.scss
* print.css
* screen.css
* screen.scss
* pieces/_carousel.scss
* pieces/_foooter.scss
* pieces/_header.scss
* pieces/_layouts.scss
* pieces/_nav.scss
* pieces/_search.scss

## _general.scss

The General partial holds all the basic styles for all HTML elements to make sure no element goes unstyled and takes browser defaults, therefore not matching your design. All element selectors (no classes/IDs) go in this document to cover the base styling for everything from an H5 to a blockquote to a table.

## _global.scss
The Global partial holds Sass Mixins, which is shared amongst all projects utilizing Sass, being updated periodically with new or more efficient mixins. 

## screen.scss
Screen.scss imports all other files and holds smaller updates to styles, such as .left and .right classes, or read more links; styles that are beyond general but aren't large enough to demand their own partial. That file should be compiled into a single screen.css link. 


## print.css
Print, is well, pretty self-explanatory. 

## pieces/_layouts.scss
The layouts partial holds the different column and grid structures that will be found in the site. The foundation should consist of all possible layouts (one column, two column, sub column on left, sub column on right, etc.).

## pieces folder
The Pieces folder holds all other modules. 
