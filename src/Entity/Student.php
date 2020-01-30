<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use App\Entity\Traits\EntityIdTrait;


/**
=======
use App\Entity\Traits\EntityIdTrait;
use App\Entity\Traits\EntityTimeTrait;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Exception;
use Ramsey\Uuid\Uuid;

/**
 * @author  Gaëtan Rolé-Dubruille <gaetan.role-dubruille@sensiolabs.com>
>>>>>>> origin/master
 * @ORM\Entity(repositoryClass="App\Repository\StudentRepository")
 */
class Student
{
    use EntityIdTrait;
<<<<<<< HEAD

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $birthday;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $genre;

    /**
     * @ORM\Column(type="integer")
=======
    use EntityTimeTrait;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $lastName;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private $birthDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $gender;

    /**
     * @ORM\Column(type="smallint", nullable=true)
>>>>>>> origin/master
     */
    private $firstMark;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="integer")
     */
    private $secondMark;


    /**
     * Student constructor.
     */

    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
=======
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $secondMark;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Classroom", inversedBy="students")
     */
    private $classroom;

    /** @throws Exception */
    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
        $this->setCreatedAt(new DateTimeImmutable());
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
>>>>>>> origin/master

        return $this;
    }

<<<<<<< HEAD
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
=======
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
>>>>>>> origin/master

        return $this;
    }

<<<<<<< HEAD
    public function getBirthday(): ?\DateTimeImmutable
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeImmutable $birthday): self
    {
        $this->birthday = $birthday;
=======
    public function getBirthDate(): ?\DateTimeImmutable
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeImmutable $birthDate): self
    {
        $this->birthDate = $birthDate;
>>>>>>> origin/master

        return $this;
    }

<<<<<<< HEAD
    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;
=======
    public function getGender(): ?bool
    {
        return $this->gender;
    }

    public function setGender(bool $gender): self
    {
        $this->gender = $gender;
>>>>>>> origin/master

        return $this;
    }

    public function getFirstMark(): ?int
    {
        return $this->firstMark;
    }

<<<<<<< HEAD
    public function setFirstMark(int $firstMark): self
=======
    public function setFirstMark(?int $firstMark): self
>>>>>>> origin/master
    {
        $this->firstMark = $firstMark;

        return $this;
    }

    public function getSecondMark(): ?int
    {
        return $this->secondMark;
    }

<<<<<<< HEAD
    public function setSecondMark(int $secondMark): self
=======
    public function setSecondMark(?int $secondMark): self
>>>>>>> origin/master
    {
        $this->secondMark = $secondMark;

        return $this;
    }

<<<<<<< HEAD

=======
    public function getClassroom(): ?Classroom
    {
        return $this->classroom;
    }

    public function setClassroom(?Classroom $classroom): self
    {
        $this->classroom = $classroom;

        return $this;
    }
>>>>>>> origin/master
}
