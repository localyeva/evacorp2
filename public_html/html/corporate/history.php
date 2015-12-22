<?php

function assetSrc($file) {
    echo $file . '?' . filemtime($file);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <link rel="stylesheet" href="<?php assetSrc('css/style.css'); ?>">
    </head>
    <body>
        <?php include('./_include/navbar.php'); ?>
        <div id="history-profile">
            <?php include('./_include/history/banner.php'); ?>
            <?php include('./_include/history/breadcrumbs.php'); ?>
            <?php include('./_include/history/history.php'); ?>
            <?php include('./_include/compro/contact.php'); ?>
        </div>
        <?php include('./_include/footer.php'); ?>
        <script>
            $(document).ready(function () {
                $('#img-back-top').on('click', function (e) {
                    e.preventDefault();
                    $('html,body').animate({
                        scrollTop: 0
                    }, 700);
                });

                jQuery.fn.extend(
                        {
                            scrollTo: function (speed, easing)
                            {
                                return this.each(function ()
                                {
                                    var targetOffset = $(this).offset().top;
                                    $('html,body').animate({scrollTop: targetOffset}, speed, easing);
                                });
                            }
                        });
                $(function () {
                    $('a').on('click', function () {
                        if ($(this).data('goto') != '') {
                            var goto = $(this).data('goto');
                            $('#' + goto).scrollTo(500);
                        }
                    });
                });
            });
        </script>
    </body>
</html>
