<?php
declare(strict_types=1);

namespace Mlabfactory\WordPress\Entities;

class PostsList {

    private array $posts = [];

    /**
     * Get the value of posts
     *
     * @return array
     */
    public function getPosts(): array
    {
        return $this->posts;
    }

    /**
     * Set the value of posts
     *
     * @param array $posts
     *
     * @return self
     */
    public function addPost(Post $posts): self
    {
        $this->posts = $posts;

        return $this;
    }
}