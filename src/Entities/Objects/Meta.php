<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities\Objects;

class Meta {
    private array $meta;
    private array $categories;

    public function getMeta(): array {
        return $this->meta;
    }

    public function getCategories(): array {
        return $this->categories;
    }
}