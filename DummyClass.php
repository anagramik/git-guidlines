<?php

class DummyClass {

    public function testA()
    {
        $b = $this->testB();
        $c = $this->testC();

        return $b + $c;
    }

    protected function testB()
    {
        // some crazy database calculation
        return 10;
    }


    protected function testC()
    {
        // some crazy database calculation
        return 10;
    }
}