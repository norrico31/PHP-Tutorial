<?php 
    class User {
        private $email;
        private $name;

        public function __construct($name, $email) {  
            $this->email = $email;
            $this->name = $name;
        }

        public function login() {
            echo $this->name . ' logged in';
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            if (is_string($name) && strlen($name) > 3) {
                $this->name = $name;
                return " name has been updated $name";
            } else {
                return 'not a valid name';
            }
        }
    }

    $userTwo = new User('levi', 'norricobiason31@gmail.com');

    // $userTwo->name = 'mikasa'; // OVERRIDE THE VALUE
    // echo $userTwo->name;

    echo $userTwo->getName();
    echo $userTwo->setName('mikasa');
    echo $userTwo->getName();
?>