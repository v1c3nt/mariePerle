<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PierreRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=PierreRepository::class)
 */
class Pierre
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
     * @ORM\Column(type="string", length=255, nullable=true)     
     * @Groups("get:article")
     */
    private $forme;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups("get:article")
     */
    private $diametre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("get:article")
     */
    private $couleur;

    /**
     * @ORM\ManyToMany(targetEntity=Vertu::class, inversedBy="pierres")
     * @Groups("get:article")
     */
    private $vertus;

    /**
     * @ORM\ManyToMany(targetEntity=Article::class, mappedBy="pierres")
     */
    private $articles;

    /**
     * @ORM\ManyToMany(targetEntity=Chakras::class, inversedBy="pierres")
     * @Groups("get:article")
     */
    private $chakras;

    public function __construct()
    {
        $this->vertus = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->chakras = new ArrayCollection();
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

    public function getForme(): ?string
    {
        return $this->forme;
    }

    public function setForme(string $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    public function getDiametre(): ?int
    {
        return $this->diametre;
    }

    public function setDiametre(?int $diametre): self
    {
        $this->diametre = $diametre;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(?string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * @return Collection|Vertu[]
     */
    public function getVertus(): Collection
    {
        return $this->vertus;
    }

    public function addVertu(Vertu $vertu): self
    {
        if (!$this->vertus->contains($vertu)) {
            $this->vertus[] = $vertu;
        }

        return $this;
    }

    public function removeVertu(Vertu $vertu): self
    {
        $this->vertus->removeElement($vertu);

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->addPierre($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            $article->removePierre($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom .'-'. $this->forme;
    }

    /**
     * @return Collection|Chakras[]
     */
    public function getChakras(): Collection
    {
        return $this->chakras;
    }

    public function addChakra(Chakras $chakra): self
    {
        if (!$this->chakras->contains($chakra)) {
            $this->chakras[] = $chakra;
        }

        return $this;
    }

    public function removeChakra(Chakras $chakra): self
    {
        $this->chakras->removeElement($chakra);

        return $this;
    }
}
