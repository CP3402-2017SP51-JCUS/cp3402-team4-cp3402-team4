<?php
/**
 * Template Name: About Us Template
 */
get_header(); ?>
<div class="about-us-content">
    <div class="title">
        <div class="container">
            <div class="maintitle"><a href="new.html">Special Creations</a></div>
            <div class="subtitle">Let's make your own gift</div>
        </div>
    </div>
    <div class="navigation-container"></div>
    <div class="container">
        <div class="display-title">About Us</div>
        <div class="details">
            <?php get_the_content() ?>
        </div>
    </div>

<?php get_footer(); ?>
