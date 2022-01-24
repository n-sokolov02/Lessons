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

trait GetImport
{
    public function getImportName($importName): string
    {
        return $importName;
    }
}
//for testing commit #1
class Monthly
{
    use ImportExecution;
    use TestTrait;
    use GetImport;

    public function InfoAboutRows()
    {
        echo $this->getImportName('MONTHLY') . ': Update table ' . $this->getTable('ap_claims') . '. Affected Rows: ' . $this->getAffectedRows(45) . ' ' . $this->letsGo();
    }
}

$object = new Monthly();
$object->InfoAboutRows();
