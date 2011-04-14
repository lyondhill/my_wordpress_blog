<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin footer -->

</div>

<?php 
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } 
      else { $$value['id'] = get_settings( $value['id'] ); } 
} ?>

<?php get_sidebar(); ?>

<hr/>

    <div id="footer">
        <p class="first">
            <span><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></span><?php if($theme_footer=="Nothing") { } elseif ($theme_footer=="Custom") { $str = stripslashes($theme_footer_custom); echo '  &nbsp; <strong>'.$str.'</strong>'; } else { echo ' &nbsp; <strong>'; echo bloginfo('description').'</strong>' ; } ?>
        </p>
        <p>
            <?php echo sprintf(__("Powered by <a href='http://wordpress.org/' title='%s'>WordPress</a>"), __("Powered by WordPress, state-of-the-art semantic personal publishing platform.")); ?>. &nbsp; Fazyvo 1.6 by <a href="http://www.noonnoo.com/wordpress/my-free-wordpress-themes/fazyvo_1-6/">NOONnoo</a>. &nbsp; <?php wp_loginout(); ?>. <?php wp_register(' &nbsp; ', '. &nbsp;'); ?> <?php wp_footer(); ?>
        </p>
        
    </div>

</div>


</body>
</html>