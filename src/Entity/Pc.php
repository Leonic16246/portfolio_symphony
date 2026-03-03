<?php

namespace App\Entity;

use App\Repository\PcRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: PcRepository::class)]
#[ORM\Table(name: 'pc')]
class Pc
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(name: 'pc_id', type: Types::BIGINT)]
    private ?string $pcId = null;

    #[ORM\Column(name: 'user_id', type: 'uuid', nullable: true)]
    private ?Uuid $userId = null;

    #[ORM\Column(name: 'name', type: Types::TEXT, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(name: 'cpu', type: Types::TEXT, nullable: true)]
    private ?string $cpu = null;

    #[ORM\Column(name: 'gpu', type: Types::TEXT, nullable: true)]
    private ?string $gpu = null;

    #[ORM\Column(name: 'note', type: Types::TEXT, nullable: true)]
    private ?string $note = null;

    public function getPcId(): ?string
    {
        return $this->pcId;
    }

    public function getUserId(): ?Uuid
    {
        return $this->userId;
    }

    public function setUserId(?Uuid $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCpu(): ?string
    {
        return $this->cpu;
    }

    public function setCpu(?string $cpu): static
    {
        $this->cpu = $cpu;

        return $this;
    }

    public function getGpu(): ?string
    {
        return $this->gpu;
    }

    public function setGpu(?string $gpu): static
    {
        $this->gpu = $gpu;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): static
    {
        $this->note = $note;

        return $this;
    }
}