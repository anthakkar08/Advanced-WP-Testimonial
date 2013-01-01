<?php
/**
 * Get the Text Before the Widget Title
 * @version 1.1
 */
function awt_before_title(){
    global $awt_template;
    
    echo $awt_template->before_title;
}

function awt_after_title(){
    global $awt_template;
    
    echo $awt_template->after_title;
}

function awt_title(){
    global $awt_template;
    
    echo $awt_template->title;
}

function awt_before_widget(){
    global $awt_template;
    
    echo $awt_template->before_widget;
}

function awt_after_widget(){
    global $awt_template;
    
    echo $awt_template->after_widget;
}

function awt_has_widget_title(){
    global $awt_template;
    
    return (empty($awt_template->title)?FALSE:TRUE);
}

function awt_widget_posts(){
    global $awt_template;
    
    return $awt_template->posts;
}