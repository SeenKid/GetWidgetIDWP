<?php

/**
* Plugin Name: GetWidgetID
* Author: SeenKid
* Version: 1.1
* Description: Montre l'ID des widgets
* Plugin URI: https://github.com/SeenKid/GetWidgetIDWP
*/

// GET WIDGET ID

add_action('in_widget_form', 'spice_get_widget_id');
function spice_get_widget_id($widget_instance) {
    // Check if the widget is already saved or not.
    if ($widget_instance->number=="__i__"){
        echo "<p><strong>Widget ID is</strong>: Pls save the widget first!</p>";
    } else {
        echo "<p><strong>Widget ID is: </strong>" .$widget_instance->id. "</p>";
    }
}
