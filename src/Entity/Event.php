<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
    private $title;

    /**
     * @ORM\OneToMany(targetEntity=CroatelReference::class, mappedBy="event")
     */
    private $croatelReferences;

    public function __construct()
    {
        $this->croatelReferences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|CroatelReference[]
     */
    public function getCroatelReferences(): Collection
    {
        return $this->croatelReferences;
    }

    public function addCroatelReference(CroatelReference $croatelReference): self
    {
        if (!$this->croatelReferences->contains($croatelReference)) {
            $this->croatelReferences[] = $croatelReference;
            $croatelReference->setEvent($this);
        }

        return $this;
    }

    public function removeCroatelReference(CroatelReference $croatelReference): self
    {
        if ($this->croatelReferences->removeElement($croatelReference)) {
            // set the owning side to null (unless already changed)
            if ($croatelReference->getEvent() === $this) {
                $croatelReference->setEvent(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }
}
