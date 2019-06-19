<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AstronautRepository")
 */
class Astronaut
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $hobby;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $planet;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $motto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getHobby(): ?string
    {
        return $this->hobby;
    }

    public function setHobby(?string $hobby): self
    {
        $this->hobby = $hobby;

        return $this;
    }

    public function getPlanet(): ?string
    {
        return $this->planet;
    }

    public function setPlanet(string $planet): self
    {
        $this->planet = $planet;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getMotto(): ?string
    {
        return $this->motto;
    }

    public function setMotto(?string $motto): self
    {
        $this->motto = $motto;

        return $this;
    }
}
