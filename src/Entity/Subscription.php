<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubscriptionRepository")
 */
class Subscription
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $cpu;

    /**
     * @ORM\Column(type="integer")
     */
    private $ram;

    /**
     * @ORM\Column(type="integer")
     */
    private $disk_space;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $remise;

    /**
     * @ORM\Column(type="date")
     */
    private $date_sub;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_fin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="subscriptions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Services", inversedBy="subscriptions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_services;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sub_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ip_adresse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $high_availability;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $options;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $IP;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $backup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCpu(): ?string
    {
        return $this->cpu;
    }

    public function setCpu(string $cpu): self
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getRam(): ?int
    {
        return $this->ram;
    }

    public function setRam(int $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getDiskSpace(): ?int
    {
        return $this->disk_space;
    }

    public function setDiskSpace(int $disk_space): self
    {
        $this->disk_space = $disk_space;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(?float $remise): self
    {
        $this->remise = $remise;

        return $this;
    }

    public function getDateSub(): ?\DateTimeInterface
    {
        return $this->date_sub;
    }

    public function setDateSub(\DateTimeInterface $date_sub): self
    {
        $this->date_sub = $date_sub;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }
 
    public function setDateFin(?\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdServices(): ?Services
    {
        return $this->id_services;
    }

    public function setIdServices(?Services $id_services): self
    {
        $this->id_services = $id_services;

        return $this;
    }

    public function getSubName(): ?string
    {
        return $this->sub_name;
    }

    public function setSubName(string $sub_name): self
    {
        $this->sub_name = $sub_name;

        return $this;
    }

    public function getIpAdresse(): ?string
    {
        return $this->ip_adresse;
    }

    public function setIpAdresse(string $ip_adresse): self
    {
        $this->ip_adresse = $ip_adresse;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getHighAvailability(): ?string
    {
        return $this->high_availability;
    }

    public function setHighAvailability(?string $high_availability): self
    {
        $this->high_availability = $high_availability;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function getIP(): ?string
    {
        return $this->IP;
    }

    public function setIP(?string $IP): self
    {
        $this->IP = $IP;

        return $this;
    }

    public function getBackup(): ?string
    {
        return $this->backup;
    }

    public function setBackup(?string $backup): self
    {
        $this->backup = $backup;

        return $this;
    }
}
