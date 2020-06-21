<?php
require_once "DAO/CartDAO.php";

class CartBUS
{
    public static function ShowPro()
    {
        return CartDAO::ShowPro();
    }

    public static function UpdateQuantity($quantity, $IdAccount)
    {
        return CartDAO::UpdateQuantity($quantity, $IdAccount);
    }

    public static function addCart($idPro, $IdAccount, $quantity)
    {
        if (CartDAO::checkCart($idPro, $IdAccount)) {
            return CartDAO::addPro2($idPro, $IdAccount);
        }else{
            return CartDAO::addPro($idPro, $IdAccount, $quantity);
        }
    }
}
