<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>



<header>
  <div class= "navbar navbar-default">
    <div class="container">
     <div class="navbar-header"
       <button type= "button"class="navbar-toggle" data-toggle="collapse" data-target="#example">
       	  <span class= "icon bar"></span>
       	  <span class= "icon bar"></span>
       	  <span class= "icon bar"></span>
       </button>
       <a href="" class="navbar-brand">Portfolio</a>
  </div>
  <div class="collapse navbar-collapse" id="example">
  	 <ul class="nav navbar-nav">
  	 	<li><a href="">Main</a></li>
  	 	<li class= "active"><a href="">About</a></li>
  	 	<li class= "active"><a href="">Portfolio</a></li>
  	 	<li class= "active"><a href="">Contact</a></li>
  	 	<li class= "active"><a href="">More</a></li>
  	 </ul>












