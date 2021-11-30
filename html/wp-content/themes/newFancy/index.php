<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>My fancy Theme</title>

</head>
<body>
<div id="cuerpo" class="cuerpo">
    <?php
    get_header();
    if (have_posts()) :
        while (have_posts()) :
            ?>
            <div class="post">
                <?php
                the_post(); ?>
                <div class="thumbnailImagen" style="margin-bottom: 150px"><p><?php the_post_thumbnail(); ?></div></p>
                <div class="excerpt" style="margin-bottom: 60px"><br>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <?php the_excerpt(); ?>
                    <br>
                </div>
            </div>
            <br>
            <br>
            <br>
        <?php

        endwhile;
    endif;
    get_footer();
    ?>


</div>
</div>
</body>
</html>
