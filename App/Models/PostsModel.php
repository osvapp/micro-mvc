<?php
namespace App\Models;

class PostsModel extends Model {

    protected $table = "posts";

    public function all() {
        return $this->query("SELECT posts.id, posts.title, categories.title AS category
                             FROM {$this->table}
                             LEFT JOIN categories
                             ON posts.category = categories.id
                             ORDER BY posts.id");
    }

}
