<?php

//conflict resolution
trait TestingFileLogger
{
    public function log($msg)
    {
        echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . PHP_EOL;
    }
}

trait TestingDatabaseLogger
{
    public function log($msg)
    {
        echo 'Database Logger ' . date('Y-m-d h:i:s') . ':' . $msg . PHP_EOL;
    }
}

class TestingLogger
{
    use TestingFileLogger, TestingDatabaseLogger {
        TestingDatabaseLogger::log insteadof TestingFileLogger;
    }
}

$logger = new TestingLogger();
$logger->log('this is a test message #1');
$logger->log('this is a test message #2');


class testAsTraits
{
    use TestingFileLogger, TestingDatabaseLogger{
        TestingDatabaseLogger::log as logToDatabase;
        TestingFileLogger::log insteadof TestingDatabaseLogger;
    }
}

$testAs = new testAsTraits();
$testAs->log('test message1');
$testAs->logToDatabase('test message2');

//multiple traits
trait Preprocessor
{
    public function preprocess()
    {
        echo 'Preprocess...done' . PHP_EOL;
    }
}

trait Compiler
{
    public function compiler()
    {
        echo 'Compile code... done' . PHP_EOL;
    }
}

trait Assembler
{
    public function assembler()
    {
        echo 'Create the object code files... done.' . PHP_EOL;
    }
}

trait Linker
{
    public function link()
    {
        echo 'Create the executable file...done' . PHP_EOL;
    }
}

class IDE
{
    use Preprocessor, Compiler, Assembler, Linker;

    public function run()
    {
        $this->preprocess();
        $this->compiler();
        $this->assembler();
        $this->link();
    }
}

$ide = new IDE();
$ide->run();

