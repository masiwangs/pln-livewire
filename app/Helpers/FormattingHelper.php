<?php

namespace App\Helpers;

class FormattingHelper
{
    public $comma_digit = 2;

    public function set_comma($digit) {
        return $this->comma_digit = $digit;
    }

    public function humanizeNumber($number) {
        $thousands = 0;
        $divider = 1;

        $number_tobe_divide = $number;
        while($number_tobe_divide > 1000) {
            $thousands += 1;
            $number_tobe_divide = $number_tobe_divide/1000;
        };

        switch ($thousands) {
            case 1:
                $letter = 'rb';
                break;
            
            case 2:
                $letter = 'jt';
                break;

            case 3:
                $letter = 'ml';
                break;

            case 4:
                $letter = 'tr';
                break;
            default:
                $letter = '';
                break;
        }

        if($thousands > 0) {
            $divider = 1000*$thousands;
        }

        return number_format($number/$divider, $this->comma_digit, ',', '.').$letter;
    }

    public function humanizePercent($number, $diff_comma = false, $comma = 0) {
        $comma_digit = $this->comma_digit;
        if($diff_comma) {
            $comma_digit = $comma;
        }

        return number_format($number, $comma_digit, ',', '.').'%';
    }
}