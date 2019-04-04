<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reservaciones
 *
 * @author cetecom
 */
class reservaciones {
    //put your code here
    
    private $name;
    private $email;
    private $sourceregion;
    private $englishlanguage;
    private $date_check_in;
    private $date_check_out;
    
    function __construct($name, $email, $sourceregion, $englishlanguage, $date_check_in, $date_check_out) {
        $this->name = $name;
        $this->email = $email;
        $this->sourceregion = $sourceregion;
        $this->englishlanguage = $englishlanguage;
        $this->date_check_in = $date_check_in;
        $this->date_check_out = $date_check_out;
    }

    
    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getSourceregion() {
        return $this->sourceregion;
    }

    function getEnglishlanguage() {
        return $this->englishlanguage;
    }

    function getDate_check_in() {
        return $this->date_check_in;
    }

    function getDate_check_out() {
        return $this->date_check_out;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSourceregion($sourceregion) {
        $this->sourceregion = $sourceregion;
    }

    function setEnglishlanguage($englishlanguage) {
        $this->englishlanguage = $englishlanguage;
    }

    function setDate_check_in($date_check_in) {
        $this->date_check_in = $date_check_in;
    }

    function setDate_check_out($date_check_out) {
        $this->date_check_out = $date_check_out;
    }


}
