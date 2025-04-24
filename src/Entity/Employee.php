<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[Vich\Uploadable]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $first_name = null;

    #[ORM\Column(length: 15)]
    private ?string $last_name = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(type: Types::JSON, nullable: false)]
    private ?array $hobby = [];

    #[ORM\Column(type: Types::STRING, nullable: false)]
    private ?string $gender;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $about_me = null;

    #[ORM\Column(type:Types::FLOAT, nullable: false)]
    private ?float $salary;

    #[ORM\Column(type: Types::STRING, nullable: false)]
    private ?string $roles;

    #[ORM\Column(length:15, type: Types::STRING, nullable: false)]
    private ?string $city;
    
    #[ORM\Column(type: Types::STRING, nullable: true)]
    private ?string $profileImage;

    private ?File $profileImageFile = null;


    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }


    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        // dump('PreUpdate triggered');
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function touch(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): static
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): static
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getHobby(): array
    {
        return $this->hobby;
    }

    public function setHobby(array $hobby): static
    {
        $this->hobby = $hobby;

        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAboutMe(): ?string
    {
        return $this->about_me;
    }

    public function setAboutMe(?string $about_me): static
    {
        $this->about_me = $about_me;

        return $this;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(float $salary): static
    {
        $this->salary = $salary;

        return $this;
    }

    public function getRoles(): string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getProfileImage(): ?string
    {
        return $this->profileImage;
    }

    public function setProfileImage(string $profileImage): void
    {
        $this->profileImage = $profileImage;        
    }

    public function setProfileImageFile(?File $file): void
    {
        $this->profileImageFile = $file;
    }

    public function getProfileImageFile(): ?File
    {
        return $this->profileImageFile;
    }
}
