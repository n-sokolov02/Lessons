<?php

require 'functions.php';

$contact = new Contact('john.doe@sxope.com');
echo Emails::send($contact);
