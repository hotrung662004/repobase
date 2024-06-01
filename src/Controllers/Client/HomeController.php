<?php 

namespace Asus\RepoBase\Controllers\Client;

use Asus\RepoBase\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}