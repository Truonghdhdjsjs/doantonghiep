<?php
include 'main/header.php';
?>
<body>
   <?php
   include 'main/nav.php';
   ?>
    <!-- end header -->
    <div class="container">
        <section id="cart">
            <article class="the_order">
                <form action="giohang.php" method="post">
                    
                    <table class="the_order-cart-tb">
                        <tr class="the_order-cart-tr">
                            <th class="the_order-cart-th">
                                <p class="the_order-cart-text">
                                    Mã sản phẩm
                                </p>
                            </th>
                            <th class="the_order-cart-th" >
                                <p class="the_order-cart-text">
                                    Tên sản phẩm
                                </p>
                            </th>
                            <th class="the_order-cart-th" >
                                <p class="the_order-cart-text">
                                   Hình ảnh
                                </p>
                            </th>
                            <th class="the_order-cart-th" >
                                <p class="the_order-cart-text">
                                   Đơn giá
                                </p>
                            </th>
                           

                            <th class="the_order-cart-th">
                                <p class="the_order-cart-text">
                                    Số lượng
                                </p>
                            </th>
                            <th class="the_order-cart-th">
                                <p class="the_order-cart-text">
                                   Thành tiền
                                </p>
                            </th>
                            <th class="the_order-cart-th">
                                <p class="the_order-cart-text">
                                   Chức năng xóa
                                </p>
                            </th>
                        </tr>
                        <?php
                        include 'connect.php';
                        $conn=MoKetNoi();
                        if($conn->connect_error)
                        {
                            echo "Không kết nối được với cơ sơ dữ liệu";
                        }
                        mysqli_select_db($conn,'dl');
                        if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
                        $danhsach=$_SESSION['giohang'];
                        $tongtien=0;
                        $truyvan="SELECT * FROM SANPHAM";
                        $ketqua = mysqli_query($conn,$truyvan) or die (mysqli_error($conn));
                        $n = mysqli_num_rows($ketqua);
                        for ($i=1;$i<$n;$i++)
                        {
                            $dong=mysqli_fetch_array($ketqua);
                            if(isset($danhsach[$dong['MASP']]))
                            {

                               echo" <tr class='the_order-cart-tr'>
                                    <td class='the_order-cart-td'>".$dong['MASP']." </td>
                                    <td class='the_order-cart-td'> ".$dong['TENSANPHAM']." </td>
                                    <td class='the_order-cart-td'> ".$dong['ANH']." </td>
                                    <td class='the_order-cart-td'>
                                        <span class='the_order-cart-text-td'>".number_format($dong['GIA'])." VNĐ</span>
                                     </td>
                                    <td class='the_order-cart-td'> ".$danhsach[$dong['MASP']]."</td>
                                    <td class='the_order-cart-td'> ".$dong['GIA'] *$danhsach[$dong['MASP']]." VNĐ</td>
                                    <td class='the_order-cart-td'> 
                                         <a href='./xoa.php?sanpham=$dong[MASP]'>Xóa</a>
                                    </td>
                                </tr>";
                                $tongtien=$tongtien+$dong['GIA'] *$danhsach[$dong['MASP']];
                            }
                        }
                        ?>
                        <tr class="the_order-cart-tr-btn " aria-colspan="3" >
                            <td>
                                Tổng tiền : <?php echo $tongtien; ?> VNĐ
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td class="the_order-cart-tr-btn-funtion" colspan="8" rowspan="8">
                                <div class="the_order-cart-tr-btn-funtion"> 
                                    <a href="index.php"><input type="button" name="sbtcontinue" class="btncontinue" value="Tiếp tục mua hàng"></a>
                                    <input type="submit" name="sbtbuy" class="btnBuy" value="Mua ngay">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </article>
            <aside class="order_information">

            </aside>
        </section>
    </div>
    <script src="js/tanggiamsoluong.js"></script>
<?php
include 'main/footer.php';
?>