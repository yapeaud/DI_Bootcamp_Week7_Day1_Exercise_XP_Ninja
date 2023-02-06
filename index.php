<?php
class User{

    public $userFirstName;

    public function hello(){
        echo "hello, " .  $this -> userFirstName;
        return $this;
    }

    public function register(){
        echo " >> registered";
        return $this;
    }

        public function mail()
    {
        echo " >> email sent";
    }
}
$user1 = new User();
$user1 -> userFirstName = "Jane";

$user1 -> hello() -> register() -> mail();
/*
    Notez que chaque méthode à laquelle nous voulons enchaîner doit renvoyer le mot-clé $this afin de ne pas casser la chaîne. 
    Ainsi, les méthodes hello() et register() doivent renvoyer le mot-clé $this , mais il n'est pas nécessaire de renvoyer $this 
    à partir de la méthode mail() puisqu'elle termine la chaîne.
    
*/