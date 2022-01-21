<?php

include_once ('Debuggable.php');
include_once ('Identifiable.php');

class Voiture implements Debuggable, Identifiable
{
    private string $model;
    private string $mark;

    /**
     * @param string $model
     * @param string $mark
     */
    public function __construct(string $model, string $mark)
    {
        $this->model = $model;
        $this->mark = $mark;
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

    /**
     * @return string
     */
    public function getMark(): string
    {
        return $this->mark;
    }

    /**
     * @param string $mark
     */
    public function setMark(string $mark): void
    {
        $this->mark = $mark;
    }

    function debug(): string
    {
        return '['.self::class.']: model='.$this->model.' mark='.$this->mark;
    }


    public function getIdentity(): string
    {
        return $this->model;
    }
}