<?php

//$data = [];

//try {
//    $f = fopen('data.csv', 'r');
//
//    while ($row = fgetcsv($f)) {
//        $data[] = $row;
//    }
//
//    fclose ($f);
//} catch (Exception $ex) {
//    echo $ex->getMessage();
//} finally {
//    if ($f) {
//        fclose($f);
//    }
//}

function divide ($x, $y) {
    try {
        return $x / $y;
    } catch (Exception $e) {
        return null;
    } finally {
        return null;
    }
}

$result = divide(5,10);
var_dump($result);
