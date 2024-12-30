<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

use Mlabfactory\WordPress\Traits\Serializer;

class CategoryList {

    use Serializer;

    private array $category = [];

    /**
     * Get the value of category
     *
     * @return array
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param array $category
     *
     * @return self
     */
    public function addCategory(Category $category): self
    {
        $this->category[] = $category;

        return $this;
    }
}