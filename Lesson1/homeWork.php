<?php

//TODO: 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник,
// посылка и т.п. 2. Описать свойства класса из п.1 (состояние). 3. Описать поведение класса из п.1 (методы).

class Price {
    private $price;
    private $discount;
    private $date;

    public function getPrice(){
        return $this->price;
    }
    public function getDate(){
        return $this->date;
    }
}

//TODO: 4. Придумать наследников класса из п.1. Чем они будут отличаться?
class WholesalePrice extends Price {
    private $bonus;
}

//TODO: 5. Дан код. Что он выведет на каждом шаге? Почему?
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

// 1234 - переменная x статическая.

//TODO: 6. Объясните результаты в этом случае.
//Немного изменим п.5:
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

// 1122 - у потомка свои поля.

//TODO: 7. *Дан код:
$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

// 1122 - с точки зрения логики выполнения, ничего не изменилось.
