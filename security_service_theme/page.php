<?php get_header(); ?>

<div class="main">
<?php if(have_posts()):while(have_posts()): the_post();?>
<h1 style="text-align: center;"><?php
the_title()
?></h1>
<?php the_content()?>
<?php 
endwhile;
endif;
?>
</div>

<?php get_footer();?>