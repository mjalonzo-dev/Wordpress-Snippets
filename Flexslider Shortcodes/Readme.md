Flexslider Gallery Shortcode
===

Adds a [Flexslider] shortcode that will dynamically create a flexslider gallery for you.

## Requirements
If they aren't included in the project already, download the Flexslider files from [here](https://github.com/woothemes/flexslider).

## Installation
1. Add the source from flexslider-shortcodes.php to your functions.php file.
1. Include the flexslider files in all pages that will be displaying the gallery.
2. Add the flexslider-shortcode-scripts.js file to all pages that will be displaying the gallery.

## Usage
Create the gallery with [flexslider], then define each slide with [slide].

	[flexslider]
	[slide]
	Slide 1 content ...
	[/slide]
	[slide]
	Slide 2 content ...
	[/slide]
	[slide]
	Slide 3 content ...
	[/slide]
	[/flexslider]

## Note
This shortcode will only work for one flexslider per page and may cause problems when multiple flexsliders are loaded.