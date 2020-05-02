<?php
for ($i = 1; $i < 3; ++$i) {
    $arr[] = new class($i) {
        public $index = 0;
        public function __construct($index)
        {
            $this->index = $index;
        }
    };
}
print_r($arr);
