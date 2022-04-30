<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Website School</title>

        <link rel="stylesheet" href="{{url('css')}}/style.css">
        <link rel="stylesheet" href="{{url('css')}}/colors.css">
        <link rel="stylesheet" href="{{url('css')}}/responsive.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- owl -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <!-- fancybox -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
        <!-- footer icon -->
        <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
    </head>

    <body>
        <?php
            include 'inc/header.php'
        ?>
<div id="main">
    <!-- CAROUSEL IMAGES -->
    <section class="banner">
    	<div class="owl-carousel owl-theme carousel-sliders">
	    	<div class="item">
	        	<img src="images/course5.jpg" alt="Slider">
	        	<div class="overlay-bg"></div>
	        	<div class="container">
	            	<div class="caption">
	            		<h5 class="caption-supheading">Chào mừng đến với WinX</h5>
		                <h1 class="caption-heading">Khóa học trực tuyến<br/> tốt nhất dành cho bạn</h1>
		                <a href="#" class="btn btn-secondary">Tìm hiểu thêm</a>
		            </div>  
	            </div>
	    	</div>
	    	<div class="item">
	            <img src="images/course2.jpg" alt="Slider">
	            <div class="overlay-bg"></div>
	            <div class="container">
	            	<div class="caption">
		                <h5 class="caption-supheading">Chào mừng đến với WinX</h5>
		                <h1 class="caption-heading">Khóa học trực tuyến<br/> tốt nhất dành cho bạn</h1>
		                <a href="#" class="btn btn-secondary">Tìm hiểu thêm</a>
		            </div>  
	            </div>
	        </div>  
	    	<div class="item">
	            <img src="images/course4.jpg" alt="Slider"> 
	            <div class="overlay-bg"></div>
	            <div class="container">
	            	<div class="caption">
		                <h5 class="caption-supheading">Chào mừng đến với WinX</h5>
		                <h1 class="caption-heading">Khóa học trực tuyến<br/> tốt nhất dành cho bạn</h1>
		                <a href="#" class="btn btn-secondary">Tìm hiểu thêm</a>
		            </div>  
	            </div>
	        </div>  
    	</div>
	    <div class="custom-nav owl-nav"></div>
    </section>

    <!-- WELCOME CONTENT -->
    <section id="about">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <img class="w-100 p-3" src="images/WELCOME CONTENT1.jpg" alt="School about">
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2 class="section-subtitle">Chào mừng bạn đến với</h2>
                        <h1 class="section-title">Khóa học trực tuyến</h1>
                        <p>Khóa học giúp các bạn có thể tìm hiểu, học hỏi về 
                        những ngôn ngữ mới từ những con người chập chững vừa biết 
                        viết code cho đến những thiếu niên đầy kinh nghiệm để có thể 
                        tự bản thân viết trên những chương trình của bản thân bằng những 
                        ngôn ngữ lập trình khác nhau như C, C++, Python,… tạo ra được những 
                        nguồn tài nguyên mới giúp ích cho thị trường Điện tử của Việt Nam ngày 
                        một tiến bộ và đưa những sản phẩm ấy có thể vươn tầm thế giới.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COURSES -->
    <section id="courses" class="courses">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">Các khóa học của chúng tôi</h2>
            <h1 class="section-title">Các khóa học hàng đầu</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/tin1.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">Word</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Khóa học "Word" cung cấp đầy đủ kiến thức lý thuyết từ 
                                cơ bản đến nâng cao về công cụ Word. Học viên tham gia khóa học
                                hoàn toàn có thể thực hiện công việc soạn thảo và sử dụng các 
                                tính năng thông minh trong Word ngay trong quá trình học trực tuyến.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Miễn phí</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="{{url('word')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end -->
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/tin2.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">Excel</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Khóa học bao phủ toàn bộ các vấn đề trong Excel. Học viên 
                                được tham gia cộng đồng học viên Excel, trao đổi thảo luận trực tiếp 
                                với giảng viên trên diễn đàn. Khóa học như một cuốn sách tra cứu các thủ thuật, 
                                cách giải quyết các vấn đề gặp phải trong Excel.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Miễn phí</span>
                                </div>
                                <div class="col-6 course-join content-right">
                                    <a class="btn btn-secondary" href="{{url('excel')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/tin3.png" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">PowerPoint</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Khóa học "Powerpoint" giúp bạn phát triển và nâng cao 
                                kỹ năng chuẩn bị các bài thuyết trình độc đáo và tuyệt vời. 
                                Bạn sẽ có được sự hiểu biết rộng rãi về hầu hết các công cụ, 
                                tính năng, thành phần trình chiếu phổ biến và nhiều công cụ trình bày khác.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Miễn phí</span>
                                </div>
                                <div class="col-6 course-join content-right">
                                    <a class="btn btn-secondary" href="{{url('ppt')}}">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/class1.jpg" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">Khóa học cơ bản</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Khóa học "Word" cung cấp đầy đủ kiến thức lý thuyết từ 
                                cơ bản đến nâng cao về công cụ Word. Học viên hoàn toàn 
                                có thể thực hiện công việc soạn thảo và sử dụng các tính năng 
                                thông minh trong Word ngay trong quá trình học trực tuyến.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Miễn phí</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="#">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/class1.jpg" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">Khóa học nâng cao</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Khóa học "Word" cung cấp đầy đủ kiến thức lý thuyết từ 
                                cơ bản đến nâng cao về công cụ Word. Học viên hoàn toàn 
                                có thể thực hiện công việc soạn thảo và sử dụng các tính năng 
                                thông minh trong Word ngay trong quá trình học trực tuyến.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Miễn phí</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="#">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course mb-4">
                        <div class="course-image">
                            <img class="transition" src="images/class1.jpg" alt="course detail">
                        </div>
                        <div class="course-detail p-4">
                            <h2>
                                <a href="#">Khóa học chuyên ngành</a>
                            </h2>
                            <div class="course-info row pt-2 pb-3">
                                <div class="col-6">
                                    <i class="fas fa-user"></i> 50
                                </div>
                                <div class="col-6 content-right">
                                    <i class="fas fa-clock"></i> 5h 40m
                                </div>
                            </div>
                            <div class="course-desc">
                                <p>Khóa học "Word" cung cấp đầy đủ kiến thức lý thuyết từ 
                                cơ bản đến nâng cao về công cụ Word. Học viên hoàn toàn 
                                có thể thực hiện công việc soạn thảo và sử dụng các tính năng 
                                thông minh trong Word ngay trong quá trình học trực tuyến.</p>
                            </div>
                            <div class="row">
                                <div class="col-6 course-price">
                                    <span>$ Miễn phí</span>
                                </div>
                                <div class="col-6 content-right">
                                    <a class="btn btn-secondary" href="#">Tham gia ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEACHERS -->
    <section id="teachers" class="teachers">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">Đội ngũ giảng viên</h2>
            <h1 class="section-title">Giảng viên chính</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="teacher transition text-center mb-5 pt-5 pb-5">
                        <img class="transition mb-4 mx-auto" src="images/avateacher1.png" alt="Teacher detail">
                        <h2>Nguyễn Hoàng Việt Tuấn</h2>
                        <h4 class="mb-4">AI</h4>
                        <p>Giảng viên Khoa CNTT ĐH Sư Phạm TPHCM có khả năng chuyên sâu về mảng trí tuệ nhân tạo, có tư duy mở. 
                            Tạo ra được những ứng dụng mới tiếp xúc vào đời sống vào nhiều lĩnh vực như y tế, khoa học, kinh doanh 
                            hay bảo mật an ninh…
                        </p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teacher transition text-center mb-5 pt-5 pb-5">
                        <img class="transition mb-4 mx-auto" src="images/avateacher1.png" alt="Teacher detail">
                        <h2>Lương Trần Ngọc Khiết</h2>
                        <h4 class="mb-4">Full-stack</h4>
                        <p>Giảng viên chính của Khoa CNTT tại ĐH Sư Phạm TPHCM có khả năng chuyên sâu trong lĩnh vực giảng dạy. 
                            Phụ trách cả front-end (thiết kế UI, UX và flow) cho tới back-end (thiết kế database và viết các API cần thiết) 
                            của hệ thống.
                        </p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="teacher transition text-center mb-5 pt-5 pb-5">
                        <img class="transition mb-4 mx-auto" src="images/avateacher1.png" alt="Teacher detail">
                        <h2>Trần Thanh Nhã</h2>
                        <h4 class="mb-4">Full-stack</h4>
                        <p>Giảng viên chính của Khoa CNTT tại ĐH Sư Phạm TPHCM có khả năng chuyên sâu trong lĩnh vực giảng dạy. 
                            Phụ trách cả front-end (thiết kế UI, UX và flow) cho tới back-end (thiết kế database và viết các API cần thiết) 
                            của hệ thống.
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery" class="gallery">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">Các khóa học của chúng tôi</h2>
            <h1 class="section-title">Tất cả các khóa học</h1>
            <div class="row">
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/nangcao3.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Cơ sở dữ liệu</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://www.youtube.com/feed/history">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/nangcao4.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Cấu trúc dữ liệu</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://www.youtube.com/feed/history">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/chuyennganh2.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Kiến trúc máy tính</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://www.youtube.com/feed/history">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/chuyennganh3.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Lập trình Web</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://www.youtube.com/feed/history">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/python1.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Python</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://www.youtube.com/feed/history">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 gallery-item">
                    <div class="image">
                        <img class="image__img" src="./images/java1.png" alt="Bricks">
                        <div class="image__overlay image__overlay--primary">
                            <p class="image__title">Java</p>
                            <div class="col-6 content-right">
                                <a class="btn btn-secondary" href="https://www.youtube.com/feed/history">Tham gia ngay</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- EVENTS -->
    
    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials">
        <div class="container pt-5 pb-5">
            <h2 class="section-subtitle">Phản hồi</h2>
            <!-- <h1 class="section-title">Phản hồi</h1> -->
            <div class="owl-carousel owl-theme carousel-testimonials">
                <div class="item">
                    <div class="row">
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher2.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>Hỗ trợ nắm bài bằng các bài tập và ví dụ tốt,</br> trang tạo cảm giác
                                nhẹ nhàng và thoải mái</p>
                                <h4>Nguyễn Ngọc Nhung</h4>
                                <h5>Học viên</h5>
                            </div>
                        </div>
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher2.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>Web dạy từ cơ bản đến nâng cao khá ổn</br> nhưng chuyển trang qua lại chưa được tốt</p>
                                <h4>Trần Ngọc Bảo Hân</h4>
                                <h5>Học viên</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher1.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>Các khóa học chưa ổn lắm, nhiều lý thuyết</br> nhưng còn nhiều bất tiện</p>
                                <h4>Trần Anh Khoa</h4>
                                <h5>Học viên</h5>
                            </div>
                        </div>
                        <div class="col-md-6 testimonial mb-5">
                            <img class="transition" src="images/avateacher1.png" alt="testimonial detail">
                            <div class="testimonial-content">
                                <p>Hình ảnh web gợi sự hứng thú học nhưng</br> còn nhiều điều cần cải thiện hơn</p>
                                <h4>Nguyễn Tuấn Kiệt</h4>
                                <h5>Học viên</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="contact" class="contact">
        <div class="container pt-5 pb-5">
            <h1 class="section-title">Contact Us</h1>
            <div class="container">
                <form> 
                    <div class="form-item">
                        <label for="">Name: </label><br>
                        <input type="text" name="name" id="name" placeholder="Name" required>
                    </div>
    
                    <div class="form-item">
                        <label for="">Phone: </label><br>
                        <input type="text" name="phone" id="phone" placeholder="Phone" required>
                    </div>
    
                    <div class="form-item">
                        <label for="">Email: </label><br>
                        <input type="text" name="email" id="mail" placeholder="Email" required>
                    </div>
    
                    <div class="form-item">
                        <label for="">Message: </label><br>
                        <input name="message" id="message" cols="30" rows="10" placeholder="Message" required>
                    </div>

                    <button class="contact-button">Send</button>
                </form>    
            </div>
        </div>
    </section>
</div>

    <?php
        include 'inc/footer.php'
    ?>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <!-- owl js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!-- fancybox -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        <!-- custom js -->
        <script src="{{url('js')}}/scripts.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>