<?php

namespace Mlabfactory\WordPress\Service;

class CustomPost extends WpService
{
    protected $postType;

    public function __construct($wordPressSdk, $postType)
    {
        $this->wordpress = $wordPressSdk;
        $this->postType = $postType;
    }

    /**
     * Get all posts.
     *
     * @return mixed
     */
    public function list($data = [])
    {
        $result = $this->wordpress->getCall('/wp/v2/'.$this->postType, $data);

        return $result;
    }

    /**
     * Create post.
     *
     * @return mixed
     */
    public function create($data)
    {
        $result = $this->wordpress->postCall('/wp/v2/'.$this->postType, $data);

        return $result;
    }

    /**
     * Get post.
     *
     * @return mixed
     */
    public function get($id)
    {
        $result = $this->wordpress->getCall('/wp/v2/'.$this->postType.'/'.$id);

        return $result;
    }

    /**
     * Update post.
     *
     * @return mixed
     */
    public function update($id, $data)
    {
        $result = $this->wordpress->postCall('/wp/v2/'.$this->postType.'/'.$id, $data);

        return $result;
    }

    /**
     * Delete post.
     *
     * @return mixed
     */
    public function delete($id)
    {
        $result = $this->wordpress->deleteCall('/wp/v2/'.$this->postType.'/'.$id);

        return $result;
    }
}
