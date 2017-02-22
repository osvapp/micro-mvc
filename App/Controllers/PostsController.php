<?php
namespace App\Controllers;

use \App\System\App;
use \App\Controllers\Controller;
use \App\Models\PostsModel;

class PostsController extends Controller {

    public function index() {
        $model = new PostsModel();
        $data  = $model->all();

        $this->render('pages/index.twig', [
            'posts' => $data
        ]);
    }
    
}
