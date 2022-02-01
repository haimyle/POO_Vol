<?php


class Bdd
{
    private $bdd;

    function __construct(){
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=hme_php_vol;charset=utf8', 'root', '');
        }
        catch (Exception $e){die('Erreur : ' . $e->getMessage());}
    }

    /**
     * @return PDO
     */
    public function getBdd()
    {
        return $this->bdd;
    }


}
