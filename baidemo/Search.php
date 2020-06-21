<?php
require_once "BUS/ProductBUS.php";

if (isset($_GET["term"])) {
    $term = $_GET["term"];
    $result = ProductBUS::SearchGetInfo($term);
    $name = array();
    if (count($result > 0)) {
        foreach ($result as $row) {
            array_push($name, $row["NamePro"]);
        }
    }
}
echo json_encode($name);
