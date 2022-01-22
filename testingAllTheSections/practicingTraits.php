<?php

trait ImportExecution
{
    public function getAffectedRows($affectedRows): string
    {
        return $affectedRows;
    }
}

trait TestTrait
{
    public function getTable($tableName): string
    {
        return $tableName;
    }
}

class Monthly
{
    use ImportExecution;
    use TestTrait;

    public function InfoAboutRows()
    {
        echo 'Update table ' . $this->getTable('ap_claims') . '. Affected Rows: ' . $this->getAffectedRows(45);
    }
}

$object = new Monthly();
$object->InfoAboutRows();
