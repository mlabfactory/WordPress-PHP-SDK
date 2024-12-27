<?php

namespace Mlabfactory\WordPress\Service;

use Mlabfactory\WordPress\Entities\Media as EntitiesMedia;
use Mlabfactory\WordPress\Entities\MediaList;
use Mlabfactory\WordPress\Entities\PostsList;
use Mlabfactory\WordPress\Entities\Post as PostEntity;

class Media extends WpService
{

    /**
     * Get all posts.
     *
     * @return MediaList
     */
    public function list($data = null): MediaList
    {
        $result = $this->wordpress->getCall('/wp/v2/media', $data);
        $list = new MediaList();

        foreach ($result as $_ => $value) {
            $list->addMedia(
                new EntitiesMedia((array) $value)
            );
        }

        return $list;
    }

    /**
     * Get post.
     *
     * @return EntitiesMedia
     */
    public function get($id): EntitiesMedia
    {
        $result = $this->wordpress->getCall('/wp/v2/media/'.$id);
        return new EntitiesMedia((array) $result);
    }

    /**
     * Delete post.
     *
     * @return mixed
     */
    public function delete($id)
    {
        $result = $this->wordpress->deleteCall('/wp/v2/media/'.$id);

        return $result;
    }
}
