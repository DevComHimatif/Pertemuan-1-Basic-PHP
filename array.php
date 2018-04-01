<?php
    $names = [];
    // $names = array();
    
    $names[] = "Fikri Muhammad Iqbal";
    $names[] = "Agung Teja Pratama";

    $names2 = ["Arie Brian", "Dwiki Nurkurniawan"];
    // $names2 = array("Arie Brian", "Dwiki Nurkurniawan");
    $names2[] = "Fatan Aufa Ahdiy";

    $students = [];
    $students["140810150070"] = [
        "name" => "M Agung Aditya",
        "occupation" => "Students",
    ];

    echo "<pre>";
    print_r($names);
    print_r($names2);
    print_r($students);
    echo "</pre>";

    // try :
    // sort($array)
    // count($array)
