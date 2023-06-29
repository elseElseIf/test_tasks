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
?>