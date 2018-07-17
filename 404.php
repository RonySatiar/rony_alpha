<?php
get_header();
?>

    <body <?php body_class(); ?>>
    <div class="container error-view">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">
                    <?php
                    _e("Sorry! We couldn't found what you were looking for...","alpha");
                    ?>
                </h1>
            </div>
        </div>
    </div>
    </body>

<?php
get_footer();
