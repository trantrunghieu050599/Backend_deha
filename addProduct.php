<?php
/**
 * Created by PhpStorm.
 * User: TLD
 * Date: 01/03/2020
 * Time: 16:32
 */
?>
<?php
include "connect.php";
$connect = checkConnect();
$query = "SELECT * FROM products";
$result = mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="bosstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="bosstrap4/js/bootstrap.js">
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
    <div class="row bgHeader">
        <div class="col-sm-3 headerLogo">
            <a href="#"><span>LOGO</span></a>
        </div>
        <div class="col-sm-9 headerMenu">
            <ul>
                <li>
                    <a href="#">THỜI TRANG</a>
                </li>
                <li>
                    <a href="#">TIN TỨC</a>
                </li>
                <li>
                    <a href="#">GIỚI THIỆU</a>
                </li>
                <li>
                    <a href="#">LIÊN HỆ</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle myCss" data-toggle="dropdown">
                            DANH MỤC
                        </button>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="productsList.php">Danh sách sản phẩm</a>
                            <a class="dropdown-item" href="#">Danh sách tài khoản</a>
                            <a class="dropdown-item" href="#">Danh sách nhà cung cấp</a>
                            <a class="dropdown-item" href="#">Link 4</a>
                            <a class="dropdown-item" href="#">Link 5</a>
                        </div>
                    </div>
                </li>
                <li>
                    <input class="boxSearch" type="text" id="search"><label for="search"><i class="fas fa-search iconSearch"></i></label>
                </li>
            </ul>
        </div>
    </div>


    <div class="row">
        <div class="offset-2 col-sm-8">
            <h2 class="title">THÊM SẢN PHẨM</h2>
            <form method="post" action="createProduct.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tên sản phẩm:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="producer">Loại:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="item" value="Hè" required>Hè
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="item" value="Đông">Đônng
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Giá bán:</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="producer">Hãng sản xuất:</label>
                    <select class="form-control" id="producer" name="producer">
                        <option>ADIDAS</option>
                        <option>HERMES</option>
                        <option>CHANEL</option>
                        <option>GUCCI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Ảnh:</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary btnStyle">THÊM</button>
            </form>
        </div>
    </div>


    <div class="row bgFooter">
        <div class="col-sm-3 footer">
            <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
            <p>Địa chỉ</p>
            <div>
                5F, Intracom building, 82 Dịch Vọng Hậu, Cầu Giấy, Hà Nội
            </div>
        </div>
        <div class="col-sm-3 footer">
            <span class="icon"><i class="far fa-question-circle"></i></span>
            <p>Câu hỏi thường gặp</p>
        </div>
        <div class="col-sm-3 footer">
            <span class="icon"><i class="fas fa-phone"></i></span>
            <p>Liên hệ hỗ trợ</p>
            <span>Hotline:(+84)336826259</span>
            <span>Email: duongvinhad@gmail.com</span>
        </div>
        <div class="col-sm-3 footer">
            <span class="icon"><i class="fas fa-heart"></i></span>
            <p>Theo dõi chung tôi</p>
            <div class="follow">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="bosstrap4/css/jquery-3.2.1.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="bosstrap4/js/bootstrap.bundle.js"></script>
</html>


