<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities\Objects;

class ImageMeta
{
    private string $aperture;
    private string $credit;
    private string $camera;
    private string $caption;
    private string $created_timestamp;
    private string $copyright;
    private string $focal_length;
    private string $iso;
    private string $shutter_speed;
    private string $title;
    private string $orientation;
    private array $keywords;

    public function __construct(array $data)
    {
        $this->aperture = $data['aperture'];
        $this->credit = $data['credit'];
        $this->camera = $data['camera'];
        $this->caption = $data['caption'];
        $this->created_timestamp = $data['created_timestamp'];
        $this->copyright = $data['copyright'];
        $this->focal_length = $data['focal_length'];
        $this->iso = $data['iso'];
        $this->shutter_speed = $data['shutter_speed'];
        $this->title = $data['title'];
        $this->orientation = $data['orientation'];
        $this->keywords = (array) $data['keywords'];   
    }

    public function getAperture(): string
    {
        return $this->aperture;
    }

    public function getCredit(): string
    {
        return $this->credit;
    }

    public function getCamera(): string
    {
        return $this->camera;
    }

    public function getCaption(): string
    {
        return $this->caption;
    }

    public function getCreatedTimestamp(): string
    {
        return $this->created_timestamp;
    }

    public function getCopyright(): string
    {
        return $this->copyright;
    }

    public function getFocalLength(): string
    {
        return $this->focal_length;
    }

    public function getIso(): string
    {
        return $this->iso;
    }

    public function getShutterSpeed(): string
    {
        return $this->shutter_speed;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getOrientation(): string
    {
        return $this->orientation;
    }

    public function getKeywords(): array
    {
        return $this->keywords;
    }
}