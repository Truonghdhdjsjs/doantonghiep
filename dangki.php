<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="webiste icon" type="png" href="img/logo/OIP-removebg-preview (1) (Custom).png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/Register.css">
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
    <!-- Login Form -->
    <div class="container">
        <?php
            $tendki="";
            $hoten="";
            $gmail="";
            $sdt="";
            $time="";
            $password="";
            $resetpassword="";
            $diachi="";
            include 'connect.php';
            $conn = MoKetNoi();
            if($conn->connect_error)
                {
                    echo "Không thể kết đợc vào cơ sở dữ liệu";
                }
                mysqli_select_db($conn,"dl");
            if(isset($_POST['sbtdangki']))
            {
                $tendki=$_POST['username'];
                $hoten=$_POST['hoten'];
                $diachi=$_POST['diachi'];
                $gmail=$_POST['mail'];
                $sdt=$_POST['phone'];
                $time=$_POST['day'];
                $password=$_POST['password'];
                $resetpassword=$_POST['resetpassword'];
            }
            $kt = 1;
                    if($resetpassword != $password)
                    {
                        echo '<p style="color:red; padding-top:120px; text-align:center;"> Bạn nhập lại mật khẩu chưa đúng!!! </p> ';
                        $kt = 0;
                    }
                    if(empty($tendki)|| empty($hoten) || empty($gmail)|| empty($diachi)  || empty($sdt) || empty($time) || empty($password)|| empty($resetpassword))
                    {
                        echo '<p style="color:red; padding-top:120px; text-align:center;"> Vui lòng nhập đầy đủ  thông tin </p> ';
                        $kt = 0;
                    }
                    if(mysqli_num_rows(mysqli_query($conn,"SELECT TENDANGNHAP FROM NGUOIDUNG WHERE TENDANGNHAP = '$tendki'")) > 0)
                    {
                        echo ' <p style="color:red; padding-top:120px; text-align:center;">Tên đăng nhập đã có </p>' ;
                        $kt = 0;
                    }
                    if(mysqli_num_rows(mysqli_query($conn,"SELECT SDT FROM NGUOIDUNG WHERE SDT = '$sdt'")) > 0)
                    {
                        echo '<p style="color:red; padding-top:120px; text-align:center;">Số điện thoại đã có </p>';
                        $kt = 0;
                    }
                    if($kt == 1)
                    {
                        $nguoidung = "INSERT INTO NGUOIDUNG(TENDANGNHAP, MATKHAU,HOTEN, DIACHI, SDT, EMAIL,NGAY)
                        VALUES('{$tendki}', '{ $password}','{$hoten}', '{$diachi}', '{$sdt}', '{$gmail}','{$time}')";
                        $results = mysqli_query($conn,$nguoidung) or die (mysqli_error($conn));
                        echo '<p style="color:green; padding-top:120px; text-align:center;">Đăng ký thành công </p>';
                    }

        ?>
       <form action="dangki.php" method="post" class="form-login">
            <div class="form-login_boder">
                <header class="header-login">
                    <h2 class="header-text">
                        Đăng kí
                    </h2>
                </header>
                <nav class="nav-login">

                    <!-- khung nhập tên -->
                    <div class="input-name">
                        <p class="input-name-text">  Họ tên:</p>
                        <input type="text" name="username" class="username" placeholder="Tên đăng nhập / gmail" required="true" value="<?php echo $tendki ?>">
                    </div>
                    <div class="input-name">
                        <p class="input-name-text">  Họ tên:</p>
                        <input type="text" name="hoten" class="username" placeholder="Họ tên" required="true" value="<?php echo $hoten ?>">
                    </div>
                    <div class="input-name">
                        <p class="input-name-text">  Địa chỉ:</p>
                        <input type="text" name="diachi" class="username" placeholder="Địa chỉ" required="true" value="<?php echo $diachi ?>">
                    </div>
                    <!-- khung email-->
                    <div class="input-name">
                        <p class="input-name-text">  Email:</p>
                        <input type="email" name="mail" class="mail" placeholder=" gmail" required="true" value="<?php echo $gmail ?>">
                    </div>
                    <!-- khung nhập số điện thoại -->
                    <div class="input-number">
                        <p class="input-name-text">  Số điện thoại</p>
                        <input type="number" name="phone" class="number-phone" placeholder="Số diện thoại" required="true" value="<?php echo $sdt ?>">
                    </div>
                    <!-- khung nhập ngày  -->
                    <div class="input-day">
                        <p class="input-name-text"> Ngày/tháng/năm sinh</p>
                        <input type="datetime-local" name="day" class="day" placeholder="Ngày/Tháng/Năm" required="true" value="<?php echo $time ?>" min-width="150px">
                    </div>
                    <!-- khung nhập password -->
                    <div class="input-password">
                        <p class="input-password-text">  Mật khẩu:</p>
                        <input type="password" name="password" class="password" placeholder="Hãy nhập mật khẩu" min="0" max="8" required="true" value="<?php echo $password ?>">
                    </div>
                    <!-- khung nhập lại mật khẩu -->
                    <div class="input-reset-password">
                        <p class="input-password-text"> Nhập lại mật khẩu</p>
                        <input type="password" name="resetpassword" class=" resetpassword" placeholder="Hãy nhập lại mật khẩu"  min="0" max="8" required="true" value="<?php echo $resetpassword ?>">
                    </div>
                    <!-- input thực hiện chức năng -->
                    <div class="btn">
                        <input type="submit" name="sbtdangki" value="Đăng kí" class="sbtlogin">
                    </div>
                   
                    
                    
                </nav>
            </div>
       </form>
    </div>
   <?php
   include 'main/footer.php';
   ?>

</body>
</html>