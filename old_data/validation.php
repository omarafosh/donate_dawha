<?php
class Validator
{
    public static function required($value)
    {
        return !empty($value);
    }
    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    public static function min($value, $min_length)
    {
        return !(strlen($value) < $min_length);
    }
    public static function confirm($value, $confirm)
    {
        return $value == $confirm;
    }
}
