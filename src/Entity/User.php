<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 06/11/17
 * Time: 15:57
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * @var id
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var nom
     * @ORM\Column(type="string",lenght=50)
     */
    private $nom;

    /**
     * @var prenom
     * @ORM\Column(type="string",lenght=50)
     */
    private $prenom;

    /**
     * @var email
     * @ORM\Column(type="string",lenght=50)
     */
    private $email;

    /**
     * @var github
     * @ORM\Column(type="string",lenght=50)
     */
    private $github;

    /**
     * @var discord
     * @ORM\Column(type="string",lenght=50)
     */
    private $discord;

    /**
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return discord
     */
    public function getDiscord()
    {
        return $this->discord;
    }

    /**
     * @param discord $discord
     */
    public function setDiscord($discord)
    {
        $this->discord = $discord;
    }

    /**
     * User constructor.
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $gihub
     */
    public function __construct($nom, $prenom, $email, $gihub, $discord)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->gihub = $gihub;
        $this->discord = $discord;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @param mixed $gihub
     */
    public function setGithub($gihub)
    {
        $this->gihub = $github;
    }



}