<?php
/**
 * Created by PhpStorm.
 * User: Mbape
 * Date: 09/02/2018
 * Time: 16:38
 */

class Utilisateur
{

    private $idutilisateur;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $admin;

    function __construct($id, $lastname, $firstname, $email, $password)
    {
        $this->idutilisateur;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }

    /**
     * @param mixed $idutilisateur
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}