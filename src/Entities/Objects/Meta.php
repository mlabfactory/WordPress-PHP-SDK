<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities\Objects;

use Mlabfactory\WordPress\Traits\Serializer;

class Meta {

    use Serializer;
    
    private array $meta;
    private ?array $categories;

    public function __construct(... $data) {
        $this->meta = (array) $data[0];
        $this->categories = $data[1] ?? null;
    }

    public function getMeta(): array {
        return $this->meta;
    }

    public function getCategories(): ?array {
        return $this->categories;
    }
}