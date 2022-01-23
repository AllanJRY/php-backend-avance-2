<?php

class Promotion implements JsonConvertible
{
    use PriceTrait;

    /**
     * @param float $price
     */
    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function toJson(): string
    {
        return json_encode([
            'price' => $this->getPrice(),
        ]);
    }

    public static function fromJson(string $json)
    {
        $decodedJson = json_decode($json);

        return new Promotion(
            $decodedJson->price
        );
    }
}
