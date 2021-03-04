<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestEntretien
 *
 * @ORM\Table(name="test_entretien")
 * @ORM\Entity(repositoryClass="App\Repository\TestEntretienRepository")
 */
class TestEntretien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="text", length=65535, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_libelle", type="text", length=65535, nullable=true)
     */
    private $shortLibelle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="market_cap", type="bigint", nullable=true)
     */
    private $marketCap;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var float|null
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var string|null
     *
     * @ORM\Column(name="date_lancement", type="text", length=65535, nullable=true)
     */
    private $dateLancement;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="multiple_of_two", type="boolean", nullable=true)
     */
    private $multipleOfTwo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="day", type="string", length=255, nullable=true)
     */
    private $day;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_by_volume_desc", type="integer", nullable=true)
     */
    private $orderByVolumeDesc;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $low;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $high;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getShortLibelle(): ?string
    {
        return $this->shortLibelle;
    }

    public function setShortLibelle(?string $shortLibelle): self
    {
        $this->shortLibelle = $shortLibelle;

        return $this;
    }

    public function getMarketCap(): ?string
    {
        return $this->marketCap;
    }

    public function setMarketCap(?string $marketCap): self
    {
        $this->marketCap = $marketCap;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(?float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getDateLancement(): ?string
    {
        return $this->dateLancement;
    }

    public function setDateLancement(?string $dateLancement): self
    {
        $this->dateLancement = $dateLancement;

        return $this;
    }

    public function getMultipleOfTwo(): ?bool
    {
        return $this->multipleOfTwo;
    }

    public function setMultipleOfTwo(?bool $multipleOfTwo): self
    {
        $this->multipleOfTwo = $multipleOfTwo;

        return $this;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(?string $day): self
    {
        $this->day = $day;

        return $this;
    }

    public function getOrderByVolumeDesc(): ?int
    {
        return $this->orderByVolumeDesc;
    }

    public function setOrderByVolumeDesc(?int $orderByVolumeDesc): self
    {
        $this->orderByVolumeDesc = $orderByVolumeDesc;

        return $this;
    }

    public function getLow(): ?string
    {
        return $this->low;
    }

    public function setLow(?string $low): self
    {
        $this->low = $low;

        return $this;
    }

    public function getHigh(): ?string
    {
        return $this->high;
    }

    public function setHigh(?string $high): self
    {
        $this->high = $high;

        return $this;
    }


}
