<?php

/*
 * Прототип — порождающий шаблон проектирования. Он используется для клонирования существующего объекта, вместо его инстанцирования с помощью new.
 * Клонирование может использоваться для случаев, когда нужно создать несколько объектов, инстанцирование которых затратная операция.
 * В этом случае вначале делается один объект, происходит его начальная «тяжелая инициализация», а после объект клонируется для использования под разные задачи.
*/

namespace testingPatterns\Prototype;

use Exception;

class Prototype
{
    /**
     * @return mixed
     * @throws Exception
     */
    public function __clone()
    {
        throw new Exception('Object was cloned');
    }

    public function get(): void
    {
        echo __CLASS__ . PHP_EOL;
    }
}

$object = new Prototype();
$object->get();

$prototype = clone $object;
$prototype->get();

unset($object);
$object->get();
