<?php

namespace DependencyInjectionForLearning;
use Auryn\Injector;

require '../../vendor/autoload.php';

interface Order
{
    public function makeOrder();
}

interface Notifications
{
    public function send($message);
}

interface LogMessages
{
    public function getLogMessage($text);
}

class OrderRepository implements Order
{
    private array $repositories = ['learning-lessons', 'auto-execution', 'job-tasks'];

    public function makeOrder()
    {
        // TODO: Implement makeOrder() method.
        sort($this->repositories, SORT_STRING);
        echo '-List of repositories-' . PHP_EOL;
        print implode(' | ', $this->repositories);
    }
}

class Logger implements LogMessages
{
    public function getLogMessage($text)
    {
        // TODO: Implement getLogMessage() method.
        echo 'staging.INFO: ' . $text;
    }
}

class SMSNotifier implements Notifications
{
    public function send($message)
    {
        // TODO: Implement send() method.
        echo ' ' . $message . PHP_EOL;
    }
}

class OrderProcessing
{
    private Logger $text;
    private OrderRepository $repositories;
    private SMSNotifier $SMSNotifier;

    public function __construct(Logger $text, OrderRepository $repositories, SMSNotifier $SMSNotifier)
    {
        $this->text = $text;
        $this->repositories = $repositories;
        $this->SMSNotifier = $SMSNotifier;
    }

    public function getNewOrder(): void
    {
        /* here will be some kind of logic */
        $this->text->getLogMessage('Table has been updated.');
        $this->SMSNotifier->send('The message was sent.' . PHP_EOL);
        $this->repositories->makeOrder();
    }
}

$injection = new Injector();
$injection->make(OrderProcessing::class)->getNewOrder();
