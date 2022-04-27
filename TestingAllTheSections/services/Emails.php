<?php

namespace services;
class Emails
{
    public static function send($contact)
    {
        return 'Sending an email to ' . $contact->getEmail();
    }
}
