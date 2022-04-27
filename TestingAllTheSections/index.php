<?php

use models\Contact;
use services\Emails;

require 'functions.php';

$contact = new Contact('john.doe@sxope.com');
echo Emails::send($contact);
