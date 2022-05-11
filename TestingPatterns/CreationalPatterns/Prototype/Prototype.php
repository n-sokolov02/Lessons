<?php

/*
 * Прототип — порождающий шаблон проектирования. Он используется для клонирования существующего объекта, вместо его инстанцирования с помощью new.
 * Клонирование может использоваться для случаев, когда нужно создать несколько объектов, инстанцирование которых затратная операция.
 * В этом случае вначале делается один объект, происходит его начальная «тяжелая инициализация», а после объект клонируется для использования под разные задачи.
*/

namespace testingPatterns\Prototype;

class Prototype
{
    public function __clone()
    {
        echo 'Меня клонируют!' . PHP_EOL;
    }

    public function getObject(): void
    {
        echo 'Prototype Pattern' . PHP_EOL;
    }
}

function clientCode(): void
{
    $object_1 = new Prototype();
    $object_1->getObject();

    $object_2 = clone $object_1;
    $object_2->getObject();

    echo 'Deleting main object..' . PHP_EOL;
    unset($object_1);
    $object_2->getObject();
    echo 'Still works!' . PHP_EOL;
}

clientCode();
