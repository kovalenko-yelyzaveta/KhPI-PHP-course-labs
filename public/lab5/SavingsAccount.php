<?php

class SavingsAccount extends BankAccount {
    private static $interestRate = 5;

    public static function getInterestRate() {
        return self::$interestRate;
    }

    public static function setInterestRate($rate) {
        self::$interestRate = $rate;
    }

    public function applyInterest() {
        $interest = ($this->balance * self::$interestRate) / 100;
        $this->balance += $interest;
    }
}
?>
