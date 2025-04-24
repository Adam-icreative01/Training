<?php

namespace App\Entity;

use App\Enum\UserRole;
use App\Repository\UserManagementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;
use Symfony\Component\Form\Extension\Core\Type\EnumType;

#[ORM\Entity(repositoryClass: UserManagementRepository::class)]
#[HasLifecycleCallbacks]
class UserManagement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length:15)]
    private ?string $first_name = null;

    #[ORM\Column(length:15)]
    private ?string $last_name = null;

    #[ORM\Column(length:35)]
    private ?string $email = null;

    #[ORM\Column(type: TYPES::INTEGER)]
    private ?int $age = null;


    #[ORM\Column(type: TYPES::JSON)]
    private ?array $hobby = null;

    #[ORM\Column(length:8)]
    private ?string $gender = null;

    #[ORM\Column(length:20)]
    private ?string $role;

    #[ORM\Column(type: Types::BOOLEAN)]
    private ?bool $status = null;

    #[ORM\Column()]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column()]
    private ?\DateTimeImmutable $updated_at = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setFirstName(string $firstName)
    {
        $this->first_name = $firstName;
    }
    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setLastName(string $lastName)
    {
        $this->last_name = $lastName;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setAge(?int $age): void
    {
        $this->age = $age;
    }
    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setHobby(?array $hobby): void
    {
        $this->hobby = $hobby;
    }
    public function getHobby(): ?array
    {
        return $this->hobby;
    }

    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setRole(?string $role)
    {
        $this->role = $role;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setStatus(?bool $status): void
    {
        $this->status = $status;
        // return $this;
    }
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new \DateTimeImmutable();
        $this->updated_at = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updated_at = new \DateTimeImmutable();
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;        
    }
    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }
}
