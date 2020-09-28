<?php
class Menu {
    private $rank;
    private $name;
    private $image;
    private $sentence;

    public function __construct($rank, $name, $image, $sentence) {
        $this->rank = $rank;
        $this->name = $name;
        $this->image = $image;
        $this->sentence = $sentence;
    }

     public function hello() {
        echo '第'.$this->rank.'位'.$this->name.'！';
    }
        
    

    public function getRank() {
        return $this->rank;
    }
    public function getName() {
        return $this->name;
    }
    public function getImage() {
        return $this->image;
    }
    public function getSentence() {
        return $this->sentence;
    }
}
?>
