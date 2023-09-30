
<?php
include 'main/header.php';
?>
<body>

<?php
include 'main/nav.php';
?>
    <div class="container">
        <!-- chức năng tìm kiếm sản phẩm  -->
        <section id="search">
            <div class="search-h3">
                <h3 class="search-h3-text">
                    Nhập từ khóa để tìm kiếm sản phẩm
                </h3>
            </div>
           
            <form action="timkiem.php" method="post">
                <div class="search-function">
                    <input type="search" name="key_word" placeholder="Tìm kiếm...." value="" list="production" class="search-text" require="true" value="<?php echo $search ?>">
                    <datalist id="production" name="sltLoai" require="true" value="<?php echo $loai ?>" >
                            <option value="QUẦN TÂY">
                            <option value="ÁO THUN NAM">
                            <option value="ÁO SƠ MI">
                            <option value="QUẦN THUN">
                            <option value="QUẦN KAKI">
                    </datalist>
                    <select name="sltLoai"  class="c5"> 
                        <option  value="TENSANPHAM"> Tên sản phẩm </option>
                        <option  value="TENTG"> Tên tác giả </option>
                        <option  value="TENNTK"> Tên nhà thiết kế </option>
                        <option  value="TENTL"> Thể loại </option>
                     </select>
                    <!-- Biểu tượng search -->
                    <input type="submit" name="sbtsearch" value="Tìm kiếm" id="funtion-search" class="funtion-search-1">
                </div>
            </form>
            <?php
                include 'connect.php';
                $conn=MoKetNoi();
                if($conn->connect_error)
            {
                    echo "<p> không kết nối được MySQL </p>";
            }
                    mysqli_select_db($conn,"dl");
                    if (isset($_POST["sbtsearch"]))
                {
                    $search = $_POST['key_word'];
                    $loai = $_POST['sltLoai'];
                    $truyvan = "SELECT TENSANPHAM,ANH,TENTL,GIA
                    FROM SANPHAM,LOAI
                    WHERE   $loai LIKE '%$search%' AND SANPHAM.MATL=LOAI.MATL";
                    $ketqua = mysqli_query($conn, $truyvan) or die(mysqli_error($conn));
                    
                   $n=mysqli_num_rows($ketqua);
                    if($n!=0)
                    {
                        $sodong=$n/4;
                        $du=$n%4;
                        for($i=1;$i<=$sodong;$i++)
                        {
                            echo"<div class='product-list PRO-LIST-pro'>";
                            for($j=1;$j<=4;$j++)
                            {
                                $noidung=mysqli_fetch_array($ketqua);
                                echo"<div class='product-img'>
                                    <div class='img-diminuir'>
                                        <img src='".$noidung['ANH']."'alt='' class='product-img-pro'> 
                                    </div>
                                    <div>
                                    <p class='product-img-name'>
                                        <a href='#' class='product-img-name-link'>".$noidung['TENSANPHAM']."</a>
                                    </p>
                                </div>
                                    <div class='price'>
                                    <strong class='now'>
                                    ".number_format($noidung['GIA'])." VNĐ
                                    </strong>
                                    <span class='old'>
                                        679.000VNĐ
                                    </span>
                                </div>
                                </div>";
                            }
                            echo"</div>";

                        }
                        echo "<div class='product-list PRO-LIST'>";
                            for($i=1;$i<=$du;$i++)
                            { 
                                $noidung=mysqli_fetch_array($ketqua);
                                echo"<div class='product-img'>
                                <div class='img-diminuir'>
                                    <img src='". $noidung['ANH']."'alt='' class='product-img-pro'> 
                                </div>
                                <div>
                                    <p class='product-img-name'>
                                        <a href='#' class='product-img-name-link'>". $noidung['TENSANPHAM']."</a>
                                    </p>
                                </div>
                            
                            <div class='price'>
                            <strong class='now'>
                            ".number_format( $noidung['GIA'])." VNĐ
                            </strong>
                            <span class='old'>
                                679.000VNĐ
                            </span>
                        </div>
                            </div>";
                            }
                        echo"</div>";
                    }
                    else
                        {
                            echo "<p class='c6'> Sản phẩm chưa được cập nhật </p>";
                        }
                    } 
            ?>
        </div>
    </div>
    <!-- Quy định của của hàng -->
    <section id="regulations">
        <!-- Quy định bằng nội dung -->
        <div class="grid">
            <div class="regulations-grid">
                <!-- phân chia từng ô vùng -->
                <div class="regulations-text">
                    <div class="regulations-title">
                        <h5 class="regulations-title-text">
                            Quy định về mặt thương hiệu và các điều khoản cần biết:</h4>
                        </h5>
                        <div class="regulations-title-content">
                            <span class="regulations-title-content-text">
                                Bershka sẵn sàng hỗ trợ đổi sản phẩm cho bạn trong vòng 15 ngày trên toàn hệ thống
                            </span>
                        </div>
                    </div>
                    <div class="regulations-title">
                        <h5 class="regulations-title-text">
                            Khách hàng thân thiết</h4>
                        </h5>
                        <div class="regulations-title-content">
                            <span class="regulations-title-content-text">
                                Chính sách khách hàng thân thiết của iKids clothing khi mua đơn hàng trị giá 500.000đ, quý khách sẽ được cấp ngay thẻ VIP có ưu đãi 15% và 20% khi sinh nhật
                            </span>
                        </div>
                    </div>
                </div>
                <div class="regulations_funtion">
                    <div class="regulations_funtion-content">
                        <h5 class="regulations_funtion-content-text">
                            Kết nối với Bershka
                        </h5>
                        <div class="regulations_funtion-content-funtion">
                            <ul class="regulations_funtion-content-funtion-list">
                                <li class="regulations_funtion-content-funtion-item">
                                    <a href="#" class="regulations_funtion-content-funtion-link">
                                       <i class="fa-brands fa-facebook-f regulations_funtion-icon regulations_funtion-icon-facebook"></i>
                                    </a>
                                </li>
                                <li class="regulations_funtion-content-funtion-item">
                                    <a href="#" class="regulations_funtion-content-funtion-link">
                                        <i class="fa-brands fa-google regulations_funtion-icon regulations_funtion-icon-google"></i>
                                    </a>
                                </li>
                                <li class="regulations_funtion-content-funtion-item">
                                    <a href="#" class="regulations_funtion-content-funtion-link">
                                        <i class="fa-brands fa-twitter regulations_funtion-icon regulations_funtion-icon-twilter"></i>
                                    </a>
                                </li>
                                <li class="regulations_funtion-content-funtion-item">
                                    <a href="#" class="regulations_funtion-content-funtion-link">
                                        <i class="fa-brands fa-instagram regulations_funtion-icon regulations_funtion-icon-intargram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
   
<?php
include 'main/footer.php';
?>