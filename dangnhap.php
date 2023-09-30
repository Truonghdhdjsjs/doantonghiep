<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREASHK</title>
    <link rel="website icon" type="png" href="img/logo/OIP-removebg-preview (1) (Custom).png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/index.css">
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
        error_reporting(0);
         $tendki="";
         $password="";
         if(isset($_POST['dangnhap']))
         {
            session_start();
            include 'connect.php';
            $conn=Moketnoi();
            if($conn->connect_errno)
            {
                echo ' Không kểt nối được với CSDL';
            }
            mysqli_select_db($conn,"dl");
            $tendki=$_POST['username'];
            $password=$_POST['password'];
            $kt=1;
            if(empty($tendki)||empty($password))
            {
                echo'<p style="color:red; padding-top:120px; text-align:center;"> Bạn chưa nhập đủ thông tin dữ liệu</p>';
                $kt=0;
            }
            $query=mysqli_query($conn,"SELECT TENDANGNHAP,HOTEN,MATKHAU,PHANLOAI FROM NGUOIDUNG WHERE TENDANGNHAP='$tendki'");
            if(mysqli_num_rows($query)==0)
            {
                echo'<p style="color:red; padding-top:120px; text-align:center;"> Tên đăng nhập không tồn tại .Vui lồng thử lại!</p>';
                $kt=0;
            }
            else
                {
                    $row = mysqli_fetch_array($query);
                    if($password != $row['MATKHAU'])
                    {
                        echo'<p style="color:red; padding-top:120px; text-align:center;"> Mật khẩu không đúng. Vui lòng nhập lại</p>';
                        $kt=1;
                    }
                }
                if($kt==1)
                {
                    $_SESSION['tendangnhap']=$row['HOTEN'];
                    $_SESSION['loainguoidung'] = $row['PHANLOAI'];
                    header('Location: index.php');
                }
         }
        ?>
       <form action="dangnhap.php" method="post" class="form-login">
            <div class="form-login_boder">
                <header class="header-login">
                    <h2 class="header-text">
                        Đăng nhập
                    </h2>
                </header>
                <nav class="nav-login">

                    <!-- khung nhập tên -->
                    <div class="input-name">
                        <p class="input-name-text">  Tên đăng nhập:</p>
                        <input type="text" name="username" class="username" placeholder="Tên đăng nhập / gmail" required="true " value="<?php echo $tendki?>" >
                    </div>
                    <!-- khung nhập password -->
                    <div class="input-password">
                        <p class="input-password-text">  Mật khẩu:</p>
                        <input type="password" name="password" class="password" placeholder="Hãy nhập mật khẩu"  required="true " value="<?php echo $password?>" >
                    </div>
                    <!-- dòng ghi chú -->
                    <div class="Notes">
                        <p class="Notes-text"> Bạn chưa có tài khoản ?</p>
                        <p class="Notes-text-link">Đăng kí <a href="dangki.php" class="link-text">Tại đây</a></p>
                    </div>
                    <!-- input thực hiện chức năng -->
                    <div class="btn">
                        <input type="submit" name="dangnhap" value="Đăng nhâp" class="sbtlogin">
                    </div>
                    <!-- Hoặc bạn có thể sử dụng đăng nhập -->
                    <div class="or">
                        <p class="or-text">
                            Hoặc bạn có thể sử dụng đăng nhập
                        </p>
                    </div>
                    <!-- các tiện ích đăng nhâp -->
                    <div class="btn-icon">
                        <!-- Facebook -->
                        <div class="btn-facebook">
                            <a href="https://www.facebook.com/" class="face-link">
                                <i class="fa-brands fa-facebook btn-facebook-icon"></i>
                                
                            </a>
                        </div>
                        <!-- Google -->
                        <div class="btn-google">
                            <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&ifkv=AeDOFXh9FDsf4RlrwWAjuEgwwEGhzWwcy4WWdAqcZzrenJYdoP9L1YMfUmQwJRzjEFsKFceXpqXfcA&osid=1&passive=1209600&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-619926364%3A1690685675902245" class="gmail-link">
                                <i class="fa-brands fa-google btn-google-icon"></i>
                            </a>
                        </div>
                        <!-- twitter -->
                        <div class="btn-twitter">
                            <a href="https://twitter.com/i/flow/login" class="twitter-link">
                                <i class="fa-brands fa-twitter btn-twitter-icon"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
       </form>
    </div>
   <?php
   include 'main/footer.php';
   ?>
</body>
<script src="https://formspree.io/js/formbutton-v1.min.js" defer></script>