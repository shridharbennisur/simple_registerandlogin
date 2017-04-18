<?php 
     namespace project\bean;
     
  class Bean {
          public  $name = "";
          public $gender = "";
          public $city = "";
          public $email = "";
          public $pass = "";
         public function __construct($name, $gender, $city, $email, $pass) {
             $this -> name = $name;
	     $this -> gender = $gender;
	     $this -> city = $city;
             $this -> email = $email;
	     $this -> pass = $pass;
         }
        public function setName($name) {
             $this -> name = $name;
        }
        public function setGender($gender) {
             $this -> gender = $gender;
        }
        public function setCity($city) {
             $this -> city = $city;
        }
        public function setEmail($email) {
              $this -> email = $email;
        }
        public function setPass($pass) {
              $this -> pass = $pass;
         }
        public function getName() {
             return $this->name;
        }
	public function getGender() {
             return $this->gender;
        }
	public function getCity() {
             return $this->city;
        }
	public function getEmail() {
             return $this->email;
        }
	public function getPass() {
             return $this->pass;
        }
}

?>

