<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseRepository")
 */
class Course
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="courseDemandees")
     * @ORM\JoinColumn(name="client_id")
     */
    private $utilClient;
    
    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="courseEffectuees")
     * @ORM\JoinColumn(name="livreur_id")
     */
    private $utilLivreur;
    
    /**
     * @ORM\Column(type="string")
     */
    private $adresseCollecte;
    
     /**
     * @ORM\Column(type="string")
     */
    private $adresseLivraison;

     /**
     * @ORM\Column(type="string")
     */
    private $etat;
    
    /**
     * @ORM\Column(type="float")
     */
    private $prix;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adresseCollecte
     *
     * @param string $adresseCollecte
     *
     * @return Course
     */
    public function setAdresseCollecte($adresseCollecte)
    {
        $this->adresseCollecte = $adresseCollecte;

        return $this;
    }

    /**
     * Get adresseCollecte
     *
     * @return string
     */
    public function getAdresseCollecte()
    {
        return $this->adresseCollecte;
    }

    /**
     * Set adresseLivraison
     *
     * @param string $adresseLivraison
     *
     * @return Course
     */
    public function setAdresseLivraison($adresseLivraison)
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    /**
     * Get adresseLivraison
     *
     * @return string
     */
    public function getAdresseLivraison()
    {
        return $this->adresseLivraison;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Course
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
