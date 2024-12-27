<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities\Objects;

use Mlabfactory\WordPress\Traits\Serializer;

class Date {

    use Serializer;
    
    private string $date;
    private string $date_gmt;
    private string $modified;
    private string $modified_gmt;

    public function __construct(... $data) {
        $this->date = $data[0];
        $this->date_gmt = $data[1];
        $this->modified = $data[2];
        $this->modified_gmt = $data[3];
    }

    public function getDate(): string {
        return $this->date;
    }

    public function getDateGmt(): string {
        return $this->date_gmt;
    }

    public function getModified(): string {
        return $this->modified;
    }

    public function getModifiedGmt(): string {
        return $this->modified_gmt;
    }
}