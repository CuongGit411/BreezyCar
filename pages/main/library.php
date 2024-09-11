                <!--Breadcrumb section-->
                <div class="breadcrumb_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="breadcrumb_inner">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>Library</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Breadcrumb section end-->
                
                <div class="title-blog" style="width: 100%;
                                                height: 100%;
                                                display: table;
                                                margin-top: 20px;
                                                margin-bottom: 30px;">
                    <div class="text" style="display: table-cell;
                                            vertical-align: middle;
                                            text-align: center;
                                        ">
                        <h1>My Profile</h1>
                        <div class="text-phu" style="width: 640px;
                                                    margin: 0 auto;
                                                    text-align: center;
                                                    font-size: 18px;">
                        Welcome to my profile. Here you will find a selection of my work. Explore my projects to learn more about what I do.</div>
                    </div>
                </div>
                
                <!--shop area start-->
                <div class="blog_area pt-105 pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                    <a href="assets/img/slide/img-1.jpg" class="image-link"><img src="assets/img/slide/img-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                    <a href="assets/img/slide/img-3.jpg" class="image-link"><img src="assets/img/slide/img-3.jpg" alt=""></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                    <a href="assets/img/slide/img-4.jpg" class="image-link"><img src="assets/img/slide/img-4.jpg" alt=""></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                    <a href="assets/img/slide/banner4.jpg" class="image-link"><img src="assets/img/slide/banner4.jpg" alt=""></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                    <a href="assets/img/slide/banner2.jpg" class="image-link"><img src="assets/img/slide/banner2.jpg" alt=""></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                     <a href="assets/img/slide/banner4.jpg" class="image-link"><img src="assets/img/slide/banner4.jpg" alt=""></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                     <a href="assets/img/slide/banner4.jpg" class="image-link"><img src="assets/img/slide/banner4.jpg" alt=""></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_blog_post mb-40">
                                    <div class="post_thumbnail">
                                        <a href="assets/img/slide/banner1.jpg" class="image-link"><img src="assets/img/slide/banner1.jpg" alt=""></a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                            <div class="single_blog_post mb-40">
                                <div class="post_thumbnail">
                                    <a href="assets/img/slide/banner4.jpg" class="image-link"><img src="assets/img/slide/banner4.jpg" alt=""></a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--shop area end-->
                
                

                

                <script>
    $(document).ready(function() {
        $('.image-link').click(function(e) {
            e.preventDefault();
            var imageUrl = $(this).attr('href');
            $('<div class="overlay"></div>').appendTo('body');
            $('<div class="image-popup"></div>').html('<img src="' + imageUrl + '">').appendTo('.overlay');
            $('.overlay').click(function() {
                $(this).remove();
            });
        });
    });
</script>