<?php

class Helper
{

    //Add methods here
    public function passwordsMatch($pw1, $pw2)
    {
        # code...
        if ($pw1 === $pw2) return true;
        return false;
    }

    public function isValidLength($str, $min = 8, $max = 20)
    {
        # code...
        if (strlen($str) >= $min && strlen($str) <= $max) return true;
        return false;
    }

    public function isEmpty($postValues)
    {
        # code...
        foreach ($postValues as $value) {
            if (!$value) return true;
        }
        return false;
    }

    public function isSecure($pw)
    {
        # code...
        if (preg_match("~[a-z]+~", $pw) && preg_match("~[A-Z]+~", $pw) && preg_match("~[0-9]+~", $pw)) return true;
        return false;
    }

    public function keepValues($val, $type, $attr = '')
    {
        # code...
        switch ($type) {
            case 'textbox':
                echo "value = '$val'";
                break;
            case 'textarea':
                echo "value = '$val'";
                break;
            case 'select':
                if ($val == $attr)
                    echo 'selected';
                break;
            default:
                echo '';
        }
    }
}
