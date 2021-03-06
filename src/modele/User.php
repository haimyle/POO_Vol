<?php
session_start();

class User
{
    private $email;
    private $password;
    private $nom;
    private $prenom;
    private $id;
    private $role;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function inscriptionUser($bdd)
    {
        $req = $bdd->prepare('SELECT * FROM user WHERE email = :email');
        $req->execute(array(
            'email' => $_POST['email']
        ));
        $res = $req->fetch();
        if ($res) {
            echo "<script>alert('Compte existant');
                window.location.href='../vue/form_user_inscription.php';</script>";
        } else {
            $req = $bdd->prepare("INSERT INTO user(nom, prenom, email, password) 
        VALUES (:nom, :prenom, :email, :password)");
            $res = $req->execute(array(
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'email' => $this->email,
                'password' => $this->password
            ));
            if ($res) {
                echo "<script>alert('Votre compte est enregistr??');
                window.location.href='../vue/form_user_connexion.php';</script>";
            } else {
                echo "<script>alert('Erreur');
                window.location.href='../vue/form_user_inscription.php';</script>";
            }

        }
    }

    public function updateUser($bdd)
    {
        $req = $bdd->prepare("UPDATE user SET nom =:nom, prenom =:prenom,email =:email, password =:password WHERE id_user=:id_user");
        $res = $req->execute(array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'password' => $this->password,
            'id_user' => $this->id
        ));
        var_dump($res);
        if ($res) {
            echo "<script>alert('Votre compte est ?? jour!');
                window.location.href='../vue/index_user.php';</script>";
        } else {
            echo "<script>alert('Erreur');
                window.location.href='../vue/form_user_update.php';</script>";
        }
    }

    public function connexionUser($bdd)
    {
        $req = $bdd->prepare("SELECT * FROM user WHERE email=:email AND password=:password");
        $req->execute(array(
            'email' => $this->email,
            'password' => $this->password
        ));
        $res = $req->fetch();
        var_dump($res);
        if ($res) {
            $_SESSION['email'] = $res['email'];
            $_SESSION['password'] = $res['password'];
            $_SESSION['prenom'] = $res['prenom'];
            $_SESSION['nom'] = $res['nom'];
            $_SESSION['id_user'] = $res['id_user'];
            if ($res['role'] == "admin") {
                header('Location: ../vue/index_admin.php');
            } else {
                header('Location: ../vue/index_user.php');
            }

        } else {
            echo "<script>alert('Mauvais email ou mot de passe. Ressayez!');
                window.location.href='../vue/form_user_connexion.php';</script>";
        }
    }

    public function deleteUser($bdd)
    {
        $req = $bdd->prepare("DELETE FROM user WHERE id_user=:id_user");
        $is_success = $req->execute(array(
            'id_user' => $this->id
        ));
        //var_dump($is_success);
        if ($is_success) {
            session_destroy();
            echo "<script>alert('Votre compte est supprim??!');
                window.location.href='../vue/index_delete.php';</script>";
        } else {
            echo "<script>alert('Erreur');
                window.location.href='../vue/form_user_update.php';</script>";
        }
    }
}