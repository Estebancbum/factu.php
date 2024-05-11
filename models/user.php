<?php

class User {

    private $name;
    private $lastname;
    private $numdoc;
    private $maindoc;
    private $cel;
    private $email;

    public function __construct($name1, $lastname1, $numdoc1, $maindoc1, $cel1, $email1) {
        $this->name = $name1;
        $this->lastname = $lastname1;
        $this->numdoc = $numdoc1;
        $this->maindoc = $maindoc1;
        $this->cel = $cel1;
        $this->email = $email1;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getNumdoc() {
        return $this->numdoc;
    }

    public function getMaindoc() {
        return $this->maindoc;
    }

    public function getCel() {
        return $this->cel;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setName($name1) {
        $this->name = $name1;
    }

    public function setLastname($lastname1) {
        $this->lastname = $lastname1;
    }

    public function setNumdoc($numdoc1) {
        $this->numdoc = $numdoc1;
    }

    public function setMaindoc($maindoc1) {
        $this->maindoc = $maindoc1;
    }

    public function setCel($cel1) {
        $this->cel = $cel1;
    }

    public function setEmail($email1) {
        $this->email = $email1;
    }
}