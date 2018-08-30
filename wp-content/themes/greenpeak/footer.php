<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12 footer-logo">
                <a href="/" class="footer-logo"><img src="<?php the_field('footer_logo','options'); ?>"
                                                                      alt=""></a>
            </div>
            <div class="col-md-6 col-sm-12 footer-text text-center">
                <?php the_field('copyright','options'); ?>
            </div>
            <div class="col-md-3 col-sm-12 footer-text">
                <h5><a href="mailto:<?php the_field('email','options'); ?>" target="_top"
                       class="mail-link"><?php the_field('email','options'); ?></a></h5>
            </div>

        </div>
        <?php $social_icons = get_field('social_icons','options');
        if (!empty($social_icons)):?>
            <div class="row">
                <div class="col-12 social-icons">
                    <ul class="text-center">
                        <?php foreach ($social_icons as $icons): ?>
                            <li><a href="<?php echo $icons['icons_link']; ?>" target="_blank"><i
                                            class="<?php echo $icons['icons_class']; ?>"></i></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
