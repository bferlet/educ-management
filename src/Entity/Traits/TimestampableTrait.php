<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait TimestampableTrait
{
    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $CreatedDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedDate;

    public function getCreatedDate(): ?\DateTimeImmutable
    {
        return $this->CreatedDate;
    }

    public function setCreatedDate(\DateTimeImmutable $CreatedDate): self
    {
        $this->CreatedDate = $CreatedDate;

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