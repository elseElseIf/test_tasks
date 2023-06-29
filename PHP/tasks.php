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

// 3 zadanie

class RankingTable {
    private $players = array();
    private $record = array();

    public function __construct($players) {
        $this->players = $players;
    }

    public function recordResult($player, $result) {
        $this->record[$player] = $result;
    }
}


// $table = new RankingTable(array('Jan', 'Maks', 'Monika'));
// $table->recordResult('Jan', 2);
// $table->recordResult('Maks', 3);
// $table->recordResult('Monika', 5);
// echo $table->playerRank(1);

// 4 zadanie


?>