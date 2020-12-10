<?php

function photoChecking(string $photo){
    $types = array(
        'image/png',
        'image/jpg',
        'image/jpeg'
    );
    if (isset($_FILES[$photo])) {
        if (in_array($_FILES[$photo]['type'], $types) !== false && $_FILES[$photo]['size'] < 3 * 1024 * 1024) {
            move_uploaded_file($_FILES[$photo]['tmp_name'], "assets/images/" . $_FILES[$photo]['name']);
        }
    }
}