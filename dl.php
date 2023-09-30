<?php
include 'connect.php';
$conn=Moketnoi();
if($conn->connect_error)
{
    echo " Không thể kết nối được MySQL";
}
$sql="CREATE DATABASE IF NOT EXISTS dl";
if(mysqli_query($conn,$sql))
{
    echo "Tạo thành công Data rồi nha !!!";
}
else
  {
    echo"Không tạo được database".mysqli_error($conn);
}
mysqli_select_db($conn,"dl");
$NGUOIDUNG="CREATE TABLE IF NOT EXISTS NGUOIDUNG(
    TENDANGNHAP varchar(30) NOT NULL,
    MATKHAU varchar(255) NOT NULL,
    HOTEN  varchar(255) NOT NULL,
    NGAY  datetime not null,
    DIACHI varchar(255) NOT NULL,
    SDT int(10) default 0,
    EMAIL varchar (255) NOT NULL,
    PHANLOAI varchar (20) default 'user',
    PRIMARY KEY (TENDANGNHAP,SDT)) ";
$results=mysqli_query($conn,$NGUOIDUNG) or die(mysqli_error($conn));
$DataNGUOIDUNG="INSERT INTO NGUOIDUNG ( TENDANGNHAP,MATKHAU,HOTEN,DIACHI,SDT,EMAIL,PHANLOAI,NGAY)".
                "VALUES ('admin','0123456789','Hoàng Vũ Minh Trường','47 Yên Đỗ , Phường 1 ,Quận Bình Thạnh ,TP.HCM','0928883292',' AnhTruong@Bershka.com','admin','1/1/2023 23:00:00')";
$results =mysqli_query($conn,$DataNGUOIDUNG) or die (mysqli_error($conn));
$LOAI= "CREATE TABLE IF NOT EXISTS LOAI(
    MATL varchar(20) primary key,
    TENTL nvarchar(200) not null)";    
$results=mysqli_query($conn,$LOAI) or die (mysqli_error($conn));

$DataLOAI="INSERT INTO LOAI (MATL,TENTL)". 
            "VALUES('GTN','Giảm trong ngày'),". 
            "('SaLe','SaLe')";      
$results=mysqli_query($conn,$DataLOAI) or die (mysqli_error($conn));

// $DONHANG="CREATE TABLE IF NOT EXISTS DONHANG(
//     STT int(10) not null auto_increment,
//     MADONHANG varchar (255) NOT NULL,
//     NGAYDATHANG datetime not null,
//     DIACHIGIAOHANG varchar(255) NOT NULL,
//     PHUONGTHUCTHANHTOAN varchar(255) NOT NULL,
//     TRANGTHAI varchar(255) NOT NULL,
//     PRIMARY KEY(STT))";
// $results=mysqli_query($conn,$DONHANG) or die (mysqli_error($conn));
// $DatadDONHANG=" INSERT INTO DONHANG(STT,MADONHANG,NGAYDATHANG,DIACHIGIAOHANG,PHUONGTHUCTHANHTOAN,TRANGTHAI)".
//                 " VALUES('1','0S1','19/04/2021','570/16 Bình Long, Phường Tân Quý, Quận Tân Phú, Thành phố Hồ Chí Minh','Tiển mặt','Đang giao'),".
//                 "('2','0A7','20/04/2023','Số 5 đường Đặng Minh Nhuận, Ấp Mỹ Thạnh, Xã Mỹ Phong, Thành phố Mỹ Tho, Tỉnh Tiền Giang','MOMO','Đang chuẩn bị giao'),".
//                 "('3','03S','28/08/2023','Thôn Đông, Xã Phú Minh, Huyện Sóc Sơn, Thành phố Hà Nội','Chuyển tiền','Đã nhận'),".
//                 "('4','6SL','28/08/2022','01B1 40 Xuân La, Phường Xuân Tảo, Quận Bắc Từ Liêm, Thành phố Hà Nội','Chuyển tiền','Đã nhận')";
// $results=mysqli_query($conn,$DatadDONHANG) or die (mysqli_error($conn));
$SANPHAM="CREATE TABLE IF NOT EXISTS SANPHAM(
            MASP varchar(255) not null,
            TENSANPHAM NVARCHAR(255) NOT NULL,
            GIA FLOAT NOT NULL,
            MOTA NVARCHAR (255) NOT NULL,
            ANH VARCHAR(255) NOT NULL,
            MADANHMUC VARCHAR(255) NOT NULL,
            SOLUONGGIOHANG INT(20) NOT NULL DEFAULT 0,
            MATL varchar(20) not null,
            MANTK varchar(20) not null,
            MATG varchar(20) not null,
            PRIMARY KEY(MASP))";
$results=mysqli_query($conn,$SANPHAM) or die (mysqli_error($conn));
$DataSANPHAM="INSERT INTO SANPHAM(MASP,TENSANPHAM,GIA,MOTA,ANH, MADANHMUC,SOLUONGGIOHANG,MATL,MANTK,MATG)".
    "VALUES('0A1','ÁO SƠ MI CARO','150000VNĐ',' Áo làm sợi catton mát và mùa hè phù hợp cho những chuyến đi xa','img/product/aosomi/ao-so-mi-2022-nam.jpg','3','9','SaLe','XB01','TG01'),".
    "('03D','ÁO THUN NAM XANH DƯƠNG','250000VNĐ','Chất liệu cotton có khả năng thấm hút mồ hôi tốt, giúp người mặc cảm thấy thoải mái và dễ chịu khi mặc, đặc biệt là vào mùa hè','img/product/aothunam/1.jpg','2','32','SaLe','XB02','TG02'),".
    "('0T24','ÁO THUN NAM XANH NGỌC BÍCH','150000VNĐ','Chất liệu cotton có khả năng thấm hút mồ hôi tốt, giúp người mặc cảm thấy thoải mái và dễ chịu khi mặc, đặc biệt là vào mùa hè','img/product/aothunam/2.jpg','2','15','SaLe','XB03','TG03'),".
    "('0TY4','ÁO SƠ MI NAM SỌC','250000VNĐ','Áo sơ mi tay dài nam cổ bẻ: Đây là kiểu áo sơ mi tay dài nam phổ biến nhất, phù hợp với mọi dáng người.','img/product/aosomi/14.jpg','3','15','SaLe','XB04','TG04'),".
    "('0F01','ÁO SƠ MI NAM SỌC CARO','350000VNĐ','Áo sơ mi tay dài nam họa tiết: Kiểu áo sơ mi này mang phong cách trẻ trung, cá tính., phù hợp với mọi dáng người.','img/product/aosomi/3957dcb2ad6ba7dfc5634aa44f22711a.jpg','3','15','SaLe','XB04','TG02'),".
    "('0F09','ÁO SƠ MI TRẮNG NAM ','150000VNĐ','Áo sơ mi tay dài nam cổ bẻ: Đây là kiểu áo sơ mi tay dài nam phổ biến nhất, phù hợp với mọi dáng người.','img/product/aosomi/Áo-sơ-mi-nam-trắng-dài-tay.jpg','3','15','SaLe','XB02','TG02'),".
    "('0F0J','ÁO SƠ MI NÂU NHẠT ','750000VNĐ','Áo sơ mi tay dài nam cổ vuông: Kiểu áo sơ mi này mang phong cách lịch lãm, nam tính.','img/product/aosomi/OIP.jpg','3','15','SaLe','XB03','TG02'),".
    "('0F0P','ÁO SƠ MI CARO XANH ','150000VNĐ','Áo sơ mi tay dài nam cổ vuông: Kiểu áo sơ mi này mang phong cách lịch lãm, nam tính.','img/product/aosomi/R.jpg','3','15','SaLe','XB03','TG02'),".
    "('0FLP','QUẦN RIN XANH ','150000VNĐ','Quần rin ống đứng: Đây là kiểu quần phổ biến nhất, có thiết kế ống đứng, suông thẳng từ trên xuống','img/product/quanrin/20170822_892a9b3afced86c3b2e0088dc6e70d11_1503384605.jpg','3','18','SaLe','XB03','TG02'),".
    "('0tLP','QUẦN RIN DEN ','750000VNĐ','Quần rin jogger: Đây là kiểu quần có thiết kế ống suông, có chun ở gấu quần, phù hợp với những người thích phong cách năng động','img/product/quanrin/20170822_1752af518973b68cb9ba63a33a0c72e5_1503384499.jpg','3','18','SaLe','XB03','TG04'),".
    "('0PLP','QUẦN RIN XANH NHẠT ','230000VNĐ','Quần rin ống suông: Đây là kiểu quần có thiết kế ống suông, ôm nhẹ người, phù hợp với những người thích phong cách thanh lịch.','img/product/quanrin/cef0d9753757af980c45897edfc25693.jpg','3','18','SaLe','XB03','TG04'),".
    "('0PEP','QUẦN RIN THUN','130000VNĐ','Quần rin jogger: Đây là kiểu quần có thiết kế ống suông, có chun ở gấu quần, phù hợp với những người thích phong cách năng động.','img/product/quanrin/quan-jean-nam-rach-goi-111-scaled.jpg','3','18','SaLe','XB01','TG04'),".
    "('0P7P','QUẦN RIN ĐEN','130000VNĐ','Quần rin ống suông: Đây là kiểu quần có thiết kế ống suông, ôm nhẹ người, phù hợp với những người thích phong cách thanh lịch','img/product/quanrin/quan-jean-nam-rach-goi-111-scaled.jpg','3','18','GTN','XB01','TG04'),".
    "('0T7P','QUẦN TÂY ĐEN','230000VNĐ','Quần tây là một món đồ thời trang cần thiết cho cả nam và nữ. Quần tây có thể được mặc trong nhiều dịp khác nhau, từ trang trọng đến thường ngày','img/product/quantay/4-loai-quan-tay-nam-dep-nen-co-cho-ban-nam-nam-2020-d04a1ce0.jpg','3','18','GTN','XB01','TG04'),".
    "('0T2P','QUẦN TÂY XÁM','430000VNĐ','Quần tây là một món đồ thời trang cần thiết cho cả nam và nữ. Quần tây có thể được mặc trong nhiều dịp khác nhau, từ trang trọng đến thường ngày','img/product/quantay/quan-tay-xam_254b7338e9d045c3bc754191fcc1d655_grande.jpg','3','18','SALE','XB01','TG04'),".
    "('0TEP','QUẦN TÂY ĐEN','630000VNĐ','Quần tây là một món đồ thời trang cần thiết cho cả nam và nữ. Quần tây có thể được mặc trong nhiều dịp khác nhau, từ trang trọng đến thường ngày','img/product/quantay/z2555880995105_63b77fd5639aedb8f978beadb39fa729-1191302855-d637596969225572731.jpg','3','18','SALE','XB01','TG04'),".
    "('0EW3','ÁO THUN NAM CỔ NGẮN','400000VNĐ','Chất liệu cotton có khả năng thấm hút mồ hôi tốt, giúp người mặc cảm thấy thoải mái và dễ chịu khi mặc, đặc biệt là vào mùa hè','img/product/aothunam/6.jpg','2','18','SaLe','XB03','TG03')";
    $results=mysqli_query($conn,$DataSANPHAM) or die (mysqli_error($conn));
// $DANHMUC="CREATE TABLE IF NOT EXISTS DANHMUC(
//             MADANHMUC VARCHAR(255) NOT NULL,
//             TENDANHMUC VARCHAR(255) NOT NULL,
//             MOTA VARCHAR(255) NOT NULL,
//             PRIMARY KEY (MADANHMUC))";
// $results=mysqli_query($conn,$DANHMUC) or die (mysqli_error($conn));
// $DataDANHMUC="INSERT INTO DANHMUC(MADANHMUC,TENDANHMUC,MOTA)".
//             "VALUES('1','QUẦN TÂY','Quần tây cho người làm văn phòng thuận tiện cho việc gặp đối tác khách hàng'),".
//             "('2','ÁO THUN ','Áo thun thể hiện cá tính mặc mát vào mùa hè'),".
//             "('3','ÁO SƠ MI','Nhiều kiểu áo sơ mi khách nhau mặc thoáng mát thể hiện cá tính cho đàn ông '),".
//             "('4','QUẦN THUN','Mặc mát mẻ '),".
//             "('5', 'QUẦN KAKI','Thoải mái, mát mẻ,phù hợp với nhiều dịp khác nhau')";
// $results=mysqli_query($conn,$DataDANHMUC) or die (mysqli_error($conn));
$NHATHIETKE = "CREATE TABLE IF NOT EXISTS NHATHIETKE (
     MANTK varchar(20) primary key,
    TENNTK nvarchar(200) not null)";
$results = mysqli_query($conn,$NHATHIETKE)or die (mysqli_error($conn));
$DataNHATHIETKE="INSERT INTO NHATHIETKE (MANTK,TENNTK)". 
            "VALUES ('XB01','Nhà Thiết kế trẻ'),".
            "('XB02','Nhà Flower'),".
            "('XB03','Nhà sun'),".
            "('XB04','Nhà PPT')";
$results = mysqli_query($conn,$DataNHATHIETKE) or die (mysqli_error($conn));
$TACGIA = "CREATE TABLE IF NOT EXISTS TACGIA (
    MATG varchar(20) primary key,
    TENTG nvarchar(200) not null)";
$results = mysqli_query($conn,$TACGIA)or die (mysqli_error($conn));
$DataTACGIA="INSERT INTO TACGIA (MATG,TENTG)". 
            "VALUES ('TG01',' Axel Vervoordt'),".
            "('TG02','Hector Malot'),".
            "('TG03','Antoine de Saint'),".
            "('TG04','Kelly Wearstler'),".
            "('TG05','Dorothy Draper'),".
            "('TG06','Albert Hadley')";
$results = mysqli_query($conn,$DataTACGIA) or die (mysqli_error($conn));
DongKetNoi($conn);
?>
