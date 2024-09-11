<?php
    $succesfullWork = getCauHinhWebsiteByCode('succesfullWork');
    $happyPeople = getCauHinhWebsiteByCode('happyPeople');
    $frightVehicles = getCauHinhWebsiteByCode('frightVehicles');
    $awardWinning = getCauHinhWebsiteByCode('awardWinning');
    function getSlidesByCode($code){
        $query = "
            select *
            from slide
            where codeslide = '".$code."'
        ";
        $result = executeQueryReturnManyRow($query);
        return $result;
    }

    function renderKhoiSlideBanner(){
        //Ky thuat dat bien trong
        $html = '';
        $slides = getSlidesByCode('about_slide');
        for($i = 0; $i < count($slides); $i++){
            $html = $html . '
                <div class="about-content">
                    <h3>'.$slides[$i]['tieude1'].'</h3>
                    <div class="about-read">
                        <p class="text-1">
                            '.$slides[$i]['tieude2'].'
                        </p>
                        <p class="text-2">
                            '.$slides[$i]['tieude3'].'
                        </p>
                    </div>
                </div>
            ';
        }
        echo $html;
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
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb section end-->

<!--About us start-->
<div class="about-us bg-gray mt-110 mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-description">
                                <?php 
                                    renderKhoiSlideBanner();
                                ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-fun-fact">
            <div class="about-fun-fact-inner white-overlay">
                <div class="fun-factor">
                    <div class="row">
                        <div class="col-lg-6 col-md-6  mb-100">
                            <div class="single-fun-fact text-center">
                                <div class="fun-icon">
                                    <i class="zmdi zmdi-check-circle"></i>
                                </div>
                                <div class="fun-text">
                                    <h2>Successfull work</h2>
                                    <h3 class="counter"><?php echo $succesfullWork['giatricauhinh'] ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-100">
                            <div class="single-fun-fact text-center">
                                <div class="fun-icon">
                                    <i class="zmdi zmdi-account-circle"></i>
                                </div>
                                <div class="fun-text">
                                    <h2>Happy People</h2>
                                    <h3 class="counter"><?php echo $happyPeople['giatricauhinh'] ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 ">
                            <div class="single-fun-fact text-center">
                                <div class="fun-icon">
                                    <i class="zmdi zmdi-truck"></i>
                                </div>
                                <div class="fun-text">
                                    <h2>Freight Vehicles</h2>
                                    <h3 class="counter"><?php echo $frightVehicles['giatricauhinh'] ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 ">
                            <div class="single-fun-fact text-center">
                                <div class="fun-icon">
                                    <i class="zmdi zmdi-badge-check"></i>
                                </div>
                                <div class="fun-text">
                                    <h2>Award Winning</h2>
                                    <h3 class="counter"><?php echo $awardWinning['giatricauhinh'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--About us end-->
    
<!--Our Team section start-->
<div class="our_team_area pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters mt-60">
        <!-- Start Single Team -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single_team mb-30">
                    <div class="team__thumb">
                        <a href="#">
                            <img src="assets/img/team/5.jpg" alt="team images">
                        </a>
                    </div>
                    <div class="team__hover__info">
                        <div class="team__hover__action">
                            <h2><a href="#">Trần Huy Cường</a></h2>
                            <ul class="social__icon">
                                <li><a href="https://twitter.com/" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Team -->
            <!-- Start Single Team -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single_team mb-30">
                    <div class="team__thumb">
                        <a href="#">
                            <img src="assets/img/team/2.jpg" alt="team images">
                        </a>
                    </div>
                    <div class="team__hover__info">
                        <div class="team__hover__action">
                            <h2><a href="#">Thomas Baker</a></h2>
                            <ul class="social__icon">
                                <li><a href="https://twitter.com/" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Team -->
            <!-- Start Single Team -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single_team mb-30">
                    <div class="team__thumb">
                        <a href="#">
                        <img src="assets/img/team/4.jpg" alt="team images">
                        </a>
                    </div>
                    <div class="team__hover__info">
                        <div class="team__hover__action">
                            <h2><a href="#">Jane Spencer</a></h2>
                            <ul class="social__icon">
                                <li><a href="https://twitter.com/" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Team -->
        </div>
    </div>
</div>
<!--Our Team section End-->


