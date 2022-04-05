<?php

class AuditSingleton
{
    public static array $instances = [];

    /**
     * @return AuditSingleton
     */
    public static function getAuditInstance(): AuditSingleton
    {
        $cls = static::class;

        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    private function __construct()
    {
    }

    /**
     * @return mixed
     * @throws Exception
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
        throw new Exception('Cannot serialize singleton');
    }
}

function auditClientCode()
{
    $object_1 = AuditSingleton::getAuditInstance();
    $object_2 = AuditSingleton::getAuditInstance();

    if ($object_1 === $object_2) {
        echo 'Singleton works, both variables contain the same instance' . PHP_EOL;
    } else {
        echo 'Singleton failed, variables contain different instances' . PHP_EOL;
    }
}

auditClientCode();
