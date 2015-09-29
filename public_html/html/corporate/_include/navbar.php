<div id="mobile-header">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a id="responsive-menu-button" class="btn btn-orange navbar-btn" href="#">Menu</a>
            </div>
        </div>
    </nav>
</div>
<div id="navigation">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About EvolableAsia</a></li>
                    <li><a href="#">開発ならエボ</a></li>
                    <li><a href="#">
                        <img class="img-responsives" src="img/29.png">
                    </a></li>
                    <li><a href="#">サービス</a></li>
                    <li><a href="#">ニュース</a></li>
                    <li><a href="#">Recruit</a></li>
                    <li>
                        <a href="#" class="active">お問い合わせ</a>
                    </li>
                    <!-- <li class="navbar-bars">
                        <a href="#"><span class="fa fa-bars fa-lg"></span></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</div>
<script type="text/javascript">
    $(function () {
        $('#navigation li button.navbar-btn').click(function () {
            location.href = $(this).data('url');
        });
    })
</script>