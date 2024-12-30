<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

use Mlabfactory\WordPress\Entities\Objects\Date;
use Mlabfactory\WordPress\Entities\Objects\Meta;
use Mlabfactory\WordPress\Entities\Objects\MediaDetail;

class Media extends Response {

    private Date $date;
    private string $status;
    private string $type;
    private string $description;
    private int $author;
    private int $featured_media;
    private string $comment_status;
    private string $ping_status;
    private string $template;
    private MediaDetail $mediaDetail;

    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->date = new Date($data['date'], $data['date_gmt'], $data['modified'], $data['modified_gmt']);
        $this->slug = $data['slug'];
        $this->status = $data['status'];
        $this->type = $data['type'];
        $this->link = $data['link'];
        $this->description = $data['description']->rendered;
        $this->author = $data['author'];
        $this->featured_media = $data['featured_media'];
        $this->comment_status = $data['comment_status'];
        $this->ping_status = $data['ping_status'];
        $this->template = $data['template'];
        $this->meta = new Meta($data['meta'], $data['categories'] ?? null);
        $this->mediaDetail = new MediaDetail((array) $data['media_details']);

        $this->body = $data;
    }


    public function getDate(): Date {
        return $this->date;
    }
    
    public function getStatus(): string {
        return $this->status;
    }

    public function getType(): string {
        return $this->type;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getAuthor(): int {
        return $this->author;
    }

    public function getFeaturedMedia(): int {
        return $this->featured_media;
    }

    public function getCommentStatus(): string {
        return $this->comment_status;
    }

    public function getPingStatus(): string {
        return $this->ping_status;
    }

    public function getTemplate(): string {
        return $this->template;
    }

    /**
     * Get the value of mediaDetail
     *
     * @return MediaDetail
     */
    public function getMediaDetail(): MediaDetail
    {
        return $this->mediaDetail;
    }
}