<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>My fancy Theme</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">

</head>
<body>
<div id="cuerpo">
    <!-- Incluyo el header en mi index para tenerlo aparte-->
    <?php get_header()?>

    <?php

    echo "<h1 style='text-align: center ; color: #0ca5de ; font-size: xxx-large '>Hola Fancy</h1>"
    ?>

</div>
<?php get_footer();?>
</body>
</html>
