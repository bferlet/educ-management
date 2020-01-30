<?php

namespace App\Entity;

<<<<<<< HEAD
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use App\Entity\Traits\EntityIdTrait;

/**
=======
use \Exception;
use App\Entity\Traits\EntityIdTrait;
use App\Entity\Traits\EntityTimeTrait;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

/**
 * @author  Gaëtan Rolé-Dubruille <gaetan.role-dubruille@sensiolabs.com>
>>>>>>> origin/master
 * @ORM\Entity(repositoryClass="App\Repository\ClassroomRepository")
 */
class Classroom
{
    use EntityIdTrait;
<<<<<<< HEAD

    /**
     * @ORM\Column(type="string", length=255)
=======
    use EntityTimeTrait;

    /**
     * @ORM\Column(type="string", length=64)
>>>>>>> origin/master
     */
    private $name;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="string", length=255)
     */
    private $grade;


    /**
     * Classroom constructor.
     */

    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid): self
    {
        $this->uid = $uid;
=======
     * @ORM\Column(type="smallint")
     */
    private $grade = 0;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Student", mappedBy="classroom")
     */
    private $students;

    /** @throws Exception */
    public function __construct()
    {
        $this->uuid = Uuid::uuid4();
        $this->setCreatedAt(new DateTimeImmutable());
        $this->students = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->grade . ' : ' . $this->name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
>>>>>>> origin/master

        return $this;
    }

<<<<<<< HEAD
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
=======
    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): self
    {
        $this->grade = $grade;
>>>>>>> origin/master

        return $this;
    }

<<<<<<< HEAD
    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;
=======
    /**
     * @return Collection|Student[]
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(Student $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
            $student->setClassroom($this);
        }
>>>>>>> origin/master

        return $this;
    }

<<<<<<< HEAD
=======
    public function removeStudent(Student $student): self
    {
        if ($this->students->contains($student)) {
            $this->students->removeElement($student);
            // set the owning side to null (unless already changed)
            if ($student->getClassroom() === $this) {
                $student->setClassroom(null);
            }
        }

        return $this;
    }
>>>>>>> origin/master
}
