<?php 
    class User {
        public $email;
        public $name;

        public function __construct($name, $email) {
            // $this->email = 'geraldbiasonjob31@gmail.com';
            // $this->name = 'levi';

            $this->email = $email;
            $this->name = $name;
        }

        public function login() {
            echo $this->name . ' logged in';
        }
    }

    // $userOne = new User(); // INSTANTIATING A CLASS

    // // TO INVOKE THE METHOD
    // $userOne->login();

    // echo $userOne->email . '<br />';
    // echo $userOne->name;

    $userTwo = new User('levi', 'norricobiason31@gmail.com');
    // echo $userTwo->name . '<br/ >';
    // echo $userTwo->email;
    echo $userTwo->login();
?>