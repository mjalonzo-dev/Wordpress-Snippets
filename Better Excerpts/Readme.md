# Better Excerpts

Improves Wordpress' the_excerpt() function.
Source: [BAC Software Consulting](http://bacsoftwareconsulting.com/blog/index.php/wordpress-cat/how-to-create-a-variable-length-excerpt-in-wordpress-without-a-plugin/)

## Features

1. Option to generate a variable Length Excerpt.
2. Option to generate a fixed Length Excerpt. Complete the sentence in the Excerpt.
3. Option to add a 'Continue Reading' link to the text (Excerpt ending).
4. Option to add an unlinked Ellipsis to the text (Excerpt ending).
5. Option to preserve ALL, SOME, or NONE of the HTML formatting in the Excerpt.
6. The Code counts 'real words'. Does not count the HTML tags or their content.
7. Advantage of step 6: No opened HTML tags in the Excerpt. 
8. Code Ignores Manual Excerpts and use the auto-generated one instead.

## Usage

	Simply add the code to your functions.php file and call the_excerpt();