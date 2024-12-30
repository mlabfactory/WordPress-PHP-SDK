<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

use Mlabfactory\WordPress\Entities\Objects\Meta;
use Mlabfactory\WordPress\Traits\Serializer;

class Response {

    use Serializer;
    
    protected int $id;
    protected string $slug;
    protected Meta $meta;
    protected string $link;
    protected array $body;

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->slug = $data['slug'];
        $this->meta = new Meta($data['meta']);
        $this->link = $data['link'];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getMeta(): Meta
    {
        return $this->meta;
    }

    public function getLink(): string
    {
        return $this->link;
    }
   

    /**
     * Get the value of body
     *
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }
}