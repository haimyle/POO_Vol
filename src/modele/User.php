<?php
session_start();
class User
{
    private $email;
    private $password;

    public function __construct(array $donnees){
        $this ->hydrate($donnees);
    }

    {

    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function connexion($bdd){
        $req = $bdd->prepare("SELECT * FROM user WHERE email=:email, password=:password");
        $req->execute(array(
            'email'=>$this->email,
            'password'=>$this->password
        ));
        $res=$req->fetch();
        if($res){
            $_SESSION['email'] = $res['email'];
            $_SESSION['password'] = $res['password'];
            header('Location: espace_membre.php');
        }
        else{
            echo '<script>alert("Mauvais login")</script>';
            header('Location: form.html');
        }


    };
    }



}