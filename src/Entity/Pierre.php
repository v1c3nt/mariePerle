<?php

namespace App\Entity;

use App\Repository\PierreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $diametre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $couleur;

    /**
     * @ORM\ManyToMany(targetEntity=Vertu::class, inversedBy="pierres")
     */
    private $vertus;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chakra;

    /**
     * @ORM\ManyToMany(targetEntity=Article::class, mappedBy="pierres")
     */
    private $articles;

    public function __construct()
    {
        $this->vertus = new ArrayCollection();
        $this->articles = new ArrayCollection();
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

    public function getChakra(): ?string
    {
        return $this->chakra;
    }

    public function setChakra(?string $chakra): self
    {
        $this->chakra = $chakra;

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
}
