<?php

namespace App\Entity\Traits;


Trait IdentifiantTrait
{

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $uuid;

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

}
