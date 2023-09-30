<?php
include 'main/header.php';
?>
<body>
    <div class="app">
       <?php
       include 'main/nav.php';
       ?>
        <div class="containers">
            <section id="Site-contents">
                <div class="grid">
                    <!-- phần chuyển trang  -->
                    <div class="site-link">
                        <a href="trangchu.html" class="content-link">
                            Trang chủ
                        </a>
                        /
                        <a href="lienhe.html" class="content-link">
                            Liên hệ
                        </a>
                    </div>
                </div>
            </section>
            <section id="Contact-your-Page">
                <div class="grid">
                    <div class="headline">
                        <p class="headline-content">
                            LIÊN hệ VỚI CHÚNG TÔI
                        </p>
                    </div>
                    <div class="content-1">
    
                        <div class="information">
                            <!-- thông tin liên hệ -->
                            <ul class="page-list">
                                <li class="page-item">
                                    <h3 class="page-item-h3">
                                        công ty tnhh Bershka
                                    </h3>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-item-link">
                                        Địa chỉ :47 Yên Đỗ , Phường 1 ,Quận Bình Thạnh ,TP.HCM
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-item-link">
                
                                        Điện thoại:0928883292
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-item-link">
                
                                        Email: AnhTruong@Bershka.com
                                    </a>
                                 </li>
                                 <li class="page-item">
                                    <a href="#" class="page-item-link">
                
                                        Website:www.Bershka.com
                                    </a>
                                 </li>
                            </ul>
                    </div>
                        <!-- bảng  điền thông tin -->
                            <form action="https://formspree.io/f/xnqkqeoo"
                            method="POST"
                            enctype="multipart/form-data">
                                <table class="table-list">
    
                                    <tr class="table-item">
                                        <td class="table-use" colspan="3">
                                            <input type="text" name="Họ tên" placeholder="Họ tên" class="table-use-name" required>
                                        </td>
                                        <td class="table-use" >
                                            <input type="number" name="Số điện thoại" placeholder="Số điện thoại" class="table-use-sdt" required>
                                        </td>
                                    </tr>
                                    <tr class="table-item">
                                        <td class="table-use" colspan="3">
                                            <input type="text" name="Địa chỉ" placeholder="Địa chỉ" class="table-use-diachi" required>
                                        </td>
                                        <td class="table-use" >
                                            <input type="email" name="Email" placeholder="Email" class="table-use-email" required>
                                        </td>
                                    </tr>
                                    <tr class="table-item">
                                        <td class="table-use" colspan="6">
                                            <input type="text" name="Tiêu đề" placeholder="Chủ đề" class="table-use-tieude" required>
                                        </td> 
                                    </tr>
                                    <tr class="table-item">
                                        <td class="table-use" colspan="6">
                                            <textarea  name="Nội dung" rows="5" cols="42" placeholder="Thông tin liên hệ" class="chatbox"> </textarea>
                                        </td> 
                                    </tr>
                                    <!-- <tr class="table-item">
                                        <td class="table-use" colspan="6">
                                            <input type="file" name="txtfile" placeholder="Chủ đề" class="table-use-file" required>
                                        </td> 
                                    </tr> -->
                                    <tr class="table-item">
                                        <td class="table-use" >
                                            <input type="submit" name="txtgui"  class="table-use-gui" value="Gửi">
                                        </td> 
                                        <td class="table-use" >
                                            <input type="reset" name="txtreset"  class="table-use-reset" value="Nhập lại">
                                        </td> 
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.164626913679!2d106.6956603749579!3d10.798700289351435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529826c4a45df%3A0x11b6f2a32919ea05!2zNDcgWcOqbiDEkOG7lywgUGjGsOG7nW5nIDEsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1689487252958!5m2!1svi!2s" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                </div>
            </section>
           <?php
           include 'main/footer.php';
           ?>