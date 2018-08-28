<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>COLD SHORT</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>

</head>

<body>

    <header class="header" id="header">
        <!--header-start-->
        <div class="container">
            <figure class="animated fadeInDown delay-07s">
                <a href="#"><img src="img/logoLog.png" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">Лучший укоротитель ссылок!</h1>
            <form method="post" action="shorten.php" id="shortener">
                <ul class="we-create animated fadeInUp delay-1s">
                    <input type="text" name="longurl" id="longurl" class="form-control">
                    <li>Введите ссылку в поле, после нажмите на кнопку :)</li>
                </ul>
                <button class="btn span btn-4 btn-4a icon-arrow-right link animated fadeInUp delay-1s" type="submit" value="Shorten">Укоротить ссылку</button>
            </form>

        </div>
    </header>
    <!--header-end-->

    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>Преимущества</h2>
            <h6>Сдесь мы расскажим о преимуществах Cold Short'a!</h6>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-paw"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Бесплатно</h3>
                            <p>Сервис Cold Short позволяет вам быстро и без сложностей превратить длинную и уродливую ссылку в простую и красивую - и это бесплатно! </p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-gear"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Простота и Дружелюбность</h3>
                            <p>Наш сервис очень прост в использований и принимает ссылки любого вида.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-apple"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Бесперебойная работа</h3>
                            <p>Мы гарантируем вам 99.95% доступность ваших ссылок. Все ссылки находятся под круглосуточным мониторингом, любые проблемы решаются в течение 15 минут.</p>
                        </div>
                    </div>
                    <div class="service-list">
                        <div class="service-list-col1">
                            <i class="fa-medkit"></i>
                        </div>
                        <div class="service-list-col2">
                            <h3>Поддержка 24/7</h3>
                            <p>Русскоговорящая поддержка, которая поможет вам в любое время дня и суток.</p>
                        </div>
                    </div>
                </div>
                <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                    <img src="img/macbook-pro.png" alt="">
                </figure>

            </div>
        </div>
    </section>
    <!--main-section-end-->

    <footer class="footer">
        <div class="container">
            <div class="footer-logo">
                <a href="#"><img src="img/footer-logo.png" alt=""></a>
            </div>
            <span class="copyright">&copy; Нурхат Кольт. Все права защищены</span>
            <div class="credits">
                а вот и <a href="https://vk.com/mrco1t">Автор</a>
            </div>
        </div>
    </footer>


    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>

</body>

</html>