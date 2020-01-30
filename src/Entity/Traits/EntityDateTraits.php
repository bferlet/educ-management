<?php
/**
 * Created by PhpStorm.
 * User: sben
 * Date: 30/01/2020
 * Time: 12:50
 */

namespace App\Entity\Traits;


trait EntityDateTraits
{
    /**
     * @ORM\Column(type="datetime_immutable")
     */
    protected $createdDate;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updatedDate;

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
