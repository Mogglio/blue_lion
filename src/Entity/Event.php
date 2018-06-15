<?php
namespace App\Entity;

use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 */
class Event {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $date;

    /**
     * @ORM\Column(type="time")
     * @Assert\NotBlank()
     */
    private $start;

    /**
     * @ORM\Column(type="time")
     * @Assert\NotBlank()
     */
    private $end;

    public function getId(): int {
        return $this->id;
    }

    public function getName (): ?string {
        return $this->name;
    }

    public function getDescription (): ?string {
        return $this->description ?? '';
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getStart (): \DateTimeInterface {
        return new \DateTimeImmutable($this->start);
    }

    public function getEnd (): \DateTimeInterface {
        return new \DateTimeImmutable($this->end);
    }

    public function setName (string $name) {
        $this->name = $name;
    }

    public function setDescription (string $description) {
        $this->description = $description;
    }

    public function setDate($date)
    {
        var_dump($date);
        $this->date = $date;
    }

    public function setStart ($start) {
        $this->start = $start;
    }

    public function setEnd ($end) {
        $this->end = $end;
    }

}
