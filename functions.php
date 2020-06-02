<?php
function paragraphWrap($text, $print){
    if($print == False) {
    return '<p>' . $text . '</p>';
    } else {
        echo '<p>' . $text . '</p>';
    }
}
?>