<?php

interface Adapter
{
    public function post($msg): string;
}

class Facebook
{
    public function postToWall($msg): string
    {
        return 'POSTED MESSAGE: ' . $msg;
    }
}

class FacebookAdapter implements Adapter
{
    private Facebook $facebook;

    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }

    public function post($msg): string
    {
        // TODO: Implement post() method.
        return $this->facebook->postToWall($msg);
    }
}

function getMessageFromUser(): string
{
    return "1 2 3";
}

$msg = getMessageFromUser();

$facebook = new FacebookAdapter(new Facebook());
echo $facebook->post($msg);