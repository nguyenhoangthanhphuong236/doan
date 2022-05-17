<div class="container-fluid footer">
    <div class="row p-5">
        <div class="col-md-3 text-center footer-header">
            <img src="./public/images/logocanhan.jpg" style="width: 150px">
            <h5 class="text-shadow">
                <h5 id="heading">Đến với shop của chúng tôi sẽ có rất nhiều sản phẩm phù hợp với sở thích của các bạn! HN22 xin kính chào quý khách!</h5>
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
        <div class="col-md-3 text-center">
            <table class="table table-hover text-center">
                <h4 class="text-uppercase">Liên hệ</h4>

                <tr>
                    <td>174/1, Trần Phú, Thừa Thiên Huế hoặc 115 Phan Chu Trinh, Tam Kỳ, Quảng Nam.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-phone" style="margin-right: 10px"></i>0768495661</td>
                </tr>
                <tr>
                    <td><i class="fas fa-envelope" style="margin-right: 10px"></i>hangianiok02@gmail.com</td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 text-center">
            <table class="table table-hover text-center">
                <h4 class="text-uppercase">Hỗ trợ</h4>

                <tr>
                    <td>Đổi trả trong vòng 1 tháng</td>
                </tr>
                <tr>
                    <td>Tư vấn phù hợp cho mọi khách hàng</td>
                </tr>
                <tr>
                    <td>Thanh toán và được kiểm tra hàng ngay khi nhận hàng</td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 text-center">
            <table class="table table-hover text-center">
                <h4 class="text-uppercase">Mạng xã hội</h4>
                <tr>
                    <td><img class="rounded-circle" src="https://4.bp.blogspot.com/-ZRHqHrFblag/VmFhC1nMCGI/AAAAAAAABHs/ZPII4I-bY8U/s1600/icon-facebook.jpg" style="width: 60px"></td>
                    <td><img class="rounded-circle" src="https://www.pngkey.com/png/full/283-2831746_insta-icon-instagram.png" style="width: 60px"></td>
                    <td><img class="rounded-circle" src="https://www.pinclipart.com/picdir/middle/530-5305994_icon-youtube-logo-png-clipart.png" style="width: 60px"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--end container-fluid-->