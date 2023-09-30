<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bershka</title>
    <link rel="stylesheet" href="css/LH.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="magiczoom/magiczoom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="website icon" type="png" href="img/logo/OIP-removebg-preview (1) (Custom).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head> -->
<?php
include 'main/header.php';
?>
<body>
<?php
    include 'main/nav.php';
?>
    <!-- end header -->
    <div class="container">
        <div class="grid back-ground-color">
            <!-- phân chia nội dung và hình ảnh  -->
            <div class="Content-division">
                <!-- phân chia ô hình ảnh -->
                <div class="zoom responsive">
                    <img src="img/product/ao so mi/39kDVac.jpg" class="img-small">
                    <img src="img/product/ao so mi/39kDVac.jpg" id="imgZoom">
                    <!-- <div data-slick='{"responsive": 4, "slidesToScroll": 4}' class="responsive">
                        <div><h3>1</h3></div>
                        <div><h3>2</h3></div>
                        <div><h3>3</h3></div>
                        <div><h3>4</h3></div>
                        <div><h3>5</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        <div><h3>6</h3></div>
                        
                      </div> -->
                </div>
                <?php
                    include 'connect.php';
                    $conn=MoKetNoi();
                    if($conn->connect_error)
                    {
                        echo "không kết nối được MySQL";
                    }
                    mysqli_select_db($conn,"dl");		   
                ?>
                    <div class="content-product-div">

                    <div class="contents-product">
                        <h3 class="contents-product-texxt">
                            Áo sơ mi nam thun cotton bạc trắng
                        </h3>
                        <div class="limit">
                            <!-- giới hạn của mô tả -->
                            <span class="contents-product-texxxt">
                                -Thành phần: 98% Cotton, 2% Spandex - Chất liệu cotton luôn là một trong những chất liệu được sử dụng nhiều nhất trong ngành dệt may bởi nó đáp ứng đủ nhu cầu của người tiêu dùng: an toàn, dễ mặc, thoải mái, thấm hút mồ hôi tốt
                            </span>
                        </div>
                        <!-- đánh giá -->
                        <div class="rating">
                            <input type="radio" id="star-1" name="star-radio" value="star-1">
                            <label for="star-1">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                            </label>
                            <input type="radio" id="star-2" name="star-radio" value="star-1">
                            <label for="star-2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                            </label>
                            <input type="radio" id="star-3" name="star-radio" value="star-1">
                            <label for="star-3">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                            </label>
                            <input type="radio" id="star-4" name="star-radio" value="star-1">
                            <label for="star-4">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                            </label>
                            <input type="radio" id="star-5" name="star-radio" value="star-1">
                            <label for="star-5">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path></svg>
                            </label>
                          </div>
                          <!-- mã sản phẩm -->
                          <div class="product-code">
                                <p class="code">
                                    Mã SP: #087654
                                </p>
                          </div>
                          <!-- giá sản phẩm -->
                          <div class="price-rodu">
                                <label class="price-text">GIÁ:</label>
                                <label class="price-rodu-text">370.000VNĐ</label>
                          </div>
                          <!-- tình trạng sản phẩm -->
                          <div class="condition-of-products">
                            <span class="condition">Tình trạng sản phẩm:</span>
                            <span class="condition-product">Còn hàng</span>
                          </div>
                          <!-- Chức năng đặt hàng và liên hệ -->
                         <div class="order-and-contact-function">
                            <form action="chitietsanpham.php" method="post">
                                <div class="funtion">
                                    <div class="contact-function">
                                        <input type="submit" name="btnliehe" value="Liên hệ" class="contact-function-btn">
                                    </div>
                                    <div class="order-function">
                                        <input type="submit" name="btnmuahang" value="Mua hàng" class="order-function-btn">
                                    </div>
                                </div>
                            </form>
                         </div>
                         <!-- chức năng bình luận sản phẩm -->
                         <form action="chitietsanpham.php" method="post">
                            <div class="comemnt">
                                <textarea rows="2" cols="100" class="comemnt-text" placeholder="Hãy viết bình luận về sản phẩm..."></textarea>
                                <div class="btn-nsnskn">
                                    <input type="submit" name="btnsend" value="Gửi" class="btnsend">
                                    <input type="reset" name="btnrest" value="Trở lại" class="btnreset">
                                </div>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
   include 'main/footer.php';
   ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script src="magiczoom/magiczoom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/money.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<div id="fb-root"></div>
<script src="js/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/zoom.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0" nonce="LeJRsaAo"></script>
</body>
</html> -->