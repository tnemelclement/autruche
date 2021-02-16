<?php

class Enclos {

    private $_nourriture;
    private $_eau;
    private $_porte;
    private $_date;

    public function __construct($nourriture, $eau, $porte, $date) {
        $this->$_nourriture = $nourriture;
        $this->$_eau = $eau;
        $this->$_porte = $porte;
        $this->$_date = $date;
    }


    function getStatutEnclos() {
        return {
            $_nourriture,
            $_eau,
        }
    }
}
