
        <div class="container">
            <section id="baner">
                <div id="carouselExampleSlidesOnly " class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/baner/snapedit_1687662247882.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="img/baner/snapedit_1687662433611.jpg" class="d-block w-100" alt="">
                      </div>
                      <div class="carousel-item">
                        <img src="img/baner/snapedit_1687662599890.jpg" class="d-block w-100" alt="">
                      </div>
                    </div>
                  </div>
            </section>
            <section id="information-product">
                <div class="wapper">
                    <ul class="list-preson">
                        <li class="list-preson-item">
                            <a href="#" class="list-preson-link">
                                <img src="img/baner/1-9541.jpg" alt="" class="list-preson-img">
                                <div class="name"> áo thun</div>
                            </a>
                        </li>
                        <li class="list-preson-item">
                            <a href="#" class="list-preson-link">
                                <img src="img/baner/5-3983.jpg" alt="" class="list-preson-img">
                                <div class="name"> áo sơ mi</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- sản phẩm mới nhất -->
        </div>
        <section id="news">
            <div class="grid-v">

                <div class="conten-capsion">
                    <h2 class="h2-content">
                        sản phẩm mới
                      </h2>
                </div>
                <div class="product-news">
                    <div class="product-list">
                            <!-- <div class="product-img">
                                <div class="img-diminuir">
    
                                    <img src="img/product/ao thun tre/2.jpg" alt="" class="product-img-pro">
                                    <div class="Incentivos">
                                        <div class="new-procfd">
                                            <p class="new-procfd-news">
                                                NEW
                                            </p>
                                        </div>
                                        <div class="sale-off">
                                            -35% OFF
                                        </div>
                                    </div>
                                    <div class="See-also">
                                        <button class="btn-See-also">
                                            <a href="cart.html" class="btn-See-also-link">
                                                <i class="fa-solid fa-cart-plus btn-See-also-icon"></i>
                                                <p class="btn-See-also-text">
                                                    xem thêm
                                                </p>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                                    <p class="product-img-name">
                                        <a href="#" class="product-img-name-link">
                                            ÁO SƠ MI TAY ÁO CẮT IN
                                         </a>
                                    </p>
                                    <div class="price">
                                        <strong class="now">
                                            419.000VNĐ
                                        </strong>
                                        <span class="old">
                                              679.000VNĐ
                                        </span>
                                    </div>
                            </div> -->
                         </div>
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
                <div class="product-news">
                <?php
                $index="SELECT * FROM SANPHAM AS SP,LOAI AS L WHERE SP.MATL=L.MATL AND TENTL='Sale'";
                $ketqua=mysqli_query($conn,$index) or die (mysqli_error($conn));
                echo "<div class='product-list'>";
                for($i=1;$i<=8;$i++)
                {
                  $dong=mysqli_fetch_array($ketqua);
                echo "<div class='product-img'>
                <div class='img-diminuir'>
                    <img src='".$dong['ANH']."'alt='' class='product-img-pro'> 
                    <div class='Incentivos'>
                                        <div class='new-procfd'>
                                            <p class='new-procfd-news'>
                                                NEW
                                            </p>
                                        </div>
                                        <div class='sale-off'>
                                            -35% OFF
                                        </div>
                                    </div>
                     </div>
                    <div>
                        <p class='product-img-name'>
                            <a href='#' class='product-img-name-link'>".$dong['TENSANPHAM']."</a>
                        </p>
                    </div>
                    <div class='price'>
                        <strong class='now'>
                        ".number_format($dong['GIA'])." VNĐ
                        </strong>
                        <span class='old'>
                            679.000VNĐ
                        </span>
                    </div>
                    <div class='buy'>
                    <button class='btn-buy' >
                            <a href='./them.php?sanpham=$dong[MASP]' class='btn-buy-link' >
                                <i class='fa-solid fa-cart-plus btn-buy-icon '></i>
                                <p class='btn-buy-text'>Mua ngay</p>
                            </a>
                   </button>
                    </div>
                 </div>";
                }
                echo "</div>"
                ?>
                </div>
            </div>
                <!-- xem thêm -->
                <div class="more">
                    <a href="sanpham.php" class="more-link">
                        <div class="more-link-see">
                            <i class="fa-solid fa-angles-right more-link-icon"></i>
                            <input type="submit" name="more" value="xem thêm" class="more-link-input">
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- PHẦN KẾT TRANG  -->