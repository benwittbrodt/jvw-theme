<?php get_header(); ?>

<div class="w-container" id="resume">
    <h2>Resume</h2>
    <img src="<?php echo get_theme_file_uri('/images/resume2020.pdf');?>" width="100%" alt="">
</div>

<div class="w-container" id="reels">
    <h2>Reels</h2>

    <iframe width="100%" height="500" src="https://www.youtube.com/embed/plWSRaSv5qc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <iframe width="100%" height="500" src="https://www.youtube.com/embed/r4yPKzAKDto" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="w-container" id="photos">
    <h2>Photos</h2>
<?php
$photos = get_post( 24 );
echo $photos->post_content;
?>

</div>

<div class="w-container" id="contact">
    <h2>Contact</h2>
    <?php 
        $contact = get_post( 28 );
        if(have_posts($contact)) {
            the_post();
            the_content();
        }
        
       
    ?>
</div>
<?php get_footer(); ?>