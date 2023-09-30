<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERSHKA</title>
    <link rel="stylesheet" href="css/Admin.css">
    <link rel="stylesheet" href="css/productadmin.css">
    <link rel="stylesheet" href="https://unpkg.com/charts.css/dist/charts.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <link rel="website icon" type="png" href="img/logo/OIP-removebg-preview (1) (Custom).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
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
                            <a href="index.php" class="Subcategories-link">

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
                                <a href="admin-product.php" title="" class="Subcategories-link" > Quản lí sản phẩm </a>
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
                <article class="article">
                    <form action="" method="post" class="table-form">
                        <!-- khung 1 -->
                        <table class="table-data">
                            <tr class="table-list">
                                <td class="table-item"  >
                                    <label class="table-item-text">
                                        Chào mừng bạn đến với Administrator -HỆ THỐNG QUẢN TRỊ NỘI DUNG WEBSITE-Powereb by Truong  
                                    </label>
                                </td>
                            </tr>
                            <!-- khung 2 -->
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
                            <!-- Khung 3 -->
                            <tr class="table-list-3">
                                <td class="table-item-3" colspan="6">
                                    <input type="submit" name="subbutton" id="" class="input-btn" value="Tìm kiếm ">
                                    <input type="reset" name="rstime" id="" class="rst-time">
                                </td>
                            </tr>
                            <tr class="table-list">
                               <!-- Mô hình biểu đồ đăng nhập -->
                                <td class="table-item">
                                    <canvas id="myChart"></canvas>
                                    <!-- <canvas id="chart1" style="min-width: 310px; height: 400px; margin: 0 auto"></canvas> -->

                                </td>
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