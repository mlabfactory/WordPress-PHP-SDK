<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

class Category extends Response {

    private int $count;
    private string $name;
    private string $slug;
    private int $parent;

    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->count = $data['count'];
        $this->name = $data['name'];
        $this->slug = $data['slug'];
        $this->parent = $data['parent'];
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