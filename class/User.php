<?php
class User {
    private $firstname;
    private $lastname;
    private $phone;
    private $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = htmlspecialchars($firstname);
        $this->lastname = htmlspecialchars($lastname);
        $this->phone = htmlspecialchars($phone);
        $this->address = htmlspecialchars($address);
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getFormattedData() {
        return "
        <p><strong>Hi, Nama saya {$this->getFullName()}</strong></p>
        <p>Nomor Telepon : {$this->getPhone()}</p>
        <p>Alamat : {$this->getAddress()}</p>
        ";
    }
}