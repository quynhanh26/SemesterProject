<?php
require_once "../BUS/CartBUS.php";
$CartPro = CartBUS::ShowPro();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Free Smart Store Website Template</title>
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
        <form method="POST">
            <div class="main">
                <div class="content">
                    <div class="cartoption">
                        <div class="cartpage">
                            <h2>Your Cart</h2>
                            <table class="tblone">
                                <tr>
                                    <th width="20%">Product Name</th>
                                    <th width="10%">Image</th>
                                    <th width="15%">Price</th>
                                    <th width="25%">Quantity</th>
                                    <th width="20%">Total Price</th>
                                    <th width="10%">Action</th>
                                </tr>
                                <?php foreach ($CartPro as $CartPro) { ?>
                                    <tr>
                                        <td><?= $CartPro['NamePro'] ?></td>
                                        <td><img src="<?= $CartPro['Img'] ?>" /></td>
                                        <td><label id="gsp"><?= $CartPro['Price'] ?></label></td>
                                        <td>
                                            <input type="number" name="quantity" id="slsp" value="<?= $CartPro[2] ?>">
                                            <input type="submit" value="Edit" name="editquantity">
                                        </td>
                                        <td><label id="tsp"><?= $CartPro['Price'] * $CartPro[2] ?></label></td>
                                        <td><a href="">X</a></td>
                                    </tr>
                                <?php } ?>
                            </table>
                            <table style="float:right;text-align:left;" width="40%">
                                <tr>
                                    <th>Sub Total : </th>
                                    <td><label id="totals"></label></td>
                                </tr>
                                <tr>
                                    <th>VAT : </th>
                                    <td><label id="vats"></label></td>
                                </tr>
                                <tr>
                                    <th>Grand Total :</th>
                                    <td><label id="grandtotals"></label></td>
                                </tr>
                            </table>
                        </div>
                        <div class="shopping">
                            <div class="shopleft">
                                <a href="Index.php"><img src="images/shop.png" /></a>
                            </div>
                            <div class="shopright">
                                <a href="Signin.php"><img src="images/check.png" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </form>
        <?php require_once "Inc\Footer.html"; ?>
    </div>
</body>

</html>