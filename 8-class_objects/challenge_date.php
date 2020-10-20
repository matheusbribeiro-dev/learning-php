<div class="title">Desafio data</div>

<?php
    class Date {
        public $day = 1;
        public $month = 1;
        public $year = 1970;

        public function printDate() {
            return "Data: {$this->day}/{$this->month}/{$this->year}";
        }
    }

    $date = new Date;
    echo $date->printDate();