<?php
//
//$data = [];
//
//$f = fopen ('data1.csv', 'r');
//
//if (!$f) {
//    echo 'The file is not accessible.';
//    exit;
//}
//
//do {
//    $row = fgetcsv($f);
//    if ($row === null) {
//        echo 'The stream is invalid.';
//        exit;
//    }
//
//    if ($row === false) {
//        echo 'Other errors occurred.';
//        exit;
//    }
//
//    $data[] = $row;
//} while ($row);
//
//if (!$f) {
//    fclose($f);
//}
//
//print_r($data);

$data = [];

try {
    $f = fopen('data.csv', 'r');

    do {
        $row = fgetcsv($f);
        $data[] = $row;
    } while ($row);

    fclose ($f);
} catch (Exception $ex) {
    echo $ex->getFile();
}
