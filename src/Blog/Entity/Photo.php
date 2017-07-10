<?php

namespace Blog\Entity;

use Blog\Entity\Traits\TimestampableTrait;
use Blog\Entity\ValueObject\Uuid;

class Photo
{
    use TimestampableTrait;

    private $id;

    private $src;

    private $user;

    public function __construct(Uuid $id, Uuid $user)
    {
        $this->id = $id;
        $this->user = $user;
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function __toString()
    {
        return sprintf('%s', $this->id);
    }
}
