<?php
require_once "Connect.php";

class ProductDAO
{
    public static function Add($idPro, $namePro, $idCategory, $idBrands, $price, $quantity, $img, $descripiton)
    {
        $sql = "INSERT INTO Product VALUES (:idPro, :namePro, :idCategory, :idBrands, :price, :quantity, :img, :description)";
        $params = array("idPro" => $idPro, "namePro" => $namePro, "idCategory" => $idCategory, "idBrands" => $idBrands, "price" => $price, "quantity" => $quantity, "img" => $img, "description" => $descripiton);
        return ExecuteNonQuery($sql, $params) > 0;
    }

    public static function getData()
    {
        $sql = "SELECT * FROM Category JOIN Product ON Category.IdCategory = Product.IdCategory JOIN Brands ON Product.IdBrands = Brands.IdBrands";
        return ExecuteSelectQuery($sql);
    }

    public static function getDataById($idPro)
    {
        $sql = "SELECT * FROM Product WHERE IdPro = :idPro";
        $params = array("idPro" => $idPro);
        return ExecuteSelectQuery($sql, $params);
    }

    public static function delProduct($idPro)
    {
        $sql = "UPDATE Product SET Status = 0 WHERE IdPro = :idPro";
        $params = array("idPro" => $idPro);
        return ExecuteNonQuery($sql, $params) > 0;
    }

    public static function checkPro($idPro)
    {
        $sql = "SELECT COUNT(*) SL FROM Product WHERE IdPro = :idPro";
        $params = array("idPro" => $idPro);
        return ExecuteSelectQuery($sql, $params)[0]["SL"] > 0;
    }

    public static function repairPro($namePro, $idCategory, $idBrands, $price, $quantity, $img, $descripiton, $Status, $idPro)
    {
        $sql = "UPDATE Product SET NamePro = :namePro, IdCategory = :idCategory, IdBrands = :idBrands, Price = :price, Quantity = :quantity, Img =:img, Description = :description, Status = :status WHERE IdPro = :idPro";
        $params = array("namePro" => $namePro, "idCategory" => $idCategory, "idBrands" => $idBrands, "price" => $price, "quantity" => $quantity, "img" => $img, "description" => $descripiton, "status" => $Status, "idPro" => $idPro);
        return ExecuteNonQuery($sql, $params) > 0;
    }
    public static function GetPro($idPro)
    {
        $sql = "SELECT * FROM Category JOIN Product ON Category.IdCategory = Product.IdCategory JOIN Brands ON Product.IdBrands = Brands.IdBrands WHERE IdPro = :idPro";
        $params = array ("idPro" => $idPro);
        return ExecuteSelectQuery($sql, $params);
    }

    public static function SearchGetInfo($namePro){
        $sql = "SELECT * FROM Product WHERE NamePro LIKE '%:namePro%' LIMIT 0, 4";
        $params = array("namePro" => $namePro);
        return ExecuteSelectQuery($sql, $params);
    }
}
