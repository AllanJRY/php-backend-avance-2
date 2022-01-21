<?php

include_once ('Debuggable.php');
include_once ('Identifiable.php');


class User implements Debuggable, Identifiable
{
    private string $lastname;
    private string $firstname;

    /**
     * @param string $lastname
     * @param string $firstname
     */
    public function __construct(string $lastname, string $firstname)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    function debug(): string
    {
        return '['.self::class.']: lastname='.$this->lastname.' firstname='.$this->firstname;
    }

    public function getIdentity(): string
    {
        return $this->lastname.' '.$this->firstname;
    }
}