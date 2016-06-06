<?php

namespace App\Controllers;

use App\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $news = \App\Models\Article::findAll();
        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    public function actionTest()
    {
        echo 'Test!';
    }

}