<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <div class="row">
        <div class="col-sm-9"><?php get_template_part('templates/content', 'page'); ?></div>
        <div class="col-sm-3"><?php dynamic_sidebar('sidebar-buddypress'); ?></div>
    </div>
<?php endwhile; ?>
<style>
    .wrap.container {
        width: 100%;
    }
</style>