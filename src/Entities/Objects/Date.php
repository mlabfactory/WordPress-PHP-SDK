<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities\Objects;

class Date {
    private string $date;
    private string $date_gmt;
    private string $modified;
    private string $modified_gmt;

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