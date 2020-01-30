<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $uuid;

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
    private $birthdate;

    /**
     * @ORM\Column(type="smallint")
     */
    private $genre;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $firstmark;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $secondmark;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $createdDate;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updatedDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\classroom", inversedBy="students")
     */
    private $fk_classroom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

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

    public function getBirthdate(): ?\DateTimeImmutable
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeImmutable $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getGenre(): ?int
    {
        return $this->genre;
    }

    public function setGenre(int $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getFirstmark(): ?int
    {
        return $this->firstmark;
    }

    public function setFirstmark(?int $firstmark): self
    {
        $this->firstmark = $firstmark;

        return $this;
    }

    public function getSecondmark(): ?int
    {
        return $this->secondmark;
    }

    public function setSecondmark(?int $secondmark): self
    {
        $this->secondmark = $secondmark;

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

    public function getUpdatedDate(): ?\DateTimeImmutable
    {
        return $this->updatedDate;
    }

    public function setUpdatedDate(?\DateTimeImmutable $updatedDate): self
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    public function getFkClassroom(): ?classroom
    {
        return $this->fk_classroom;
    }

    public function setFkClassroom(?classroom $fk_classroom): self
    {
        $this->fk_classroom = $fk_classroom;

        return $this;
    }
}
