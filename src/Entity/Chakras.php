<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ChakrasRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ChakrasRepository::class)
 */
class Chakras
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("get:article")
     */
    private $nom;

    /**
     * @ORM\ManyToMany(targetEntity=Pierre::class, mappedBy="chakras")
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
            $pierre->addChakra($this);
        }

        return $this;
    }

    public function removePierre(Pierre $pierre): self
    {
        if ($this->pierres->removeElement($pierre)) {
            $pierre->removeChakra($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }
}
