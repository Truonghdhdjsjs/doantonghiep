<?php
include 'main/header.php';
?>
<body>
  <?php
  include 'main/nav.php';
  ?>
        <div class="containers">
            <section id="Site-contents">
                <div class="grid">
                    <!-- phần chuyển trang  -->
                    <div class="site-link">
                        <a href="index.php" class="content-link">
                            Trang chủ
                        </a>
                        /
                        <a href="sanpham.php" class="content-link">
                          Sản phẩm
                        </a>
                    </div>
                </div>
            </section>
            <!-- <section id="page-product">
                 Phần trang sản phẩm 
                <div class="product_page_section">
                 mục lục 40% 
                    <aside class="product-menu">
                        <div class="memu_pro">
                            <ul class="memu_pro-list">
                                <li class="menmu_pro-item">
                                    <a href="#" class="memu_pro-link">Áo thun nam</a>
                                </li>
                                <li class="menmu_pro-item">
                                    <a href="#" class="memu_pro-link">quần tây</a>
                                </li>
                                <li class="menmu_pro-item">
                                    <a href="#" class="memu_pro-link">áo sơ mi</a>
                                </li>
                                <li class="menmu_pro-item">
                                    <a href="#" class="memu_pro-link">quần thun </a>
                                </li>
                                <li class="menmu_pro-item">
                                    <a href="#" class="memu_pro-link">quần kaki </a>
                                </li>
                            </ul>
                        </div>
                        <div class="size">
                            kích cỡ sản phẩm 
                            <details class="size-m">
                                <summary class="size-name">
                                    Kích cỡ
                                </summary>
                                <ul class="size-list">
                                    <li class="size-item">
                                        <a  href="#" class="size-link">
                                            xs
                                        </a>
                                    </li>
                                    <li class="size-item">
                                        <a  href="#" class="size-link">
                                            s
                                        </a>
                                    </li>
                                    <li class="size-item">
                                        <a  href="#" class="size-link">
                                            m
                                        </a>
                                    </li>
                                     <li class="size-item">
                                        <a  href="#" class="size-link">
                                            l
                                        </a>
                                    </li>
                                    <li class="size-item">
                                        <a href="#" class="size-link">
                                            xl
                                        </a>
                                    </li>
                                    <li class="size-item">
                                        <a href="#" class="size-link">
                                            xxl
                                        </a>
                                    </li>
                                </ul>
                            </details>
                        </div>
                         khoảng giá 
                 
                        <div class="money">
                            <details class="money-list">
                                <summary class="money-item">
                                    Khoảng giá
                                </summary>
                                <ul class="money-l">
                                    <li class="money-i">    
                                        <div class="group">
                                            <div class="progress"></div>
                                            <div class="range-input">
                                              <input type="range" class="range-min" min="0" max="10000" value="0" step="100">
                                              <input type="range" class="range-max" min="0" max="10000" value="10000" step="100">
                                            </div>
                                            <div class="text-range">
                                              <div class="text-min">0</div>
                                              <div class="text-max">10.000</div>
                                            </div>
                                      </div>
                                  
                                    </li>
                                   
                                </ul>
                            </details>
                        </div>
                    </aside>
                     phần sản phẩm 60% 
                    <article class="product-section">
                        <h2><span style='font-size: 36px; '>sjdsijd</span>
                    </article>
                </div>
            </section>-->

            <!-- sản phẩm bán hàng  -->
            <section id="product-buy">
              <header class="header-product-buy">
                    <h2 class="header-product-buy-text">
                        sản phẩm
                    </h2>
              </header>
              <nav class="nav-product-buy">
                <div class="grid">
                    <!-- hàng sản phẩm bán hàng -->
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
                echo "<div class='product-list PRO-LIST'>";
                for($i=1;$i<=11;$i++)
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
                    <div class='See-also'>
                        <button class='btn-See-also'>
                            <a href='cart.html' class='btn-See-also-link'>
                                <i class='fa-solid fa-cart-plus btn-See-also-icon'></i>
                                <p class='btn-See-also-text'>
                                    xem thêm
                                </p>
                            </a>
                        </button>
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
                <!-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
                </nav> -->
                </div>
              </nav>
            </section>
        </div>
            
    </div>
    </div>
</body>
<?php
include 'main/footer.php';
?>