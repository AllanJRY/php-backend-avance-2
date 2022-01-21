<?php

include_once ('User.php');

class Article {
    private string $title;
    private DateTime $postedAt;
    private string $content;
    private ?User $author = null;

    public function __toString()
    {
        return
            'Titre :'.$this->title.'<br>'
            .'Postée le '.$this->postedAt->format('d/m/Y').'<br>'
            .'Auteur : '.$this->author.'<br>'
            .'contenu : '.$this->content;
    }

    public function __set($name, $value)
    {
        if ($name === 'posted_at') {
            $this->postedAt = new DateTime($value);
        } else if($name === 'lastname') {
            if (null === $this->author) $this->author = new User();

            $this->author->setLastname($value);
        } else if($name === 'firstname') {
            if (null === $this->author) $this->author = new User();

            $this->author->setFirstname($value);
        }
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return \DateTime
     */
    public function getPostedAt(): DateTime
    {
        return $this->postedAt;
    }

    /**
     * @param \DateTime $postedAt
     */
    public function setPostedAt(DateTime $postedAt): void
    {
        $this->postedAt = $postedAt;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return \User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param \User $author
     */
    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }
}
