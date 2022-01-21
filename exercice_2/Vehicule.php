<?php

include_once ('AgeTrait.php');

class Vehicule
{
    use AgeTrait;
    private string $model;

    /**
     * @param string $model
     */
    public function __construct(string $model, DateTime $dateOfBirth)
    {
        $this->model = $model;
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }
}
