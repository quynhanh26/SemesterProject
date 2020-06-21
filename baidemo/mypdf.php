<?php
require_once __DIR__ . "/vendor/autoload.php";
$name = $result["NamePro"];
$brand = $result["NameBrands"];
$category = $result["NameCategory"];
$price = $result["Price"];
$description = $result["Description"];
$mpdf = new \Mpdf\Mpdf();
$data = "";
$data .= "<h1>Product Details</h1>";
$data .= "<strong>Product: </strong>" . $name . "<br />";
$data .= "<strong>Brand: </strong>" . $brand . "<br />";
$data .= "<strong>Category: </strong>" . $category . "<br />";
$data .= "<strong>Price: </strong>" . $price . "<br />";
$data .= "<strong>Description: </strong>" . $description;
$mpdf->WriteHTML($data);
$mpdf->Output('myfile.pdf', 'D');
