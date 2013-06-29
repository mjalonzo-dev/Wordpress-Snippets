<?php 

// Flexslider Gallery Shortcodes
add_shortcode('flexslider', 'flexslider_func');

function flexslider_func($attr, $content = null) {

    global $add_flexslider_shortcode_script;

    $add_flexslider_shortcode_script = true;

    // Parse content for slides
    $delimiter = '#';
    $startTag = '[slide]';
    $endTag = '[/slide]';
    $regex = $delimiter . preg_quote($startTag, $delimiter) 
                        . '(.*?)' 
                        . preg_quote($endTag, $delimiter) 
                        . $delimiter 
                        . 's';

    $slides = array();

    preg_match_all($regex,$content,$slides);

    $flexslider_content = '<div class="flexslider"><ul class="slides">';

    foreach($slides[1] as $slide) {
      $flexslider_content .= '<li>' . do_shortcode( $slide ) . '</li>';
    }

    $flexslider_content .= '</ul></div>';

    return $flexslider_content;
}

?>