<?php

include_once ('Debuggable.php');

class Sac implements Debuggable
{
    private string $color;
    private string $marque;

    /**
     * @param string $color
     * @param string $marque
     */
    public function __construct(string $color, string $marque)
    {
        $this->color = $color;
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    function debug(): string
    {
        return '['.self::class.']: color='.$this->color.' marque='.$this->marque;
    }

}