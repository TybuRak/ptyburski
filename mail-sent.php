<!doctype html>
<html lang="pl">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WLJC8CC');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <meta name="author" content="Paweł Tyburski">
    <meta name="copyright" content="Median - agencja interaktywna">
    <title>Wiadomość wysłana!</title>
    <!--    seo-->
    <link href="https://ptyburski.pl" rel="canonical">
    <meta name="description" content="Nazywam się Paweł Tyburski i profesjonalnie ścigam się w Kolarstwie Górskim, a wcześniej na żużlu. Prowadzę szkolenia kolarskie Downhill/Enduro i narciarskie.">
    <!--    Open Graph meta-->
    <meta property="og:title" content="Wiadomość wysłana!">
    <meta property="og:site_name" content="Wiadomość wysłana!">
    <meta property="og:description"
          content="Nazywam się Paweł Tyburski i profesjonalnie ścigam się w Kolarstwie Górskim, a wcześniej na żużlu. Prowadzę szkolenia kolarskie Downhill/Enduro i narciarskie.">
    <meta property="og:url" content="https://ptyburski.pl">
    <meta property="og:image" content="https://ptyburski.pl/assets/pawel-tyburski-na-trasie-mistrzostw-polski-w-downillu-2020-czarna-gora.webp">    <meta property="og:image:alt"
          content="Paweł Tyburski na trasie Mistrzostw Polski w downhillu 2020 odbywających się w Czarnej Górze">
    <meta property="og:type" content="profile">
    <meta property="og:locale" content="pl_PL">
    <meta property="fb:app_id" content="416668055462900">
    <!--    /seo-->
    <link rel="icon" href="favicon.png">
    <link href="main.css" rel="stylesheet">
    <style>.slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{position:relative;top:0;left:0;display:block;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}</style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLJC8CC"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<button class="open-main-nav" id="burger">
    <span class="burger"></span>
    <span class="burger-text">Menu</span>
</button>
<div class="nav-wrapper">
    <nav class="main-nav" id="main-nav">
        <ul>
            <li><a href="https://ptyburski.pl/#start">Start</a></li>
            <li><a href="https://ptyburski.pl/#o-mnie">O mnie</a></li>
            <li><a href="https://ptyburski.pl/#osiagniecia">Osiągnięcia</a></li>
            <li><a href="https://ptyburski.pl/#przynaleznosc">Przynależność</a></li>
            <li><a href="https://ptyburski.pl/szkolenia">Szkolenia</a></li>
            <li><a href="https://ptyburski.pl/wspolpraca">Współpraca</a></li>
            <li><a href="https://ptyburski.pl/#kontakt">Kontakt</a></li>
        </ul>
    </nav>
</div>
<div class="mail-content-wrapper">
    <div class="mail-text-wrapper">
        <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        // Import PHPMailer classes into the global namespace
        // These must be at the top of your script, not inside a function
        require './phpmailer/PHPMailer.php';
        require './phpmailer/SMTP.php';
        require './phpmailer/Exception.php';

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";

        try {
            //Server settings
            $mail->SMTPDebug = false;// Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp-pokrowce.super-host.pl';                    // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'ptyburski.pokrowce';                     // SMTP username
            $mail->Password = '^Qb1W4YZxFK9';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('pawel@ptyburski.pl', 'Paweł Tyburski');
            $mail->addAddress('biuro@tyburskistudio.pl', 'Paweł Tyburski');
            $mail->addReplyTo($_REQUEST['email'], $_REQUEST['name']);
            $mail->addBCC($_REQUEST['email'], 'Paweł Tyburski');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Potwierdzenie wysłania wiadomości na ptyburski.pl od " . $_REQUEST['name'];
            $mail->Body = "<h3>Dziękuję za kontakt poprzez stronę <a style='text-decoration: none; color: #D5AA61; font-weight: bold;' href='https://ptyburski.pl'>ptyburski.pl</a>!</h3><br><p>Odpiszę do Ciebie najszyciej jak się da!</p><br><h2>Dane Wysyłającego:</h2><p>Imię: {$_REQUEST['name']}<br>Email: <a  style='text-decoration: none; color: #D5AA61; font-weight: bold;'  href='{$_REQUEST['email']}'>{$_REQUEST['email']}</a><br>Telefon: <a  style='text-decoration: none; color: #D5AA61; font-weight: bold;'  href='tel:{$_REQUEST['phone']}'>{$_REQUEST['phone']}</a></p><br><p>Treść:<br>{$_REQUEST['content']}</p>";
            $mail->AltBody = $_REQUEST['content'];

            $mail->send();
            echo '<h2>Wiadomość Wysłana!</h2>';
            echo "<h4>Dane Wysyłającego:</h4><p>Imię: <mark>{$_REQUEST['name']}</mark></p><p>Email: <a href='{$_REQUEST['email']}'>{$_REQUEST['email']}</a></p><p>Telefon: <a href='tel:{$_REQUEST['phone']}'>{$_REQUEST['phone']}</a></p><br><p>Treść:<br><br>{$_REQUEST['content']}</p><br><br>";
            echo "<p>Kopia została wysłana na emaila: <a href='{$_REQUEST['email']}'>{$_REQUEST['email']}</a></p><br><br>";
        } catch (Exception $e) {
            echo "<h1>Nie udało się wysłać wiadomości :/</h1><br> Mailer Error: {$mail->ErrorInfo}";
        }
        ?>
        <div class="btn-wrapper">
            <a href="https://ptyburski.pl">Powrót</a>
        </div>
    </div>
    <div class="mail-photo-wrapper">
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

//nawigacja z codepen
        let burger = document.getElementById('burger'),
            nav = document.getElementById('main-nav'),
            navWrapper = document.querySelector('.nav-wrapper');

        burger.addEventListener('click', function () {
            if (navWrapper.style.zIndex === '100')
                setTimeout(() => {
                    navWrapper.style.zIndex = '-2';
                }, 275);
            else
                navWrapper.style.zIndex = '100';
            this.classList.toggle('is-open');
            nav.classList.toggle('is-open');
        });


//smooth scrolling i działanie nawigacji

        let windowWidth = $(window).width();

        $('nav ul li a').click(function (e) {
            if (windowWidth < 769) {
                burger.classList.toggle('is-open');
                nav.classList.toggle('is-open');
                setTimeout(() => {
                    navWrapper.style.zIndex = '-2';
                }, 275)
            } else {
            }

            let targetHref = $(this).attr('href');

            if (windowWidth < 769) {
                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top
                }, 500);
            } else {
                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top - 70
                }, 500);
            }

            e.preventDefault();
        });

        $('.scroll-down').click(function (e) {

            let targetHref = $(this).find('a').attr('href');

            if (windowWidth < 769) {
                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top
                }, 500);
            } else {
                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top - 70
                }, 500);
            }


            e.preventDefault();
        });

        // RESIZING PHOTO
        const imgResize = () =>{
            $('.mail-photo-wrapper').height($('body').height());
        }
        $(window).resize(() => {
            imgResize();
        });
        imgResize();
    });
</script>
</body>
</html>
