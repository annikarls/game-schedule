<?php
class Preferences {

    private $footer;

    public function __construct($footer) {
        $this->footer = $footer;
    }

    public function showFooter(){
        echo "Spelschema för Damallsvenskan 2019";
    }
}
?>