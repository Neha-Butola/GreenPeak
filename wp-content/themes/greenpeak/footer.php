<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenpeak
 */

?>

</main>
<!-- * =============== Footer =============== * -->
<footer class="main-footer">
    <div class="row">
        <div class="col-md-3">
            <a href="/" class="footer-logo">
                <img src="<?php the_field('footer_logo', 'options'); ?>" alt="">
            </a>
        </div>
        <div class="col-md-6 text-center">
            <?php the_field('copyright_text', 'options'); ?>
        </div>
        <div class="col-md-3">
            <h5>
                <a href="mailto:<?php the_field('email_address', 'options'); ?>" target="_top"
                   class="mail-link"><?php the_field('email_address', 'options'); ?></a>
            </h5>
        </div>

    </div>
    <?php $icons = get_field('social_icons', 'options');
    if (!empty($icons)):?>
        <ul class="list-unstyled social-icons text-center">
            <?php foreach ($icons as $icon): ?>
                <li>
                    <a href="<?php echo $icon['icons_links']; ?>">
                        <i class="<?php echo $icon['icons_class']; ?>"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</footer>
<!-- * =============== /Footer=============== * -->
</div>

<?php wp_footer(); ?>
</body>
</html>
