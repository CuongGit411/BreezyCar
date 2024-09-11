<?php
    if(isset($_POST['dangky'])){
        $tenkh = $_POST['fullname'];
        $email = $_POST['email'];
        $diachi = $_POST['address'];
        $dienthoai = $_POST['phone'];
        $matkhau = md5($_POST['password']);
        $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkh,email,diachi,dienthoai,matkhau) VALUE('".$tenkh."','".$email."','".$diachi."','".$dienthoai."','".$matkhau."')");
        if($sql_dangky){
            echo '<p style="color:orange; text-align:center;padding-top :10px;">Bạn đã đăng ký thành công </p>';
            $_SESSION['dangky'] = $tenkh;

            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
        }
    }
?>



<!--Breadcrumb section-->
<div class="breadcrumb_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb_inner">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Login</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    if(isset($_POST['dangnhap'])){
                        $taikhoan = $_POST['username'];
                        $matkhau = md5($_POST['pass']);
                        $sql = "SELECT * FROM tbl_dangky WHERE email ='".$taikhoan."' AND matkhau  ='".$matkhau."' LIMIT 1";
                        $row = mysqli_query($mysqli,$sql);
                        $count = mysqli_num_rows($row);
                        
                        if($count > 0){
                            $row_data = mysqli_fetch_array($row);
                            $_SESSION['dangky'] = $row_data['tenkh'];
                            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
                            echo '<p style="color:red; text-align:center;padding-top :10px;">Đăng nhập thành công. </p>';
                        }else{
                            echo '<p style="color:red; text-align:center;padding-top :10px;">Email hoặc Pasword sai . Đăng nhập thất bại </p>';
                        }
                    }
                ?>
                <!--Breadcrumb section end-->
                 <!-- accont area start -->
                <div class="account_area ptb-100">
                    <div class="container">
                        <div class="row">
                           <!--login area start-->
                            <div class="col-lg-6 col-md-12">
                                <div class="account_form">
                                    <div class="login_title">
                                        <h2>login</h2>
                                    </div>
                                    <div class="login_form login">
                                        <form action="#" method="POST">
                                            <div class="login_input">
                                                <label>Username or email <span>*</span></label>
                                                <input name="username" type="text">
                                            </div>
                                            <div class="login_input">
                                                <label>Passwords  <span>*</span></label>
                                                <input name="pass" type="password">
                                            </div>
                                            <div class="login_submit">
                                                <input type="submit" name="dangnhap" value="LOGIN">
                                                <label for="remember">
                                                    <input id="remember" type="checkbox">
                                                    Remember me
                                                </label>
                                                <a href="#">Lost your password?</a>
                                            </div>

                                        </form>
                                    </div>
                                 </div>    
                            </div>
                            <!--login area start-->

                            <!--register area start-->
                            <div class="col-lg-6 col-md-12">
                                <div class="login_title">
                                    <h2>Register</h2>
                                </div>
                                <div class="login_form form_register ">
                                    <form action="#" method="POST">
                                        <div class="login_input">
                                            <label>Full Name <span>*</span></label>
                                            <input name="fullname" type="text">
                                        </div>
                                        <div class="login_input">
                                            <label>Email <span>*</span></label>
                                            <input name="email" type="text">
                                        </div>
                                        <div class="login_input">
                                            <label>Address <span>*</span></label>
                                            <input name="address" type="text">
                                        </div>
                                        <div class="login_input">
                                            <label>Phone Number <span>*</span></label>
                                            <input name="phone" type="text">
                                        </div>
                                        <div class="login_input">
                                            <label>Password <span>*</span></label>
                                            <input name="password" type="password">
                                        </div>

                                        <div class="login_submit">
                                            <input type="submit" name="dangky" value="Register" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--register area end-->
                        </div>
                    </div>
                </div>
                <!-- accont area end -->
                
                <!--Newsletter section start-->
                <div class="newsletter_section ptb-100">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-12">
                                <div class="newsletter_text">
                                    <h2>Get All Updates</h2>
                                    <p>Sign up our newsleter today. Also get allert for new product.</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="newsletter_form">
                                    <form action="#">
                                        <input type="email" placeholder="Type your email">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Newsletter section end --