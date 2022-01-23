<?php

class Product implements JsonConvertible
{
    use PriceTrait;

    private int $id;
    private string $name;
    private string $description;
    private string $platform;
    private array $genres;
    private DateTime $releasedAt;
    private string $image;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $platform
     * @param array $genres
     * @param \DateTime $releasedAt
     * @param string $image
     * @param string $price
     */
    public function __construct(int $id, string $name, string $description, string $platform, array $genres, DateTime $releasedAt, string $image, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->platform = $platform;
        $this->genres = $genres;
        $this->releasedAt = $releasedAt;
        $this->image = $image;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     */
    public function setPlatform(string $platform): void
    {
        $this->platform = $platform;
    }

    /**
     * @return array
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param array $genres
     */
    public function setGenres(array $genres): void
    {
        $this->genres = $genres;
    }

    /**
     * @return \DateTime
     */
    public function getReleasedAt(): DateTime
    {
        return $this->releasedAt;
    }

    /**
     * @param \DateTime $releasedAt
     */
    public function setReleasedAt(DateTime $releasedAt): void
    {
        $this->releasedAt = $releasedAt;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function toJson(): string
    {
        return json_encode(
            [
                'id' => $this->getId(),
                'name' => $this->getName(),
                'description' => $this->getDescription(),
                'platform' => $this->getPlatform(),
                'genres' => $this->getGenres(),
                'releasedAt' => $this->getReleasedAt(),
                'image' => $this->getImage(),
                'price' => $this->getPrice()
            ]
        );
    }

    public static function fromJson(string $json)
    {
        $decodedJson = json_decode($json);

        return new Product(
            $decodedJson->id,
            $decodedJson->name,
            $decodedJson->description,
            $decodedJson->platform,
            $decodedJson->genres,
            new DateTime($decodedJson->releasedAt->date),
            $decodedJson->image,
            $decodedJson->price
        );
    }
}
