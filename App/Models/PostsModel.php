<?php
namespace App\Models;

use \App\System\App;
use \App\Models\Model;

class PostsModel extends Model {
    public function all() {
        $data = App::getDb()->query('SELECT * FROM posts');
        return $data;
    }
}
