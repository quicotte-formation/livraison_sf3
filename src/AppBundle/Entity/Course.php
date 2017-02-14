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
    
    public function __toString() {
        
        return $this->adresseCollecte . " " . $this->adresseLivraison;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Course
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set utilClient
     *
     * @param \AppBundle\Entity\Utilisateur $utilClient
     *
     * @return Course
     */
    public function setUtilClient(\AppBundle\Entity\Utilisateur $utilClient = null)
    {
        $this->utilClient = $utilClient;

        return $this;
    }

    /**
     * Get utilClient
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getUtilClient()
    {
        return $this->utilClient;
    }

    /**
     * Set utilLivreur
     *
     * @param \AppBundle\Entity\Utilisateur $utilLivreur
     *
     * @return Course
     */
    public function setUtilLivreur(\AppBundle\Entity\Utilisateur $utilLivreur = null)
    {
        $this->utilLivreur = $utilLivreur;

        return $this;
    }

    /**
     * Get utilLivreur
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getUtilLivreur()
    {
        return $this->utilLivreur;
    }
}
