<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Store Website</title>
    <link href="Css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="Css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" type="image/jpg" href="Images/logo.jpg" />
    <script src="js/jquerymain.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/nav-hover.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        $(document).ready(function($) {
            $('#dc_mega-menu-orange').dcMegaMenu({
                rowItems: '4',
                speed: 'fast',
                effect: 'fade'
            });
        });
    </script>
</head>

<body>
    <div class="wrap">
        <?php require_once "Inc\Header.php"; ?>
        <div class="main">
            <div class="content">
                <div class="support">
                    <div class="support_desc">
                        <h3>Live Support</h3>
                        <p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Live Technical Support</span></p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are
                            many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
                            of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                    <img src="images/contact.png" />
                    <div class="clear"></div>
                </div>
                <div class="section group">
                    <div class="col span_2_of_3">
                        <div class="contact-form">
                            <h2>Contact Us</h2>
                            <form>
                                <div>
                                    <span><label>NAME</label></span>
                                    <span><input type="text"></span>
                                </div>
                                <div>
                                    <span><label>E-MAIL</label></span>
                                    <span><input type="text"></span>
                                </div>
                                <div>
                                    <span><label>MOBILE.NO</label></span>
                                    <span><input type="text"></span>
                                </div>
                                <div>
                                    <span><label>SUBJECT</label></span>
                                    <span><textarea></textarea></span>
                                </div>
                                <div>
                                    <span><input type="submit" value="SUBMIT"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col span_1_of_3">
                        <div class="company_address">
                            <h2>Company Information :</h2>
                            <p>500 Lorem Ipsum Dolor Sit,</p>
                            <p>22-56-2-9 Sit Amet, Lorem,</p>
                            <p>USA</p>
                            <p>Phone:(00) 222 666 444</p>
                            <p>Fax: (000) 000 00 00 0</p>
                            <p>Email: <span>info@mycompany.com</span></p>
                            <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once "Inc\Footer.html"; ?>
    </div>
</body>

</html>