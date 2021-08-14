<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $remise;

    /**
     * @ORM\ManyToMany(targetEntity=Pierre::class, inversedBy="articles")
     */
    private $pierres;

    /**
     * @ORM\ManyToMany(targetEntity=Photo::class, inversedBy="articles")
     */
    private $photos;

    /**
     * @ORM\ManyToMany(targetEntity=Order::class, mappedBy="articles")
     */
    private $orders;

    /**
     * @ORM\ManyToOne(targetEntity=Photo::class, inversedBy="mainArticles")
     */
    private $mainPicture;

    public function __construct()
    {
        $this->pierres = new ArrayCollection();
        $this->photos = new ArrayCollection();
        $this->orders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix ;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getRemise(): ?int
    {
        return $this->remise;
    }

    public function setRemise(int $remise): self
    {
        $this->remise = $remise;

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
        }

        return $this;
    }

    public function removePierre(Pierre $pierre): self
    {
        $this->pierres->removeElement($pierre);

        return $this;
    }

    /**
     * @return Collection|Photo[]
     */
    public function getPhotos(): Collection
    {
        return $this->photos;
    }

    public function addPhoto(Photo $photo): self
    {
        if (!$this->photos->contains($photo)) {
            $this->photos[] = $photo;
        }

        return $this;
    }

    public function removePhoto(Photo $photo): self
    {
        $this->photos->removeElement($photo);

        return $this;
    }

    /**
     * @return Collection|Order[]
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders[] = $order;
            $order->addArticle($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->removeElement($order)) {
            $order->removeArticle($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->titre;
    }

    public function getMainPicture(): ?Photo
    {
        return $this->mainPicture;
    }

    public function setMainPicture(?Photo $mainPicture): self
    {
        $this->mainPicture = $mainPicture;

        return $this;
    }

}
