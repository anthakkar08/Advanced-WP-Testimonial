<?php
/**
 * Get the Text Before the Widget Title
 * @since 1.1.0
 * @author Anand Thakkar 
 */
function awt_get_before_title(){
    global $awt_template;
    
    return; $awt_template->before_title;
}

/**
 * 
 * @since 1.1.0
 * @author Anand Thakkar 
 */
function awt_the_before_title(){
    
    echo awt_get_before_title();
}

/**
 * 
 * @since 1.1.0
 * @author Anand Thakkar
 */
function awt_get_after_title(){
    global $awt_template;
    
    return $awt_template->after_title;
}
/**
 * @since 1.1.0
 */
function awt_the_after_title(){

    echo awt_get_after_title();
}

/**
 * 
 * @since 1.1.0
 */
function awt_get_widget_title(){
    global $awt_template;
    
    return $awt_template->title;
}
/**
 * @since 1.1.0
 */
function awt_the_widget_title(){
  
    awt_the_after_title();
    echo awt_get_widget_title();
    awt_the_before_title();
}

/**
 * 
 * @since 1.1.0
 */
function awt_has_widget_title(){
    global $awt_template;
    
    return (empty($awt_template->title)?FALSE:TRUE);
}

/**
 * 
 * @since 1.1.0
 */
function awt_get_before_widget(){
    global $awt_template;
    
    return $awt_template->before_widget;
}
/**
 * @since 1.1.0
 */
function awt_the_before_widget(){
   
    echo awt_get_before_widget();
}

/**
 * 
 * @since 1.1.0
 */
function awt_get_after_widget(){
    global $awt_template;
    
    return $awt_template->after_widget;
}
/**
 * @since 1.1.0
 */
function awt_the_after_widget(){
    
    echo awt_get_after_widget();
}

/**
 * 
 * @since 1.1.0
 */
function awt_widget_posts(){
    global $awt_template;
    
    if(is_array($awt_template->posts))
        return $awt_template->posts;
    else
        return array();
}
/**
 * 
 * @param obj $post_obj Post Object
 * @return string
 */
function awt_get_title($post_obj = NULL){
    global $post;
    if(is_null($post_obj)){
        $post_obj = $post;
    }
    
    return apply_filters('awt_title',$post_obj->post_title);
}

/**
 * 
 */
function awt_the_title(){
    echo awt_get_title();
}

function awt_get_content($post_obj = NULL){
    global $post;
    
    if(is_null($post_obj)){
        $post_obj = $post;
    }
    
    return apply_filters('awt_content',$post_obj->content);
}

function awt_the_content(){
    echo awt_get_content();
}
/**
 * 
 * @global type $post
 * @param Obj $post_obj
 * @param array $args
 * @return string
 */
function awt_get_excerpt($post_obj = NULL,$args = array()){
    global $post;
    
    $default_args = array(
        'length' => get_option('awt_short_desc_length',55),
    );
    
    $args = array_merge($default_args,$args);
    
    if(is_null($post_obj)){
        $post_obj = $post;
    }
    
    $content = empty($post_obj->post_excerpt)?$post_obj->post_content:$post_obj->post_excerpt;
    
    return apply_filters('awt_excerpt',wp_trim_words($content,$args['length']));
}

/**
 * 
 * @param Obj $post_obj
 * @param array $args
 */
function awt_the_excerpt($post_obj = NULL,$args = array()){
    echo awt_get_excerpt($post_obj,$args);
}

function awt_get_client_img($post_obj = NULL){
    
}