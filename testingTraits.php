<?php

//conflict resolution
trait FileLogger
{
    public function log($msg)
    {
        echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . PHP_EOL;
    }
}

trait DatabaseLogger
{
    public function log($msg)
    {
        echo 'Database Logger ' . date('Y-m-d h:i:s') . ':' . $msg . PHP_EOL;
    }
}

class Logger
{
    use FileLogger, DatabaseLogger{
        DatabaseLogger::log insteadof FileLogger;
    }
}

$logger = new Logger();
$logger->log('this is a test message #1');
$logger->log('this is a test message #2');


class testAsTraits
{
    use FileLogger, DatabaseLogger{
        DatabaseLogger::log as logToDatabase;
        FileLogger::log insteadof DatabaseLogger;
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
    public function createExec()
    {
        echo 'Compile code... done' . PHP_EOL;
    }
}

trait Assembler
{
    public function createExec()
    {
        echo 'Create the object code files... done.' . PHP_EOL;
    }
}

trait Linker
{
    public function createExec()
    {
        echo 'Create the executable file...done' . PHP_EOL;
    }
}

class IDE
{
    use Preprocessor, Compiler, Assembler, Linker {
        Compiler::createExec insteadof Assembler, Linker;
        Assembler::createExec insteadof Compiler, Linker;
        Linker::createExec insteadof Compiler, Assembler;
    }
}

$ide = new IDE();

