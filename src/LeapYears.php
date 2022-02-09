<?php

    namespace App;

use phpDocumentor\Reflection\Types\Boolean;

class LeapYears {

        public function checkYear(int $year) {
            if ($year%400 == 0) {
                return true;
            }
            if (($year%4 == 0) and ($year%100 != 0)) {
                return true;
            }
            return false;
        }

    }

?>