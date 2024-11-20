<?php
namespace App\ValueObjects;

class Price {
    public float $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function getAmount(): float {
        return $this->amount;
    }
}