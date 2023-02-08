<?php
function generate_random_numbers($quantity, $max, $repeat)
{
    $random_numbers = [];

    if ($repeat === 'yes') {
        for ($i = 0; $i < $quantity; $i++) {
            $random_numbers[] = rand(0, $max);
        }
    } else {
        if ($quantity > $max) $quantity = $max + 1;
        do {
            $number = rand(0, $max);
            if (!in_array($number, $random_numbers)) $random_numbers[] = $number;
        } while (count($random_numbers) < $quantity);
    };
    return $random_numbers;
}

function generate_random_password($length, $characters, $repeat)
{
    if (!$length || $length < 8 || $length > 20) {
        return;
    }
    $generated_password = '';
    $random_numbers = generate_random_numbers($length, count($characters) - 1, $repeat);
    for ($i = 0; $i < count($random_numbers); $i++) {
        $generated_password .= $characters[$random_numbers[$i]];
    }
    return $generated_password;
};

function get_characters_array($type1, $type2, $type3, $default)
{
    if (!$type1 && !$type2 && !$type3) {
        return $default;
    } else {
        return array_merge($type1, $type2, $type3);
    }
}
