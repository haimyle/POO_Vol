<?php
session_start();
class User
{
    private $email;
    private $password;
    private $nom;
    private $prenom;
    private $id;
    private $dateNaissance;

    public function __construct(array $donnees){
        $this-> hydrate($donnees);
    }

    public function hydrate(array $donnees){
        foreach ($donnees as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
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

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function inscriptionUser($bdd){
        $req = $bdd->prepare("INSERT INTO user(nom, prenom, email, password, dateNaissance) 
        VALUES (:nom, :prenom, :email, :password, :dateNaissance");
        $res = $req->execute(array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'password' => $this->password,
            'dateNaissance' => $this->dateNaissance
        ));
        if ($res){
            echo '<script>alert("Votre compte est enregistré")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }

    }
    public function updateUser($bdd){
        $req = $bdd->prepare("UPDATE user SET email =:email, password =:password WHERE id_user=:id_user");
        $res = $req->execute(array(
            'email' => $this->email,
            'password' => $this->password,
            'id_user' => $this->id
        ));
        if ($res){
            echo '<script>alert("Votre compte est à jour")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }
    }

    public function connexionUser($bdd){
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
    }

    public function deleteUser($bdd){
        $req = $bdd->prepare("DELETE FROM user WHERE id_user=:id_user");
        $res = $req->execute(array(
            'id_user' => $this->id
        ));
        if ($res){
            echo '<script>alert("VOtre compte est supprimé")</script>';
        }
        else{
            echo '<script>alert("Erreur")</script>';
        }
    }
}