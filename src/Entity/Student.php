<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;


/**
 * @ORM\Entity(repositoryClass="App\Repository\StudentRepository")
 */
class Student
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $uid;

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
     */
    private $firstMark;

    /**
     * @ORM\Column(type="integer")
     */
    private $secondMark;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedDate;

    /**
     * Student constructor.
     */

    public function __construct()
    {
        $this->uid = $this->generateUid();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function generateUid()
    {
        return Uuid::uuid4();
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

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getBirthday(): ?\DateTimeImmutable
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeImmutable $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getFirstMark(): ?int
    {
        return $this->firstMark;
    }

    public function setFirstMark(int $firstMark): self
    {
        $this->firstMark = $firstMark;

        return $this;
    }

    public function getSecondMark(): ?int
    {
        return $this->secondMark;
    }

    public function setSecondMark(int $secondMark): self
    {
        $this->secondMark = $secondMark;

        return $this;
    }

    public function getCreatedDate(): ?\DateTimeImmutable
    {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTimeImmutable $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getUpdatedDate(): ?\DateTimeInterface
    {
        return $this->updatedDate;
    }

    public function setUpdatedDate(\DateTimeInterface $updatedDate): self
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }
}
