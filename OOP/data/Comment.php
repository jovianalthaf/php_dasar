<?php
class Comment
{
    private ?int $id = null; // properti id
    private ?string $name = null; // properti name


    public function setId(?int $id): void
    {
        if ($id < 0) {
            throw new InvalidArgumentException("ID MUST BE POSITIVE");
        }
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
