<?php
/* 
* Number of characters shown on home page blog summary
*/
function new_excerpt_length($length) {
    return 150;
}
add_filter('excerpt_length', 'new_excerpt_length'); 

?>