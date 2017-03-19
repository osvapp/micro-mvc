<?php
namespace App\Controllers;

use \App\System\App;
use \App\System\Settings;
use \App\System\FormValidator;
use \App\System\Mailer;

class AdminController extends Controller {

    public function index() {
        $this->render('pages/admin/index.twig', [
            'title'       => 'Dashboard',
            'description' => 'Dashboard',
            'errors'      => isset($errors) ? $errors : ''
        ]);
    }
}
