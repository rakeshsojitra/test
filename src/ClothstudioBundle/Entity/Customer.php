<?php

namespace ClothstudioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @UniqueEntity(fields="cEmail", message="Email already taken")
 * @ORM\Entity(repositoryClass="ClothstudioBundle\Repository\CustomerRepository")
 */
class Customer implements UserInterface
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
     * @var string
     *
     * @ORM\Column(name="cFacebookID", type="string", length=40, nullable=true)
     */
    private $cFacebookID;

    /**
     * @var string
     *
     * @ORM\Column(name="cTwitterID", type="string", length=40, nullable=true)
     */
    private $cTwitterID;

    /**
     * @var string
     *
     * @ORM\Column(name="cFirstName", type="string", length=255)
     */
    private $cFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="cLastName", type="string", length=255)
     */
    private $cLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="cPhone", type="string", length=255, nullable=true)
     */
    private $cPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="cZip", type="string", length=10, nullable=true)
     */
    private $cZip;

    /**
     * @var string
     *
     * @ORM\Column(name="cEmail", type="string", length=255)
     */
    private $cEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="cPassword", type="string", length=40)
     */
    private $cPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="cGender", type="string", length=255)
     */
    private $cGender;

    /**
     * @var string
     *
     * @ORM\Column(name="cHeight", type="string", length=255, nullable=true)
     */
    private $cHeight;

    /**
     * @var string
     *
     * @ORM\Column(name="cWeight", type="string", length=255, nullable=true)
     */
    private $cWeight;

    /**
     * @var string
     *
     * @ORM\Column(name="cTopSize", type="string", length=255, nullable=true)
     */
    private $cTopSize;

    /**
     * @var string
     *
     * @ORM\Column(name="cDressSize", type="string", length=255, nullable=true)
     */
    private $cDressSize;

    /**
     * @var string
     *
     * @ORM\Column(name="cBraSize", type="string", length=255, nullable=true)
     */
    private $cBraSize;

    /**
     * @var string
     *
     * @ORM\Column(name="cPantSize", type="string", length=255, nullable=true)
     */
    private $cPantSize;

    /**
     * @var string
     *
     * @ORM\Column(name="cWaistSize", type="string", length=255, nullable=true)
     */
    private $cWaistSize;

    /**
     * @var string
     *
     * @ORM\Column(name="cShoesSize", type="string", length=255, nullable=true)
     */
    private $cShoesSize;

    /**
     * @var string
     *
     * @ORM\Column(name="cBodyShape", type="string", length=255, nullable=true)
     */
    private $cBodyShape;

    /**
     * @var string
     *
     * @ORM\Column(name="cLikeStyles", type="string", length=500, nullable=true)
     */
    private $cLikeStyles;

    /**
     * @var string
     *
     * @ORM\Column(name="cLikeColorPalettes", type="string", length=500, nullable=true)
     */
    private $cLikeColorPalettes;

    /**
     * @var string
     *
     * @ORM\Column(name="cIdeallySpentForCategories", type="string", length=500, nullable=true)
     */
    private $cIdeallySpentForCategories;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cCreatedDate", type="datetime", nullable=true)
     */
    private $cCreatedDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cModifiedDate", type="datetime", nullable=true)
     */
    private $cModifiedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cStatus", type="string", length=255)
     */
    private $cStatus;
    /**
     * @var string
     *
     * @ORM\Column(name="ProfilePicture", type="string", length=255, nullable=true)
     */
    private $ProfilePicture;

   

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
     * Set cFacebookID
     *
     * @param string $cFacebookID
     *
     * @return Customer
     */
    public function setCFacebookID($cFacebookID)
    {
        $this->cFacebookID = $cFacebookID;

        return $this;
    }

    /**
     * Get cFacebookID
     *
     * @return string
     */
    public function getCFacebookID()
    {
        return $this->cFacebookID;
    }

    /**
     * Set cTwitterID
     *
     * @param string $cTwitterID
     *
     * @return Customer
     */
    public function setCTwitterID($cTwitterID)
    {
        $this->cTwitterID = $cTwitterID;

        return $this;
    }

    /**
     * Get cTwitterID
     *
     * @return string
     */
    public function getCTwitterID()
    {
        return $this->cTwitterID;
    }

    /**
     * Set cFirstName
     *
     * @param string $cFirstName
     *
     * @return Customer
     */
    public function setCFirstName($cFirstName)
    {
        $this->cFirstName = $cFirstName;

        return $this;
    }

    /**
     * Get cFirstName
     *
     * @return string
     */
    public function getCFirstName()
    {
        return $this->cFirstName;
    }

    /**
     * Set cLastName
     *
     * @param string $cLastName
     *
     * @return Customer
     */
    public function setCLastName($cLastName)
    {
        $this->cLastName = $cLastName;

        return $this;
    }

    /**
     * Get cLastName
     *
     * @return string
     */
    public function getCLastName()
    {
        return $this->cLastName;
    }

    /**
     * Set cPhone
     *
     * @param string $cPhone
     *
     * @return Customer
     */
    public function setCPhone($cPhone)
    {
        $this->cPhone = $cPhone;

        return $this;
    }

    /**
     * Get cPhone
     *
     * @return string
     */
    public function getCPhone()
    {
        return $this->cPhone;
    }

    /**
     * Set cZip
     *
     * @param string $cZip
     *
     * @return Customer
     */
    public function setCZip($cZip)
    {
        $this->cZip = $cZip;

        return $this;
    }

    /**
     * Get cZip
     *
     * @return string
     */
    public function getCZip()
    {
        return $this->cZip;
    }

    /**
     * Set cEmail
     *
     * @param string $cEmail
     *
     * @return Customer
     */
    public function setCEmail($cEmail)
    {
        $this->cEmail = $cEmail;

        return $this;
    }

    /**
     * Get cEmail
     *
     * @return string
     */
    public function getCEmail()
    {
        return $this->cEmail;
    }

    /**
     * Set cPassword
     *
     * @param string $cPassword
     *
     * @return Customer
     */
    public function setCPassword($cPassword)
    {
        $this->cPassword = $cPassword;

        return $this;
    }

    /**
     * Get cPassword
     *
     * @return string
     */
    public function getCPassword()
    {
        return $this->cPassword;
    }

    /**
     * Set cGender
     *
     * @param string $cGender
     *
     * @return Customer
     */
    public function setCGender($cGender)
    {
        $this->cGender = $cGender;

        return $this;
    }

    /**
     * Get cGender
     *
     * @return string
     */
    public function getCGender()
    {
        return $this->cGender;
    }

    /**
     * Set cHeight
     *
     * @param string $cHeight
     *
     * @return Customer
     */
    public function setCHeight($cHeight)
    {
        $this->cHeight = $cHeight;

        return $this;
    }

    /**
     * Get cHeight
     *
     * @return string
     */
    public function getCHeight()
    {
        return $this->cHeight;
    }

    /**
     * Set cWeight
     *
     * @param string $cWeight
     *
     * @return Customer
     */
    public function setCWeight($cWeight)
    {
        $this->cWeight = $cWeight;

        return $this;
    }

    /**
     * Get cWeight
     *
     * @return string
     */
    public function getCWeight()
    {
        return $this->cWeight;
    }

    /**
     * Set cTopSize
     *
     * @param string $cTopSize
     *
     * @return Customer
     */
    public function setCTopSize($cTopSize)
    {
        $this->cTopSize = $cTopSize;

        return $this;
    }

    /**
     * Get cTopSize
     *
     * @return string
     */
    public function getCTopSize()
    {
        return $this->cTopSize;
    }

    /**
     * Set cDressSize
     *
     * @param string $cDressSize
     *
     * @return Customer
     */
    public function setCDressSize($cDressSize)
    {
        $this->cDressSize = $cDressSize;

        return $this;
    }

    /**
     * Get cDressSize
     *
     * @return string
     */
    public function getCDressSize()
    {
        return $this->cDressSize;
    }

    /**
     * Set cBraSize
     *
     * @param string $cBraSize
     *
     * @return Customer
     */
    public function setCBraSize($cBraSize)
    {
        $this->cBraSize = $cBraSize;

        return $this;
    }

    /**
     * Get cBraSize
     *
     * @return string
     */
    public function getCBraSize()
    {
        return $this->cBraSize;
    }

    /**
     * Set cPantSize
     *
     * @param string $cPantSize
     *
     * @return Customer
     */
    public function setCPantSize($cPantSize)
    {
        $this->cPantSize = $cPantSize;

        return $this;
    }

    /**
     * Get cPantSize
     *
     * @return string
     */
    public function getCPantSize()
    {
        return $this->cPantSize;
    }

    /**
     * Set cWaistSize
     *
     * @param string $cWaistSize
     *
     * @return Customer
     */
    public function setCWaistSize($cWaistSize)
    {
        $this->cWaistSize = $cWaistSize;

        return $this;
    }

    /**
     * Get cWaistSize
     *
     * @return string
     */
    public function getCWaistSize()
    {
        return $this->cWaistSize;
    }

    /**
     * Set cShoesSize
     *
     * @param string $cShoesSize
     *
     * @return Customer
     */
    public function setCShoesSize($cShoesSize)
    {
        $this->cShoesSize = $cShoesSize;

        return $this;
    }

    /**
     * Get cShoesSize
     *
     * @return string
     */
    public function getCShoesSize()
    {
        return $this->cShoesSize;
    }

    /**
     * Set cBodyShape
     *
     * @param string $cBodyShape
     *
     * @return Customer
     */
    public function setCBodyShape($cBodyShape)
    {
        $this->cBodyShape = $cBodyShape;

        return $this;
    }

    /**
     * Get cBodyShape
     *
     * @return string
     */
    public function getCBodyShape()
    {
        return $this->cBodyShape;
    }

    /**
     * Set cLikeStyles
     *
     * @param string $cLikeStyles
     *
     * @return Customer
     */
    public function setCLikeStyles($cLikeStyles)
    {
        $this->cLikeStyles = $cLikeStyles;

        return $this;
    }

    /**
     * Get cLikeStyles
     *
     * @return string
     */
    public function getCLikeStyles()
    {
        return $this->cLikeStyles;
    }

    /**
     * Set cLikeColorPalettes
     *
     * @param string $cLikeColorPalettes
     *
     * @return Customer
     */
    public function setCLikeColorPalettes($cLikeColorPalettes)
    {
        $this->cLikeColorPalettes = $cLikeColorPalettes;

        return $this;
    }

    /**
     * Get cLikeColorPalettes
     *
     * @return string
     */
    public function getCLikeColorPalettes()
    {
        return $this->cLikeColorPalettes;
    }

    /**
     * Set cIdeallySpentForCategories
     *
     * @param string $cIdeallySpentForCategories
     *
     * @return Customer
     */
    public function setCIdeallySpentForCategories($cIdeallySpentForCategories)
    {
        $this->cIdeallySpentForCategories = $cIdeallySpentForCategories;

        return $this;
    }

    /**
     * Get cIdeallySpentForCategories
     *
     * @return string
     */
    public function getCIdeallySpentForCategories()
    {
        return $this->cIdeallySpentForCategories;
    }

    /**
     * Set cCreatedDate
     *
     * @param \DateTime $cCreatedDate
     *
     * @return Customer
     */
    public function setCCreatedDate($cCreatedDate)
    {
        $this->cCreatedDate = $cCreatedDate;

        return $this;
    }

    /**
     * Get cCreatedDate
     *
     * @return \DateTime
     */
    public function getCCreatedDate()
    {
        return $this->cCreatedDate;
    }

    /**
     * Set cModifiedDate
     *
     * @param \DateTime $cModifiedDate
     *
     * @return Customer
     */
    public function setCModifiedDate($cModifiedDate)
    {
        $this->cModifiedDate = $cModifiedDate;

        return $this;
    }

    /**
     * Get cModifiedDate
     *
     * @return \DateTime
     */
    public function getCModifiedDate()
    {
        return $this->cModifiedDate;
    }

    /**
     * Set cStatus
     *
     * @param string $cStatus
     *
     * @return Customer
     */
    public function setCStatus($cStatus)
    {
        $this->cStatus = $cStatus;

        return $this;
    }

    /**
     * Get cStatus
     *
     * @return string
     */
    public function getCStatus()
    {
        return $this->cStatus;
    }
    
    
    /**
     * Get ProfilePicture
     *
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->ProfilePicture;
    }
    /**
     * Set ProfilePicture
     *
     * @return string
     */
    public function setProfilePicture($ProfilePicture)
    {
        $this->ProfilePicture = $ProfilePicture;

        return $this;
    }
    
    public function getRoles()
    {
        // this must return an array or roles, can be RoleInterface
        return array('ROLE_ADMIN');
    }
   
    public function getSalt()
    {
        return '';
    }
    public function getPassword() {
         return $this->cPassword;
    }
    public function getUsername() {
        return $this->cEmail;
    }
    public function eraseCredentials()
    {
       
    }
    public function equals(UserInterface $user)
    {
        return $this->getId() === $user->getId();
    }
}

