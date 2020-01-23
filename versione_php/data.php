<?php

    $getJSONapi = file_get_contents("https://flynn.boolean.careers/exercises/api/array/music");

    $getArrayApi = json_decode($getJSONapi);

    foreach ($getArrayApi as $response => $card) {
        // echo "<pre>";
        // var_dump($card);
        // echo "</pre>";

        foreach ($response as $key) {
            echo "<pre>";
            var_dump($key);
            echo "</pre>";
        }

    }
 ?>
