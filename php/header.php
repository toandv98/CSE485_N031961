<link rel="stylesheet" href="./css/header.css">
<header>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <div class="navbar-header d-flex col">
            
            <a class="navbar-brand" href="./index.php"><span><img class="mr-2" src="./image/logo.png" width="40px"></span>Nhac Online</b></a>
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="./baihat.php" class="nav-link">Bài hát</a></li>
                <li class="nav-item dropdown">
                    <a data-hover="dropdown" class="nav-link dropdown-toggle" href="#">Chủ đề <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-hover="dropdown" class="nav-link dropdown-toggle" href="#">BXH <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-hover="dropdown" class="nav-link dropdown-toggle" href="./album.php">Album <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-hover="dropdown" class="nav-link dropdown-toggle" href="#">Video <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                        <li><a href="#" class="dropdown-item">item</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-hover="dropdown" class="nav-link dropdown-toggle" href="#">Nhạc sỹ <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="dropdown-item">Việt Nam</a></li>
                        <li><a href="#" class="dropdown-item">Âu Mỹ</a></li>
                        <li><a href="#" class="dropdown-item">Châu Á</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form form-inline">
                <div class="input-group search-box">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm..." aria-label="Tìm kiếm...">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Đăng nhập</a>
                    <ul class="dropdown-menu form-wrapper">
                        <li>
                            <form action="confirmation.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tên đăng nhập" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mật khẩu" required="required">
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Đăng nhập">
                                <div class="form-footer">
                                    <a href="#">Quên mật khẩu?</a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Đăng
                        ký</a>
                    <ul class="dropdown-menu form-wrapper">
                        <li>
                            <form action="confirmation.php" method="post">
                                <p class="hint-text">Điền thông tin để đăng ký!</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tên đăng nhập" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mật khẩu" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Xác nhân mật khẩu"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" required="required"> Tôi đồng
                                        ý các <a href="#">Điều khoản &amp; Điều kiện</a></label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-block" value="Đăng ký">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</header>
<script type="text/javascript">
    $(document).on("click", ".navbar-right .dropdown-menu", function (e) {
        e.stopPropagation();
    });
</script>