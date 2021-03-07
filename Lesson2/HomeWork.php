<?php

//TODO:1. Создать структуру классов ведения товарной номенклатуры.
//а) Есть абстрактный товар.
//б) Есть цифровой товар, штучный физический товар и товар на вес.
//в) У каждого есть метод подсчета финальной стоимости.
//г) У цифрового товара стоимость постоянная – дешевле штучного товара в два раза. У штучного товара обычная стоимость,
// у весового – в зависимости от продаваемого количества в килограммах. У всех формируется в конечном итоге доход с продаж.
//д) Что можно вынести в абстрактный класс, наследование?

abstract class Goods{
    private $price;
    private $purchaseCost;

    public function getPrice(){
        return $this->price;
    }

    public function getPurchaseCost(){
        return $this->purchaseCost;
    }

    public function getProfit(){
        return $this->getPrice() - $this->getPurchaseCost();
    }
}

abstract class ElectronicGoods extends Goods {
    public function getPrice(){
        return parent::getPrice()/2;
    }
}

abstract class PieceGoods extends Goods {
}

abstract class BulkGoods extends Goods {
    private $weight;

    public function getPrice(){
        return parent::getPrice() * $this->weight;
    }
    public function getProfit(){
        return ($this->getPrice() - $this->getPurchaseCost()) * $this->weight;
    }
}

//TODO:2. *Реализовать паттерн Singleton при помощи traits.

trait SingltoneDemoTrait {
    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new SingletonDemo();
        }
        return self::$instance;
    }
}

class SingletonDemo{
    private static $instance;

    use SingltoneDemoTrait;
}