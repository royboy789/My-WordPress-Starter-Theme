    <footer class="container-fluid caldera-site-footer">
        <div class="row">
            <div class="col-sm-3">
                <a class="logo" href="<?php echo get_bloginfo( 'url' ); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo-round_50x50.png'; ?>" alt="WordPress Learn Caldera" />
                    Caldera Learn
                </a>
                <nav>
                    <ul>
                        <li>
                            <a href="<?php echo get_bloginfo('url') . '/learning-wordpress'; ?>">
                                Learning WordPress
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_bloginfo('url') . '/courses'; ?>">
                                WordPress Courses
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_bloginfo('url') . '/about'; ?>">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_bloginfo('url') . '/contact'; ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3 social">
                <strong class="footer-title">Follow</strong>
                <a class="twitter" href="https://twitter.com/CalderaLearn" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-sm-3 newsletter">
                <strong class="footer-title">Subscribe</strong>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
	</body>
</html>