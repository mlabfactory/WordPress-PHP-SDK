<?php

namespace Mlabfactory\WordPress\Service;

class Tag
{
    protected $wordpress;

    /**
     * Construct WordPress.
     *
     * @param $wordpressSdk
     */
    public function __construct($wordPressSdk)
    {
        $this->wordpress = $wordPressSdk;
    }

    public function setWordPressInstance($wordPressSdk)
    {
        $this->wordpress = $wordPressSdk;
    }

    public function getWordPressInstance()
    {
        return $this->wordpress;
    }

    /**
     * Get all posts.
     *
     * @return mixed
     */
    public function list($data = null)
    {
        $result = $this->wordpress->getCall('/wp/v2/tags', $data);

        return $result;
    }

    /**
     * Create post.
     *
     * @return mixed
     */
    public function create($data)
    {
        $result = $this->wordpress->postCall('/wp/v2/tags', $data);

        return $result;
    }

    /**
     * Get post.
     *
     * @return mixed
     */
    public function get($id)
    {
        $result = $this->wordpress->getCall('/wp/v2/tags/'.$id);

        return $result;
    }

    /**
     * Update post.
     *
     * @return mixed
     */
    public function update($id, $data)
    {
        $result = $this->wordpress->postCall('/wp/v2/tags/'.$id, $data);

        return $result;
    }

    /**
     * Delete post.
     *
     * @return mixed
     */
    public function delete($id)
    {
        $result = $this->wordpress->deleteCall('/wp/v2/tags/'.$id);

        return $result;
    }
}
