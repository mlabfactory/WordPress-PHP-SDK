<?php

namespace Mlabfactory\WordPress\Service;

use Mlabfactory\WordPress\Entities\PostsList;
use Mlabfactory\WordPress\Entities\Post as PostEntity;

class Post extends WpService
{
    /**
     * Get all posts.
     *
     * @return PostsList
     */
    public function list($data = null): PostsList
    {
        $result = $this->wordpress->getCall('/wp/v2/posts', $data);
        $list = new PostsList();

        foreach ($result as $_ => $value) {
            $list->addPost(
                new PostEntity((array) $value)
            );
        }

        return $list;
    }

    /**
     * Create post.
     *
     * @return mixed
     */
    public function create($data)
    {
        $result = $this->wordpress->postCall('/wp/v2/posts', $data);

        return $result;
    }

    /**
     * Get post.
     *
     * @return PostEntity
     */
    public function get($id): PostEntity
    {
        $result = $this->wordpress->getCall('/wp/v2/posts/'.$id);
        return new PostEntity((array) $result);
    }

    /**
     * Update post.
     *
     * @return mixed
     */
    public function update($id, $data)
    {
        $result = $this->wordpress->postCall('/wp/v2/posts/'.$id, $data);

        return $result;
    }

    /**
     * Delete post.
     *
     * @return mixed
     */
    public function delete($id)
    {
        $result = $this->wordpress->deleteCall('/wp/v2/posts/'.$id);

        return $result;
    }
}
