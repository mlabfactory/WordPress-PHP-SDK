<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities\Objects;

use Mlabfactory\WordPress\Traits\Serializer;

class Content {

    use Serializer;
    
    private string $title;
    private string $content;
    private string $excerpt;

    public function __construct(... $data) {
        $this->title = $data[0]->rendered;
        $this->content = $data[1]->rendered;
        $this->excerpt = $data[2]->rendered;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getExcerpt(): string {
        return $this->excerpt;
    }
}