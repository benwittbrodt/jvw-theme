<?php get_header(); ?>

<div class="w-container" id="resume">
    <h1>Resume</h1>
    <hr>
    <img src="<?php echo get_theme_file_uri('/images/resume2020.pdf');?>" width="100%" alt="">
</div>

<div class="w-container" id="reels">
    <h1>Reels</h1>
    <hr>
    <br>
    <?php
        $post_id = 51;
        $queried_post = get_post($post_id);
        $content = $queried_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        wp_reset_postdata();
    ?>
    
</div>

<div class="w-container" id="photos">
    <h1>Photos</h1>
    <hr>
    <br>
    <?php
    $photos = get_post( 24 );
    echo $photos->post_content;
    ?>

</div>

<div class="w-container" id="contact">
    <h1>Contact</h1>
    <hr>
    <br>
    <?php 
        
        $post_id = 28;
        $queried_post = get_post($post_id);
        $content = $queried_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
       
    ?>
</div>
<?php get_footer(); ?>