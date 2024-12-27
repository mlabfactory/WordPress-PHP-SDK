<?php

namespace Mlabfactory\WordPress\Service;

class User extends WpService
{

    /**
     * Get all users.
     *
     * @return mixed
     */
    public function list()
    {
        $result = $this->wordpress->getCall('/wp/v2/users');

        return $result;
    }

    /**
     * Create user.
     *
     * @return mixed
     */
    public function create($data)
    {
        $result = $this->wordpress->postCall('/wp/v2/users', $data);

        return $result;
    }

    /**
     * Get user.
     *
     * @return mixed
     */
    public function get($id)
    {
        $result = $this->wordpress->getCall('/wp/v2/users/'.$id);

        return $result;
    }

    /**
     * Update user.
     *
     * @return mixed
     */
    public function update($id, $data)
    {
        $result = $this->wordpress->postCall('/wp/v2/users/'.$id, $data);

        return $result;
    }

    /**
     * Delete user.
     *
     * @return mixed
     */
    public function delete($id)
    {
        $result = $this->wordpress->deleteCall('/wp/v2/users/'.$id);

        return $result;
    }
}
