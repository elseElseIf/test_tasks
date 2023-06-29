<?php
// 1 zadanie

class Pipeline {
    public function make(...$functions) {
        return function($arg) use ($functions) {
            foreach ($functions as $function) {
            $arg = $function($arg);
        }
        return $arg;
        };
    }
};


// $pipeline = new Pipeline();
//   $result = $pipeline->make(
//     function($var) { 
//       return $var * 3; 
//     },
//     function($var) { 
//       return $var + 1; 
//     },
//     function($var) { 
//       return $var / 2; 
//     }
//   );
//   echo $result(3);


// 2 zadanie

class TextInput {
    protected $value = '';

    public function add($text) {
        $this->value .= $text;
    }

    public function getValue() {
        return $this->value;
    }
}

class NumericInput extends TextInput {
    public function add($text) {
        if (is_numeric($text)) {
            $this->value .= $text;
        }
    }
}

?>