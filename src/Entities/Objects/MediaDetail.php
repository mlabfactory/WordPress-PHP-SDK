<?php

namespace Mlabfactory\WordPress\Entities\Objects;

use Mlabfactory\WordPress\Entities\Objects\ImageMeta;

class MediaDetail
{
    private int $width;
    private int $height;
    private string $file;
    private int $filesize;
    private array $sizes;
    private ImageMeta $image_meta;

    public function __construct(array $data)
    {
        $this->width = $data['width'];
        $this->height = $data['height'];
        $this->file = $data['file'];
        $this->filesize = $data['filesize'];
        $this->sizes = (array) $data['sizes'];
        $this->image_meta = new ImageMeta(
            (array) $data['image_meta']
        );
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getFilesize(): int
    {
        return $this->filesize;
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function getImageMeta(): ImageMeta
    {
        return $this->image_meta;
    }
}