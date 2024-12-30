<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

class Category extends Response {

    protected int $count;
    protected string $name;
    protected string $slug;
    protected int $parent;

    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->count = $data['count'];
        $this->name = $data['name'];
        $this->slug = $data['slug'];
        $this->parent = $data['parent'];

        $this->body = $data;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getParent(): int
    {
        return $this->parent;
    }

}