<?php

//abstract class AbstractModel
//{
//    abstract public function chooseModel($data);
//}
//
//class AmericanCar extends AbstractModel
//{
//    public function chooseModel($data)
//    {
//        // TODO: Implement chooseModel() method.
//        echo "american ";
//        var_dump($data);
//        echo PHP_EOL;
//    }
//}
//
//class RussianCar extends AbstractModel
//{
//    public function chooseModel($data)
//    {
//        // TODO: Implement chooseModel() method.
//        echo "russian ";
//        var_dump($data);
//        echo PHP_EOL;
//    }
//}
//
//class Factory
//{
//    public static function getChoose(): void
//    {
//        $car = new RussianCar();
//        $car_1 = new AmericanCar();
//        $car->chooseModel('abstract_1');
//        $car_1->chooseModel('abstract_2');
//    }
//}
//
//$choose = Factory::getChoose();

namespace PracticingAllTheSections\PracticingAbstractClasses;

abstract class a
{
    public static function foo(): string
    {
        return 'hello';
    }
}

echo a::foo();
