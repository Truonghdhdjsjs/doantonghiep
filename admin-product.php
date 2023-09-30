<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERSHKA</title>
    <link rel="stylesheet" href="css/Admin.css">
    <link rel="stylesheet" href="https://unpkg.com/charts.css/dist/charts.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <link rel="website icon" type="png" href="img/logo/OIP-removebg-preview (1) (Custom).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/productadmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="app">
        <section id="left">
            <!-- phần menu bên trái -->
            <div class="left">
                <header class="header-left">
                   <div class="img-header-left">
                        <img src="img/logo/OIP__1_-removebg-preview.png" alt="" class="img-header-left-logo">
                   </div>
                </header>
                <nav class="nav-header-left">
                    <!-- doanh mục sản phẩm  -->
                    <details class="Categories">
                        <!-- DOANH MỤC THỨ NHẤT  -->
                        <summary class="Subcategories">
                            <a href="admin.php" class="Subcategories-link">
                                <!-- trang quản trị -->
                                <i class="fa-solid fa-house Subcategories-icon"></i>
                                <p class="Subcategories-text">
                                    trang chủ
                                </p>
                            </a>
                        </summary>
                    </details> 
                    <details class="Categories">
                        <!-- DOANH MỤC THỨ HAI  -->
                        <summary class="Subcategories">
                            <i class="fa-brands fa-product-hunt Subcategories-icon"></i>
                            <p class="Subcategories-text">
                                sản phẩm 
                            </p>
                        </summary>
                        <ul class="Subcategories-list">
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí danh mục 1</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí danh mục 2</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí danh mục 3</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí sản phẩm </a>
                            </li>
                        </ul>
                    </details> 
                    <details class="Categories">
                        <!-- DOANH MỤC THỨ BA  -->
                        <summary class="Subcategories">
                            <i class="fa-solid fa-pager Subcategories-icon"></i>
                            <p class="Subcategories-text">
                                bài viết 
                            </p>    
                        </summary>
                        <ul class="Subcategories-list">
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí kênh phân phối</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí phạm vi phân phối</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí tin tức</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí hỗ trợ khách hàng</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí chính sách </a>
                            </li>
                        </ul>
                    </details> 
                    <details class="Categories">
                        <!-- DOANH MỤC THỨ TƯ  -->
                        <summary class="Subcategories">
                            <i class="fa-solid fa-bars Subcategories-icon"></i>
                            <p class="Subcategories-text">
                                trang tĩnh 
                            </p>
                        </summary>
                        <ul class="Subcategories-list">
                            <li class="Subcategories-item">
                                <a href="Manage-articles.php" title="" class="Subcategories-link" > Cập nhật giới thiệu</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="Manage-articles.php" title="" class="Subcategories-link" > Cập nhật liên hệ</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="Manage-articles.php" title="" class="Subcategories-link" > Cập nhật footer</a>
                            </li>
                        </ul>
                    </details> 
                    <details class="Categories">
                        <!-- DOANH MỤC THỨ NĂM   -->
                        <summary class="Subcategories ">
                            <i class="fa-solid fa-bars Subcategories-icon "></i>
                            <p class="Subcategories-text">
                                marketing online
                            </p>
                        </summary>
                        <ul class="Subcategories-list">
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí mạng xã hội</a>
                            </li>
                        </ul>
                    </details> 
                    <details class="Categories">
                        <!-- DOANH MỤC THỨ SÁU   -->
                        <summary class="Subcategories ">
                            <i class="fa-solid fa-bars Subcategories-icon"></i>
                            <p class="Subcategories-text">
                                banner quảng cáo
                            </p>
                        </summary>
                        <ul class="Subcategories-list">
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Cập nhật share facebook index</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Cập nhật logo</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Cập nhật logo 2</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Cập nhật logo CT</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí slider full</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí slide trang trong</a>
                            </li>
                        </ul>
                    </details> 
                    <details class="Categories">
                        <!-- DOANH MỤC THỨ SÁU   -->
                        <summary class="Subcategories">
                            <i class="fa-solid fa-gear Subcategories-icon"></i>
                            <p class="Subcategories-text">
                                nội dung khác
                            </p>
                        </summary>
                        <ul class="Subcategories-list">
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Cấu hình thông tin website</a>
                            </li>
                            <li class="Subcategories-item">
                                <a href="#" title="" class="Subcategories-link" > Quản lí tài khoản</a>
                            </li>
                        </ul>
                    </details> 
                </nav>
            </div>
        </section>
        <section id="right">
            <!-- phần nội dung bên phải  -->
            <header class="header-right">
                <div class="header-right-menu">
                    <!-- thanh menu  -->
                    <div class="header-right-name">
                        <i class="fa-solid fa-user header-right-name-icon"></i>
                        <p class="header-right-text">
                            Xin chào . admin !
                        </p>
                    </div>
                    <div class="expedient">
                        <ul class="expedient-list">
                            <li class="expedient-item">
                                <!-- Vào trang web -->
                                <div class="expedient-item-cum">
                                    <i class="fa-solid fa-arrow-left expedient-item-cum-icon"></i>
                                    <a href="index.php" class="expedient-item-link">
                                        Vào trang web
                                    </a>
                                </div>
                            </li>
                            <li class="expedient-item">
                                <!-- Tin nhắn -->
                                <div class="expedient-item-cum">
                                    <i class="fa-brands fa-rocketchat expedient-item-icon"></i>
                                    <a href="#" class="expedient-item-link">
                                        Thư liên hệ
                                    </a>
                                </div>
                            </li>
                            <li class="expedient-item">
                                <!-- ĐĂNG XUẤT -->
                                <div class="expedient-item-cum">
                                    <i class="fa-solid fa-right-from-bracket expedient-item-icon"></i>
                                    <a href="index.php" class="expedient-item-link">
                                       Đăng xuất
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
             <!--   <article class="article">
                    <form action="" method="post" class="table-form">
                        
                        <table class="table-data">
                            <tr class="table-list">
                                <td class="table-item"  >
                                    <label class="table-item-text">
                                        Chào mừng bạn đến với Administrator -HỆ THỐNG QUẢN TRỊ NỘI DUNG WEBSITE-Powereb by Truong  
                                    </label>
                                </td>
                            </tr>
                           
                            <tr class="table-list-1">
                                <td class="table-item-1">
                                    <label class="table-item-text-1" >
                                        Nếu còn thắc mắc trong quá trình sử dụng . Vui lòng gửi mail vào locmayman0702@gmail.com
                                    </label>
                                    
                                </td>
                            </tr>
                            <tr class="table-list-2">
                                <td class="table-item-2">
                                    <label class="table-item-text-1-2">
                                        Thống kê theo tháng:
                                    </label>
                                    <input type="datetime-local" name="dttime" id="" class="input-time">
                                </td>
                            </tr>
                           
                            <tr class="table-list-3">
                                <td class="table-item-3" colspan="6">
                                    <input type="submit" name="subbutton" id="" class="input-btn" value="Tìm kiếm ">
                                    <input type="reset" name="rstime" id="" class="rst-time">
                                </td>
                            </tr>
                            <tr class="table-list">
                              
                                <td class="table-item">
                                    <canvas id="myChart"></canvas>
                                   

                                </td>
                            </tr>
                        </table>
                    </form>
                </article>-->
                <article class="pro-admin">
                    <header class="header-admin">
                        <ul class="header-admin-list">
                            <li class="header-admin-item">
                                <i class="fa-solid fa-house header-admin-item-icon"></i>
                                <a href="admin-product.php" class="header-admin-item-link">
                                    Quản lý sản phẩm
                                </a>
                            </li>
                            <li class="header-admin-item">
                               >
                            </li>
                            <li class="header-admin-item">
                               <p class="header-admin-item-text">
                                Tất cả
                               </p>
                             </li>
                        </ul>
                    </header>
                    <!-- CHỨC NĂNG KHUNG SẢN PHẨM  -->
                    <section id="Utility_Tools">
                        <!-- CÁC PHÍM CHỨC NĂNG -->
                    </section>
                    <form action="trangquanlysanpham.html" method="post" class="form-product">
                        <div class="Tools">
                            <input type="submit" name="sbtadd" value="Thêm" class="Toolsadd">
                            <input type="submit" name="sbtdelete" value="Xóa chọn" class="Toolsdelete">
                        </div>
                        <table class="tbl-product">
                                <!-- chọn nhập sản phẩm -->
                            <tr class="pro-tr">
                                <td class="pro-item">
                                    <input type="checkbox" name="checkall" class="check-input">
                                </td>
                                <td class="pro-item-1">
                                    <p class="pro-item-1-text"> Chọn tất cả </p>
                                    <input type="text" name="txtlookforwal" class="txttimkiem" placeholder="Nhập từ khóa tìm kiếm">
                                    <input type="submit" name="sbttimkiem" class="sbttimkiem" value="Tìm kiếm">
                                </td>
                            </tr>
                            <tr class="pro-tr">
                                <td class="pro-item"></td>
                                <!-- Doanh mục sản phẩm thứ 1 -->
                                <td class="pro-item-2">
                                    <div class="pro-item-2-text">
                                        <!-- Đánh số thứ tự sản phẩm -->
                                        <p class="pro-item-text">
                                            Thứ tự
                                        </p>
                                    </div>
                                    <div class="choose-product">
                                        <!-- Phần khung chọn sản phẩm  -->
                                        <div class="choose">
                                            <!-- chọn vào danh mục muốn chọn -->
                                            <select class="choose-product">
                                                 <option class="level_1_business">
                                                     Danh mục cấp 1
                                                 </option>
                                                 <option class="level_2_business">
                                                     Danh mục cấp 2
                                                 </option>
                                                 <option class="level_2_business">
                                                     Danh mục cấp 3
                                                 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Tên sản phẩm  -->
                                    <div class="name-product">
                                       <p class="name-text">
                                            Tên sản phẩm 
                                       </p> 
                                    </div>
                                    <!-- hình ảnh -->
                                    <div class="img-product">
                                        <p class="img-product-text">
                                            Hình ảnh sản phẩm
                                        </p>
                                    </div>
                                    <!-- nổi bật -->
                                    <div class="prominent">
                                        <p class="prominent-text">
                                           Sản phẩm nổi bật
                                        </p>
                                    </div>
                                    <!-- ẩn hiện -->
                                    <div class="hide_show">
                                        <p class="hide-showt_text">
                                          Ẩn/hiện
                                        </p>
                                    </div>
                                    <!-- thao tác -->
                                    <div class="manipulate">
                                        <p class="manipulatet-text">
                                          Thao tác
                                        </p>
                                    </div>
                                </td>
                                <!-- Khung thứ 2 -->
                                <!-- <td class="pro-item-3">
                                </td> -->
                            </tr>
                            
                        </table>
                    </form>
                </article>
            </header>
        </section>
    </div>

    <script src="js/chart.js"></script>
</body>
<script src = "https://code.highcharts.com"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>