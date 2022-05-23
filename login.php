<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Css/trangchu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Nhúng file CSS -->
    <link rel="stylesheet" href="./public/css/login.css">
</head>

<body onload="autoloading()">

    <!-- Nhúng file JavaScript -->
    <script language="javascript" src="./public/js/login.js"></script>
    <div class="container-fluid">
        <!--<div class="row" style="background-image: url(https://scr.vn/wp-content/uploads/2020/07/Background-xanh-l%C3%A1-c%C3%A2y-nh%E1%BA%A1t.jpg);">
            <div class="col-md-6">
                <img class="anhlogo" src="./public/images/logocanhan.jpg">
                <h5 class="text-shadow">
                    <h5 id="heading">Đến với shop của chúng tôi sẽ có rất nhiều sản phẩm phù hợp với sở thích của các bạn! Hãy cùng thỏa thích mua sắm cùng bạn bè, sắm cho mình những bộ đồ đẹp, thoải mái để đi chơi, dự tiệt,... HN22 xin kính chào quý khách!</h5>
                    <script>
                        const colors = ["#FF0000", "#0066CC", "#FF3399", "#330099", "#660099", "#FF9999",
                            "#33FF33", "#CC9900"
                        ];

                        const heading = document.getElementById('heading');

                        setInterval(function() {
                            // Lấy ra 1 số ngẫu nhiên
                            random = Math.floor(Math.random() * colors.length);
                            // console.log(random, colors[random]);
                            heading.style.color = colors[random]
                        }, 500)
                    </script>
                </h5>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-5" style="margin-top:8px; margin-bottom: 8px;">-->

        <!--<div class="register">
						<h1>Đăng Nhập</h1>
						<p>Vui lòng điền thông tin để đăng nhập</p>
						<hr>
						<label for="username1"><b>Tên đăng nhập</b></label>
						<input type="text" placeholder="Họ và tên" name="username1" id="username1">

						<label for="password1"><b>Mật khẩu</b></label>
						<input type="password" placeholder="Nhập pass có độ dài từ 6 đến 12 kí tự" name="password1" id="password1">

						<label>
						    <input type="checkbox" checked="checked" name="remember"> Remember
						</label>

						<button type="submit" class="submit" onclick="return validate1()"><a href="index.php" style="text-decoration: none;">Đăng nhập</a></button>
					</div>

					<div class="register login">
						<p>Bạn chưa có tài khoản? <a href="dk.html">Đăng ký</a>.</p>
					</div>
            </div>
        </div>-->
        <div class="overlay">
            <!-- LOGN IN FORM by Omar Dsoky -->
            <form>
                <!--   con = Container  for items in the form-->
                <div class="con">
                    <!--     Start  header Content  -->
                    <header class="head-form">
                        <h2>Đăng nhập</h2>
                        <!--     A welcome message or an explanation of the login form -->
                        <p>login here using your username and password</p>
                    </header>
                    <!--     End  header Content  -->
                    <br>
                    <div class="field-set">

                        <!--   user name -->
                        <span class="input-item">
                            <i class="fa fa-user-circle"></i>
                        </span>
                        <!--   user name Input-->
                        <input class="form-input" id="txt-input" type="text" placeholder="username" required>

                        <br>

                        <!--   Password -->

                        <span class="input-item">
                            <i class="fa fa-key"></i>
                        </span>
                        <!--   Password Input-->
                        <input class="form-input" type="password" placeholder="Password" id="pwd" name="password" required>

                        <!--      Show/hide password  -->
                        <span>
                            <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
                        </span>


                        <br>
                        <!--        buttons -->
                        <!--      button LogIn -->
                        <button class="log-in"> Log In </button>
                    </div>

                    <!--   other buttons -->
                    <div class="other">
                        <!--      Forgot Password button-->
                        <button class="btn submits frgt-pass">Forgot Password</button>
                        <!--     Sign Up button -->
                        <button class="btn submits sign-up">Sign Up
                            <!--         Sign Up font icon -->
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </button>
                        <!--      End Other the Division -->
                    </div>

                    <!--   End Conrainer  -->
                </div>

                <!-- End Form -->
            </form>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>