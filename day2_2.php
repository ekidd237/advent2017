<?php
/**
 * Created by PhpStorm.
 * User: Eric Schmidt
 * Date: 12/2/2017
 * Time: 10:50 AM
 */
if (($handle = fopen("day3_input.txt", "r")) !== FALSE) {
    while (($line = fgetcsv($handle, 1000, "\t")) !== FALSE) {
        $test_array[] = $line;
    }
    fclose($handle);
    //echo array_sum($checksums)."\n";

    //$test_array[] = array(5, 9, 2, 8);
    //$test_array[] = array(9, 4, 7, 3);
    //$test_array[] = array(3, 8, 6, 5);

    for ($k=0; $k<sizeof($test_array); $k++) {
        for ($i=0; $i<sizeof($test_array[$k]); $i++) {
           for($j=0; $j<sizeof($test_array[$k]); $j++) {
               //echo $test_array[$k][$i].PHP_EOL;
               //echo $test_array[$k][$j].PHP_EOL;
                if($test_array[$k][$i] % $test_array[$k][$j] === 0 &&
                    $test_array[$k][$i] / $test_array[$k][$j] > 1  ){
                    $row_checksum[] = $test_array[$k][$i] / $test_array[$k][$j];
                }
           }
        }
    }
    //var_export($row_checksum);
    echo array_sum($row_checksum)."\n";
}
