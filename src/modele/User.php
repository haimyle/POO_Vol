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
            echo '<script>alert("Compte existant")</script>';
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
                echo '<script>alert("Votre compte est enregistré")</script>';
            } else {
                echo '<script>alert("Erreur")</script>';
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
            echo '<script>alert("Votre compte est à jour")</script>';
            header('Location: ../vue/index_user.php');
        } else {
            echo '<script>alert("Erreur")</script>';
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
            echo '<script>alert("Bon login")</script>';
            if ($res['role'] == "admin") {
                header('Location: ../vue/index_admin.php');
            } else {
                header('Location: ../vue/index_user.php');
            }

        } else {
            echo '<script>alert("Mauvais login")</script>';
            header('Location:../vue/form_user_connexion.php');
        }
    }

    public function deleteUser($bdd)
    {
        $req = $bdd->prepare("DELETE FROM user WHERE id_user=:id_user");
        $res = $req->execute(array(
            'id_user' => $this->id
        ));
        if ($res) {
            echo '<script>alert("Votre compte est supprimé")</script>';
        } else {
            echo '<script>alert("Erreur")</script>';
        }
    }
}