<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Complaint</title>

    <link href="{{asset('/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SMK <span>ASSALAAM</span> BANDUNG</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{route('login')}}">Home</a>
                    </li>
                    <li>
                        <a href="#about">Profil</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <style>
    
        .navbar-default {
            background-color: transparent;
            border-color: transparent;
            -webkit-transition: all 0.5s ease 0s;
            -o-transition: all 0.5s ease 0s;
            transition: all 0.5s ease 0s;
        }
        
        .navbar-nav { 
            margin-top: 40px;
            float: right;
        }
        
        @media screen and (max-width: 767px) {
        .navbar-nav {
            float: none;
            text-align: center;
            background: rgba(25, 33, 60, 0.5);
        }
        }
        
        .navbar-default .navbar-brand {
            margin-top: 40px;
            font-size: 28px;
            font-family: 'Righteous', cursive;
            color: #fff;
            letter-spacing: 1px;
            -moz-transition:color .5s ease-in;
            -o-transition:color .5s ease-in;
            -webkit-transition:color .5s ease-in;
        }
        
        .navbar-default .navbar-brand span {
            color: #42a5f6;
            -moz-transition:color .5s ease-in;
            -o-transition:color .5s ease-in;
            -webkit-transition:color .5s ease-in;
        }
        
        @media screen and (max-width: 400px) {
        .navbar-default .navbar-brand {
            font-size: 22px;
        }
        }
        
        .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand span:hover {
            color: #3D99B8;
        }
        
        .navbar-default .navbar-nav>li>a {
            color: #fff;
            font-size: 14px;
            font-family: 'Noto Sans', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .navbar-default .navbar-nav>li>a:hover {
            color: #42a5f6;
        }
        
        .navbar-default .navbar-nav>li>a:focus {
            color: #42a5f6;
        }
        
        .navbar-default .navbar-toggle {
            margin-top: 40px;
            border: none;
        }
        
        .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
            background: none;
        }
        
        .navbar-default .navbar-toggle .icon-bar {
            height: 4px;
            width: 28px;
            background: #42a5f6;
        }
        
        .navbar-default.shrink {
            background:rgba(25, 33, 60, 0.8)
        }
        
        .navbar-default.shrink .navbar-nav {
            margin-top: 20px;
            margin-bottom: 10px;
        }
        
        .navbar-default.shrink .navbar-brand {
            margin-top: 20px;
        }
        
        .navbar-default.shrink .navbar-toggle {
            margin-top: 25px;
        }

    
    </style>

    <!-- Full Page Image Background Carousel Header -->
    <header id="mainCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
            <div class="slider_overlay"></div>
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('frontend/images/smkd.jpg');">
                    <div class="hero">
                        <hgroup>
                            <font size="7">Hi, welcome to student complaint application of SMK Assalaam Bandung</font>
                            <h3>Get started below to login</h3>
                        </hgroup>
                        <br>
                        <br>
                        <a href="{{route('login')}}" class="btn btn-primary"><font size="6">Login</font></a>
                    </div>
                </div>
            </div>
            <div class="item">

            <div class="slider_overlay"></div>
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('frontend/images/pr10.jpg');">
                    <div class="hero">
                        <hgroup>
                            <font size="7">Pendidikan adalah senjata yang paling kuat. Yang bisa anda gunakan untuk mengubah dunia.</font>
                            <h3>"Nelson Mandela"</h3>
                        </hgroup>
                    </div>
                </div>
            </div>
            <div class="item">    
            <div class="slider_overlay"></div>
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('frontend/images/pr1.jpg');">
                    <div class="hero">
                        <hgroup>
                            <font size="7">Jika seseorang berpergian mencari ilmu, maka Allah akan menjadikan perjalanannya seperti menuju surga.</font>
                            <h3>"Nabi Muhammad Shallallahu 'alaihi wasallam"</h3>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#mainCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    
    <div id="about">
        <div class="container">
            <div class="text">
                <h2>Profil SMK Assalaam Bandung</h2>
                <hr>
            <p>SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan ringan (roda empat) plus sepeda motor dalam proses pendidikan pelatihan. Peka terhadap perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar lulusannya siap menghadapi perubahan.

                SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi dan improvisasi, mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.

                Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang lengkap UP TO DATE, waktu praktek memadai dan praktek berstandar industri dengan pelayanan prima.</p>
            </div>

        <div class="col-md-6">
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
                <!-- panel 1 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="panel-title">Keunggulan SMK Assalaam Bandung</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>01. Program pembelajaran disusun berdasarkan standar Nasional dan dikembangkan berdasarkan kebutuhan industri serta  bekerjasama dengan DU/DI (Dunia Usaha/Dunia Industri).
                        <p>02. Menghasilkan lulusan yang siap bekerja,memiliki mentalitas kerja yang tangguh, dan memiliki keterampilan ganda (jurusan otomotif : Mobil + Motor, jurusan  RPL : programer + teknisi).
                        <p>03. Tenaga pendidik berasal dari lulusan perguruan-perguruan tinggi terkemuka, dan pelaku Industri.
                        <p>04. Setiap pelajaran praktek/paket keahlian dilaksanakan dengan menggunakan sistem blok, dengan 3 guru pengajar.
                        <p>05. Ujian Kompetensi diselenggarakan secara mandiri, menggunakan kendaraan dan alat yang mutakhir.
                        <p>06. Pengembangan karakter dibentuk atas dasar ajaran ISLAM sebagai fondasi utama dalam berbagai aktivitas siswa.
                        <p>07. Dibukanya layanan Bursa Kerja Khusus yang menyediakan pelatihan tambahan siswa untuk siap bekerja dan penyaluran lulusan ke dunia kerja.
                        <p>08. Memiliki unit produksi SMK Assalaam yang menjadi laboratorium langsung bagi siswa dalam mengembangkan keterampilan kejuruannya.
                        <p>09. Sarana dan prasarana pembelajaran yang lengkap dan terkini.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">Visi Misi SMK Assalaam Bandung</h4>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        
                            <p>1. Intelek dalam melaksanakan proses pembelajaran
                            <p>2. Disiplin dalam segala aspek kehidupan
                            <p>3. Amanah dalam melaksanakan tugas
                            <p>4. Maju dan menang untuk kepentingan bersama
                            <p>5. Aktif dalam merespon perkembangan
                            <p>6. Norma islam sebagai landasan dalam beraktifitas</p>
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->
                
                <!--  panel 3 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title">Program Praktek Siswa SMK Assalaam Bandung</h4>
                        </div>
                    </span>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                          <!-- tab content goes here -->
                            <p>1. Program praktek di SMK Assalaam memiliki taget SISWA MINIMAL BISA (bukan   pernah), bahkan diharapkan siswa sampai terampil dan mahir.
                            <p>2. Praktek dilakukan 2 hari dalam 1 minggu (sekolah lain biasanya 1 hari/minggu).
                            <p>3. Tenaga pengajar selain berasal dari lulusan-lulusan terbaik perguruan-perguruan tinggi terkemuka, juga berasal dari pelaku Industri langsung.
                            <p>4. Siswa diperbolehkan untuk menggunakan fasilitas sekolah (bengkel/laboratorium) diluar jam pembelejaran.
                            <p>5. Setiap pelajaran praktek/paket keahlian dilaksanakan dengan menggunakan sistem blok, dimana 3 GURU LANGSUNG diturunkan untuk mengajar.
                            <p>6. Keterampilan ganda diberikan kepada siswa agar memiliki kesempatan kerja yang lebih luas (Seperti jurusan Mobil + Motor (sebaliknya) atau Jurusan RPL + TKJ) dan ditambahkan keterampilan lainnya seperti setir mobil.
                            <p>7. Prakerin dilakukan di sekolah dengan pemantauan dan pengarahan dari pihak industri secara langsung selama 1 ½ bulan, kemudian bagi siswa dengan perolehan nilai terbaik akan dikirimkan langsung ke bengkel resmi atau perusahaan untuk menambah wawasan dan pengalaman langsung di dunia kerja.</p>
                          </div>
                        </div>
                      </div>
                </div>
             </div> 
             
             <div class="col-md-6">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                        <li data-target="#carousel" data-slide-to="5"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('frontend/images/pr6.jpg')}}" alt="First slide">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/pr2.jpg')}}" alt="Second slide">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/pr7.jpg')}}" alt="Third slide">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/pr8.jpg')}}" alt="fourth slide">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/pr3.jpg')}}" alt="fiveth slide">
                        </div>
                        <div class="item">
                            <img src="{{asset('frontend/images/pr9.jpg')}}" alt="sixth slide">
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
    
    <div class="footer">
        <div class="container">
            <p class="text-muted">All Rights Reserved <a href="http://freedesignz.com">Free Designz</a>. Robi Febrianto</p>
        </div>
    </div>



    <!-- jQuery -->
    <script src="{{asset('/frontend/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('/frontend/js/jquery.isotope.js')}}"></script>
    
    <script src="{{asset('/frontend/js/jquery.scrollUp.min.js')}}"></script>
    
    
    <script type="text/javascript">
    
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });

    </script>
    
    
    <!-- Navbar Change on Scroll -->
    <script type="text/javascript">
        $(function(){
        var shrinkHeader = 100;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('.navbar-default').addClass('shrink');
            }
            else {
                $('.navbar-default').removeClass('shrink');
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    });

    </script>    


    <!-- Portfolio Isotope Settings -->
    <script type="text/javascript">

    $(window).load(function(){
  
  
     var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;

  
    $container.isotope({
    // disable window resizing
        resizable: true,
        masonry: {
        columnWidth: colW
        }
    });
  
    $(window).smartresize(function(){
    // check if columns has changed
        var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
        if ( currentColumns !== columns ) {
        // set new column count
        columns = currentColumns;
        // apply width to container manually, then trigger relayout
        $container.width( columns * colW )
            .isotope('reLayout');
        }
    
    }).smartresize(); // trigger resize to set container width
    $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
 
            var selector = $(this).attr('data-filter');
            $container.isotope({
            
            filter: selector,
         });
             return false;
        });
  
    });

    </script>
    
    
    <!-- Scroll To Top Settings -->
    <script type="text/javascript">
    
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 600, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 20, // Animation in speed (ms)
            animationOutSpeed: 20, // Animation out speed (ms)
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            scrollImg: true,
        });
    });
    
    </script>

    
</body>

</html>
