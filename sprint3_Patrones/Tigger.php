<?php 

class Tigger {

    private static $instance;
    private $counter;

    private function __construct() {
            echo ' <h1 style=color:orange> Building character... </h1>' . PHP_EOL;
    }

    public static function getInstance() {

        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function roar() {
            echo "<p>Grrr!</p>" . PHP_EOL;
            ++$this->counter;
    }

    public function getCounter() {
        return $this->counter;
    }

}

Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();
Tigger::getInstance()->roar();

echo '<h3> Tigger ha rugido = ' .Tigger::getInstance()->getCounter().PHP_EOL . ' veces </h3>';

?>