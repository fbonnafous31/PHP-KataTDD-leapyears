<?php

use App\LeapYears;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class LeapYearsTest extends TestCase {

        protected function setUp(): void {
            $this->year = new LeapYears();
        }
        
        // All years divisible by 400 ARE leap years (so, for example, 2000 was indeed a leap year),
        public function testReturnTrueIfYearIs2000() {
            assertEquals(true, $this->year->checkYear(2000));
        }

        public function testReturnTrueIfYearIs1600() {
            assertEquals(true, $this->year->checkYear(1600));
        }

        // All years divisible by 100 but not by 400 are NOT leap years (so, for example, 1700, 1800, and 1900 were NOT leap years, NOR will 2100 be a leap year),
        public function testReturnTrueIfYearIs1800() {
            assertEquals(false, $this->year->checkYear(1800));
        }

        public function testReturnTrueIfYearIs1900() {
            assertEquals(false, $this->year->checkYear(1900));
        }

        public function testReturnTrueIfYearIs2100() {
            assertEquals(false, $this->year->checkYear(2100));
        }

        // All years divisible by 4 but not by 100 ARE leap years (e.g., 2008, 2012, 2016),
        public function testReturnTrueIfYearIs2008() {
            assertEquals(true, $this->year->checkYear(2008));
        }

        public function testReturnTrueIfYearIs2012() {
            assertEquals(true, $this->year->checkYear(2012));
        }

        public function testReturnTrueIfYearIs2016() {
            assertEquals(true, $this->year->checkYear(2016));
        }

        // All years not divisible by 4 are NOT leap years (e.g. 2017, 2018, 2019).
        public function testReturnTrueIfYearIs2017() {
            assertEquals(false, $this->year->checkYear(2017));
        }

        public function testReturnTrueIfYearIs2018() {
            assertEquals(false, $this->year->checkYear(2018));
        }

        public function testReturnTrueIfYearIs2019() {
            assertEquals(false, $this->year->checkYear(2019));
        } 

    }

?>