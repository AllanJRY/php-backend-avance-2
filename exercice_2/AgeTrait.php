<?php

trait AgeTrait
{
    private DateTime $dateOfBirth;

    /**
     * @param \DateTime $dateOfBirth
     */
    public function __construct(DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }


    /**
     * @return \DateTime
     */
    public function getDateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     */
    public function setDateOfBirth(DateTime $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getAge(): int {
        $difference = $this->dateOfBirth->diff(new DateTime());

        return $difference->y;
    }
}
