<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-logo text-center">
                    <?php the_custom_logo(); ?>
                </div>
                <h3 class="tagline">
                    <?php bloginfo( "description" ); ?>
                </h3>
                <h1 class="align-self-center display-1 text-center heading">
                    <a href="<?php echo site_url(); ?>"><?php bloginfo( "name" ); ?></a>
                </h1>
            </div>
            <div class="col-md-12">
                <div class="text-center">
                <?php echo date("m/d/Y"); ?>
                </div>
                <div class="navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topmenu',
                            'menu_id'        => 'topmenucontainer',
                            'menu_class'     => 'list-inline text-center',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>