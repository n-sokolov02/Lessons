<?php

interface FacebookInterface
{
    public function postToWall($msg): void;
}

class Facebook implements FacebookInterface
{
    public function postToWall($msg): void
    {
        // TODO: Implement postToWall() method.
        echo 'POSTED MESSAGE || ' . $msg . PHP_EOL;
    }
}

class FacebookAdapter
{
    private Facebook $facebook;

    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function postMessage($msg): void
    {
        $this->facebook->postToWall($msg);
    }
}

function getSomeMessageFromUser(): string
{
    return 'DANIIL BOYKO: BLA BLA BLA';
}

$message = getSomeMessageFromUser();

$facebookAdapter = new FacebookAdapter(new Facebook());
$facebookAdapter->postMessage($message);