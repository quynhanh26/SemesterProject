<?php
require_once "Connect.php";

class CartDAO
{
    public static function ShowPro()
    {
        $sql = "SELECT * FROM cart JOIN product on cart.IdPro = product.IdPro";
        return ExecuteSelectQuery($sql);
    }

    public static function UpdateQuantity($quantity, $IdAccount)
    {
        $sql = "UPDATE Cart SET Quantity = :quantity WHERE IdAccount = :IdAccount";
        $params = array('quantity' => $quantity, 'IdAccount' => $IdAccount);
        return ExecuteNonQuery($sql, $params) > 0;
    }

    public static function addPro($idPro, $idAccount, $quantity)
    {
        $sql = "INSERT INTO Cart VALUES (:idPro, :idAccount, :quantity)";
        $params = array("idPro" => $idPro, "idAccount" => $idAccount, "quantity" => $quantity);
        return ExecuteNonQuery($sql, $params) > 0;
    }

    public static function checkCart($idPro, $idAccount)
    {
        $sql = "SELECT COUNT(*) SL FROM Cart WHERE IdPro = :idPro AND IdAccount = :idAccount";
        $params = array("idPro" => $idPro, "idAccount" => $idAccount);
        return ExecuteSelectQuery($sql, $params)[0]["SL"] > 0;
    }

    public static function addPro2 ($idPro, $idAccount)
    {
        $sql = "UPDATE Cart SET Quantity = Quantity + 1 WHERE IdPro = :idPro AND IdAccount = :idAccount;";
        $params = array("idPro" => $idPro, "idAccount" => $idAccount);
        return ExecuteNonQuery($sql, $params) > 0;
    }
}
