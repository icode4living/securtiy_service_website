<?php get_header(); ?>
<div class="main">
<?php if(have_posts()):while(have_posts()): the_post();?>

<?php the_content()?>
</div>
<?php 
endwhile;
endif;
?>
<?php get_footer();?>