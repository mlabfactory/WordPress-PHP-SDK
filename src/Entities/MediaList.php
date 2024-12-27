<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

use Mlabfactory\WordPress\Traits\Serializer;

class MediaList {

    use Serializer;

    private array $media = [];

    /**
     * Get the value of media
     *
     * @return array
     */
    public function getMedia(): array
    {
        return $this->media;
    }

    /**
     * Set the value of media
     *
     * @param array $media
     *
     * @return self
     */
    public function addMedia(Media $media): self
    {
        $this->media[] = $media;

        return $this;
    }
}