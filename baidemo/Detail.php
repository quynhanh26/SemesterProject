<?php
require_once "BUS/ProductBUS.php";
require_once "BUS/CartBUS.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="shortcut icon" type="image/jpg" href="images/logo.jpg" />
    <link rel="stylesheet" href="Css/Detail.css">
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="stylesheet" href="Css/Menu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Detail Product</title>
</head>

<body>
    <div class="wrap">
        <?php require_once "Inc\Header.php";
        if (!isset($_GET["Id"])) {
            header("Location: Products.php");
        } else {
            if (!ProductBUS::checkPro($_GET["Id"])) {
                header("Location: Products.php");
            } else {
                $result = ProductBUS::GetPro($_GET["Id"]);
                foreach ($result as $result) {
                }
            }
            if (isset($_POST["add"])) {
                $idAccount = $_SESSION['id'];
                $idPro = $_GET["Id"];
                if (CartBUS::addCart($idPro, $idAccount, 1)) {
                    echo "<script>alert('Seccuss')</script>";
                } else echo "<script>alert('false')</script>";
            }
        }
        ?>
        <h1 align="center" class="detpro">PRODUCT DETAIL</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class;="col-md-4">
                <img src="Images/<?= $result["Img"]; ?>" alt="photo" height="200">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <table>
                    <tr>
                        <td>ID Product:</td>
                        <td><?= $result["IdPro"]; ?></td>
                    </tr>
                    <tr>
                        <td>Name Product:</td>
                        <td><?= $result["NamePro"]; ?></td>
                    </tr>
                    <tr>
                        <td>Name Brand:</td>
                        <td><?= $result["NameBrands"]; ?></td>
                    </tr>
                    <tr>
                        <td>Name Category:</td>
                        <td><?= $result["NameCategory"]; ?></td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td><?= number_format($result["Price"]) . " VND";?></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><?= $result["Description"] . "."; ?></td>
                    </tr>
                    <form method="post">
                        <tr>
                            <td style="width: 250px;">
                                <a href="Cart.php"><button name="add">Add to Cart</button></a>
                                <a href="Products.php"><button>Back</button></a>
                                <a><button type="submit">Download</button></a>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
        <?php require_once "Inc\Footer.html"; ?>
    </div>
</body>

</html>