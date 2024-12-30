<?php

namespace Mlabfactory\WordPress\Service;

use Mlabfactory\WordPress\Entities\Category as EntitiesCategory;
use Mlabfactory\WordPress\Entities\CategoryList;

class Category extends WpService
{

    /**
     * Get all posts.
     *
     * @return CategoryList
     */
    public function list($data = null): CategoryList
    {
        $result = $this->wordpress->getCall('/wp/v2/categories', $data);
        $list = new CategoryList();

        foreach ($result as $_ => $value) {
            $list->addCategory(
                new EntitiesCategory((array) $value)
            );
        }

        return $list;
    }

    /**
     * Get post.
     *
     * @return EntitiesCategory
     */
    public function get($id): EntitiesCategory
    {
        $result = $this->wordpress->getCall('/wp/v2/categories/'.$id);
        return new EntitiesCategory((array) $result);
    }
}
