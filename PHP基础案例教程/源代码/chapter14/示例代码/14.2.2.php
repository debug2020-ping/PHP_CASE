<?php
class Dog
{
    public function shout()
    {
        return $this;
    }
    public function run()
    {
        return $this;
    }
}
(new Dog())->shout()->run()->shout()->run();
