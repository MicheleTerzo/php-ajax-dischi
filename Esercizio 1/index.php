<?php

include __DIR__ . '/../database/db.php';

foreach($database['response'] as $data){
     echo $data['title'] . '<br>';
     echo $data['author'] . '<br>'; 
     echo $data['year'] . '<br>' ;
     echo $data['genre'] . '<br>' ;
 }