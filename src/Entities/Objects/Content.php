<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities\Objects;

class Content {
    private array $title;
    private array $content;
    private array $excerpt;

    public function getTitle(): array {
        return $this->title;
    }

    public function getContent(): array {
        return $this->content;
    }

    public function getExcerpt(): array {
        return $this->excerpt;
    }
}