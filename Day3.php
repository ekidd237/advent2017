<?php
/**
 * Created by PhpStorm.
 * User: Eric Schmidt
 * Date: 12/2/2017
 * Time: 10:50 AM
 */
if (($handle = fopen("day3_input.txt", "r")) !== FALSE) {
    while (($line = fgetcsv($handle, 1000, "\t")) !== FALSE) {
        var_export($line);
       $checksums[] = max($line) - min($line);
    }
    fclose($handle);
    echo array_sum($checksums)."\n";
}