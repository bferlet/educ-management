<?php

namespace App\Entity;

use App\Entity\Traits\IdentifierTrait;
use App\Entity\Traits\IdentifierTraitTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Traits\TimestampableTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StudentRepository")
 */
class Student
{
    use TimestampableTrait;
    use IdentifierTrait;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $birthDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $genre;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2, nullable=true)
     */
    private $firstMark;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2, nullable=true)
     */
    private $secondMark;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Student", inversedBy="students")
     */
    private $classRoom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Student", mappedBy="classRoom")
     */
    private $students;

    public function __construct()
    {
        $this->students = new ArrayCollection();
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeImmutable
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeImmutable $birthDate): self
    {
        $this->birthDate = $birthDate;

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

    public function getFirstMark(): ?string
    {
        return $this->firstMark;
    }

    public function setFirstMark(?string $firstMark): self
    {
        $this->firstMark = $firstMark;

        return $this;
    }

    public function getSecondMark(): ?string
    {
        return $this->secondMark;
    }

    public function setSecondMark(?string $secondMark): self
    {
        $this->secondMark = $secondMark;

        return $this;
    }

    public function getClassRoom(): ?self
    {
        return $this->classRoom;
    }

    public function setClassRoom(?self $classRoom): self
    {
        $this->classRoom = $classRoom;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(self $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
            $student->setClassRoom($this);
        }

        return $this;
    }

    public function removeStudent(self $student): self
    {
        if ($this->students->contains($student)) {
            $this->students->removeElement($student);
            // set the owning side to null (unless already changed)
            if ($student->getClassRoom() === $this) {
                $student->setClassRoom(null);
            }
        }

        return $this;
    }
}
