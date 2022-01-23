<?php

class Cart implements JsonConvertible
{
    /**
     * @var Product[] $products
     */
    private array $products;

    /**
     * @var Promotion[] $promotions
     */
    private array $promotions;

    /**
     * @param \Product[] $products
     * @param \Promotion[] $promotions
     */
    public function __construct(array $products = [], array $promotions = [])
    {
        $this->products = $products;
        $this->promotions = $promotions;
    }

    /**
     * @return \Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param \Product[] $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }

    /**
     * @return \Promotion[]
     */
    public function getPromotions(): array
    {
        return $this->promotions;
    }

    /**
     * @param \Promotion[] $promotions
     */
    public function setPromotions(array $promotions): void
    {
        $this->promotions = $promotions;
    }

    public function toJson(): string
    {
        $productsJson = [];
        foreach($this->products as $product) {
            $productsJson[] = $product->toJson();
        }

        $promotionJson = [];
        foreach($this->promotions as $promotion) {
            $promotionJson[] = $promotion->toJson();
        }

        return json_encode([
            'products' => $productsJson,
            'promotions' => $promotionJson,
        ]);
    }

    public static function fromJson(string $json)
    {
        $decodedJson = json_decode($json);

        $products = [];
        foreach($decodedJson->products as $product) {
            $products[] = Product::fromJson($product);
        }

        $promotions = [];
        foreach($decodedJson->promotions as $promotion) {
            $promotions[] = Promotion::fromJson($promotion);
        }

        return new Cart(
            $products,
            $promotions
        );
    }
}
