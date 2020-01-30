<?php


namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait EntityDateTrait
{

    /**
     * @datetime $createdDate
     *
     * @ORM\Column(name='created_at', type="datetime_immutable")
     */
    protected $createdDate;

    /**
     * @datetime $updatedDate
     * @ORM\Column(name='updated_at', type="datetime")
     */
    protected $updatedDate;

    public function getCreatedDate(): \DateTimeImmutable
    {
        return $this->createdDate;
    }

    public function setCreatedDate($createdDate): self
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
