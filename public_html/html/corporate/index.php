<?php

function assetSrc($file) {
    echo $file . '?' . filemtime($file);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.sidr.dark.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" href="<?php assetSrc('css/style.css'); ?>">
        <link rel="stylesheet" href="<?php assetSrc('css/font-awesome.min.css'); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jquery.sidr.min.js"></script>
        <script type="text/javascript" src="js/wow.js"></script>
    </head>
    <body>
        <?php include('./_include/navbar.php'); ?>
        <?php include('./_include/banner.php'); ?>
        <?php include('./_include/why.php'); ?>
        <?php include('./_include/services.php'); ?>
        <?php include('./_include/partners.php'); ?>
        <?php include('./_include/about.php'); ?>
        <?php include('./_include/news.php'); ?>
        <?php include('./_include/blog.php'); ?>
        <?php include('./_include/articles.php'); ?>
    </body>
    <?php include('./_include/footer.php'); ?>
    <script>
        $(document).ready(function () {
            
            /*--------------------------------------------------
             WOW Effects Animation
             -------------------------------------------------*/
            $(function () {
                var wow = new WOW({
                    boxClass: 'wow', // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset: 200, // distance to the element when triggering the animation (default is 0)
                    mobile: false        // trigger animations on mobile devices (true is default)
                });
                wow.init();
            });

            $('#img-back-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });

            $('#navigation li button.navbar-btn').click(function () {
                location.href = $(this).data('url');
            });

            $('#responsive-menu-button').sidr({
                name: 'sidr-main',
                source: '#sidr'
            });
        });
    </script>
</html>
