<?php

class DummyClass {

    private $data;

    public function getData()
    {
        return $this->data;
    }

    public function testA()
    {
        // db aggregation
        return 100;
    }

    public function toArray()
    {
        return [
            'data' => $this->getData()
        ];
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
