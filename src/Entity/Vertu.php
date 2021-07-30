<?php

namespace App\Entity;

use App\Repository\VertuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VertuRepository::class)
 */
class Vertu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity=Pierre::class, mappedBy="vertus")
     */
    private $pierres;

    public function __construct()
    {
        $this->pierres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Pierre[]
     */
    public function getPierres(): Collection
    {
        return $this->pierres;
    }

    public function addPierre(Pierre $pierre): self
    {
        if (!$this->pierres->contains($pierre)) {
            $this->pierres[] = $pierre;
            $pierre->addVertu($this);
        }

        return $this;
    }

    public function removePierre(Pierre $pierre): self
    {
        if ($this->pierres->removeElement($pierre)) {
            $pierre->removeVertu($this);
        }

        return $this;
    }
}
