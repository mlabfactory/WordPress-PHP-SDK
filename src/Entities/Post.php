<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

use Mlabfactory\WordPress\Entities\Objects\Date;
use Mlabfactory\WordPress\Entities\Objects\Meta;
use Mlabfactory\WordPress\Entities\Objects\Content;

class Post extends Response {

    private Date $date;
    private string $status;
    private string $type;
    private Content $content;
    private int $author;
    private int $featured_media;
    private string $comment_status;
    private string $ping_status;
    private bool $sticky;
    private string $template;
    private string $format;

    public function __construct(array $data) {
        $this->id = $data['id'];
        $this->date = new Date($data['date'], $data['date_gmt'], $data['modified'], $data['modified_gmt']);
        $this->slug = $data['slug'];
        $this->status = $data['status'];
        $this->type = $data['type'];
        $this->link = $data['link'];
        $this->content = new Content( $data['title'],$data['content'], $data['excerpt'] );
        $this->author = $data['author'];
        $this->featured_media = $data['featured_media'];
        $this->comment_status = $data['comment_status'];
        $this->ping_status = $data['ping_status'];
        $this->sticky = $data['sticky'];
        $this->template = $data['template'];
        $this->format = $data['format'];
        $this->meta = new Meta($data['meta'], $data['categories']);

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

    public function getContent(): Content {
        return $this->content;
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

    public function isSticky(): bool {
        return $this->sticky;
    }

    public function getTemplate(): string {
        return $this->template;
    }

    public function getFormat(): string {
        return $this->format;
    }

}