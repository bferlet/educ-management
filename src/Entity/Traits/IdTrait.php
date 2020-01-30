<?php
/**
 * Created by PhpStorm.
 * User: training
 * Date: 1/30/20
 * Time: 12:38 PM
 */

namespace App\Entity\Traits;

use Ramsey\Uuid\UuidInterface;

trait IdTrait
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $uuid;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getUuid() : UuidInterface
    {
        return $this->uuid;
    }


    public function setUuid($uuid): self
    {
        $this->uuid = $uuid;
        return $this;
    }

}