<?php

namespace TestingPatterns\GeneratingPatterns\Command;

interface Command
{
    public function execute(): void;
}

class SimpleCommand implements Command
{
    private string $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }

    public function execute(): void
    {
        // TODO: Implement execute() method.
        echo __CLASS__ . ': ' . $this->input . PHP_EOL;
    }
}

class Receiver
{
    public function doSomethingImportant(string $someInput): void
    {
        echo __CLASS__ . ': ' . $someInput . PHP_EOL;
    }

    public function doAnotherSomethingImportant(string $someAnotherInput): void
    {
        echo __CLASS__ . ': ' . $someAnotherInput . PHP_EOL;
    }
}

class ComplexCommand implements Command
{
    private Receiver $receiver;
    private string $someInput;
    private string $someAnotherInput;

    public function __construct(Receiver $receiver, string $someInput, string $someAnotherInput)
    {
        $this->receiver = $receiver;
        $this->someInput = $someInput;
        $this->someAnotherInput = $someAnotherInput;
    }

    public function execute(): void
    {
        // TODO: Implement execute() method.
        $this->receiver->doSomethingImportant($this->someInput);
        $this->receiver->doAnotherSomethingImportant($this->someAnotherInput);
    }
}

class Invoker
{
    private Command $firstCommand;
    private Command $secondCommand;

    public function setFirstCommandToExecute(Command $command): void
    {
        $this->firstCommand = $command;
    }

    public function setSecondCommandToExecute(Command $command): void
    {
        $this->secondCommand = $command;
    }

    public function runCommandsOnQueue(): void
    {
        $this->firstCommand->execute();
        $this->secondCommand->execute();
    }
}

$invoker = new Invoker();
$invoker->setFirstCommandToExecute(new SimpleCommand('SOME_SIMPLE_TEXT'));

$receiver = new Receiver();
$invoker->setSecondCommandToExecute(new ComplexCommand($receiver, 'SEND_STATS', 'SEND_EMAIL'));

$invoker->runCommandsOnQueue();