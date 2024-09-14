<?php

namespace app\Controller;

use App;

class PostController extends AppController {

    public function index()
    {
        $posts = App::getInstance()->getTable('Post')->last();
        $categories = App::getInstance()->getTable('Category')->all();
        $this->render('posts.index', compact('posts', 'categories'));
    }

    public function category()
    {

    }

    public function show()
    {

    }

}