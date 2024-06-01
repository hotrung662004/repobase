<?php 

namespace Asus\RepoBase\Controllers\Client;

use Asus\RepoBase\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'TrungHV';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}