<?php
function assetSrc($file)
{
    echo $file.'?'.filemtime($file);
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
        <script type="text/javascript" src="../js/jquery.sidr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.sidr.dark.css">
        <link rel="stylesheet" href="<?php assetSrc('css/style.css'); ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
        <?php include('./_include/footer.php'); ?>
        <script>
            $('#responsive-menu-button').sidr({
                name: 'sidr-main',
                source: '#navigation'
            });
        </script>
    </body>
</html>
