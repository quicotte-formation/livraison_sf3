<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtilisateurRepository")
 */
class Utilisateur implements \Symfony\Component\Security\Core\User\UserInterface
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
     * @ORM\Column(type="string")
     */
    private $email;
    
    /**
     * @ORM\Column(type="string")
     */
    private $login;
    
    /**
     * @ORM\Column(type="string")
     */
    private $mdp;

    /**
     * @ORM\Column(type="string")
     */
    private $role;
    
    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="utilClient")
     */
    private $courseDemandees;
    
    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="utilLivreur")
     */
    private $courseEffectuees;
    
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
     * Set email
     *
     * @param string $email
     *
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    public function eraseCredentials() {
        
    }

    public function getPassword(): string {
        
        return $this->mdp;
    }

    public function getRoles() {
        
        return array($this->role);
    }

    public function getSalt() {
        
    }

    public function getUsername(): string {
        
        return $this->login;
    }

    public function __toString() {
        return $this->login;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->courseDemandees = new \Doctrine\Common\Collections\ArrayCollection();
        $this->courseEffectuees = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add courseDemandee
     *
     * @param \AppBundle\Entity\Course $courseDemandee
     *
     * @return Utilisateur
     */
    public function addCourseDemandee(\AppBundle\Entity\Course $courseDemandee)
    {
        $this->courseDemandees[] = $courseDemandee;

        return $this;
    }

    /**
     * Remove courseDemandee
     *
     * @param \AppBundle\Entity\Course $courseDemandee
     */
    public function removeCourseDemandee(\AppBundle\Entity\Course $courseDemandee)
    {
        $this->courseDemandees->removeElement($courseDemandee);
    }

    /**
     * Get courseDemandees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourseDemandees()
    {
        return $this->courseDemandees;
    }

    /**
     * Add courseEffectuee
     *
     * @param \AppBundle\Entity\Course $courseEffectuee
     *
     * @return Utilisateur
     */
    public function addCourseEffectuee(\AppBundle\Entity\Course $courseEffectuee)
    {
        $this->courseEffectuees[] = $courseEffectuee;

        return $this;
    }

    /**
     * Remove courseEffectuee
     *
     * @param \AppBundle\Entity\Course $courseEffectuee
     */
    public function removeCourseEffectuee(\AppBundle\Entity\Course $courseEffectuee)
    {
        $this->courseEffectuees->removeElement($courseEffectuee);
    }

    /**
     * Get courseEffectuees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourseEffectuees()
    {
        return $this->courseEffectuees;
    }
}
