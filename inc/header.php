<div class="container-fluid">
    <div class="row text-center thanhheader">
        <div class="col-md-2 hotline" style="margin-top: 7px;">
            <p style=" font-size:22px;"><strong>Hotline:</strong> 0768495661</p>
        </div>
        <div class="col-md-2 icon" style="margin-top: 12px;">
            <span><i class="fab fa-facebook-square"></i></span>
            <span><i class="fab fa-google-plus-square"></i></span>
            <span><i class="fab fa-twitter-square"></i></span>
        </div>
        <div class="col-md-4 offset-md-2 dk" style="margin-top: 8px;">
            <button type="button" class="btn" style="margin-right: 30px; margin-left: 160px; width: 140px"><a href="dn.html" style="text-decoration: none; font-size:15px">Đăng nhập</a></button>
            <button type="button" class="btn" style="margin-left: 10px; width: 120px"><a href="dk.html" style="text-decoration: none; font-size:15px">Đăng ký</a></button>
        </div>
        <div class="col-md-2" style="margin-top: 8px;">
            <div class="btn-user">
                <div class="btn-cart1" onclick="show()">
                    <img id="icons-cart" src="./public/images/cart.png" alt="">
                </div>
            </div>

            <div class="column-cart" id="displayBlock">
                <div class="cart-total">
                    <strong class="cart-total-title">Tổng Tiền: </strong>
                    <span class="cart-total-price">0đ</span>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
<!--end container-fluid-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="TrangChu.html">
            <img src="./public/images/logocanhan.jpg" style="width: 60px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                <li class="nav-item" style="margin-right: 90px">
                    <a class="nav-link active" aria-current="page" href="index.html">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="gioithieu.html">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dam.html">Đầm</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Áo </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="croptop.html">Áo croptop</a></li>
                        <li><a class="dropdown-item" href="thun.html">Áo thun</a></li>
                        <li><a class="dropdown-item" href="kieu.html">Áo kiểu</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Quần </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="jean.html">Quần jean</a></li>
                        <li><a class="dropdown-item" href="ongrong.html">Quần ống rộng</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Đồ bộ </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="thoitrang.html">Set thời trang</a></li>
                        <li><a class="dropdown-item" href="thethao.html">Set thể thao</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Thông tin </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="lienhe.html">Thông tin liên hệ</a></li>
                        <li><a class="dropdown-item" href="tintuc.html">Tin tức</a></li>
                        <li><a class="dropdown-item" href="giaonhan.html">Chính sách giao nhận</a></li>
                        <li><a class="dropdown-item" href="doitra.html">Chính sách đổi trả</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm" title="Type in a name">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>