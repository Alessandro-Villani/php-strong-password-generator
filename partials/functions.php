<?php
function random_password($length, $characters)
{
    if (!$length || $length < 8 || $length > 20) {
        return;
    }
    $generated_password = '';
    for ($i = 0; $i < $length; $i++) {
        $type_index = rand(0, count($characters) - 1);
        $char_index = rand(0, count($characters[$type_index]) - 1);
        $generated_password .= $characters[$type_index][$char_index];
    }
    return $generated_password;
};
