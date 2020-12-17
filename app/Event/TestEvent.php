<?php
namespace App\Event;

class TestEvent {
    public $value = 10;

    public function getValue(): int
    {
        return $this->value;
    }
}

