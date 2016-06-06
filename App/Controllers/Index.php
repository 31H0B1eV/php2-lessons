<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;
use App\MultiException;

class Index
    extends Controller
{

    public function actionDefault()
    {
        $news = \App\Models\Article::findAll();
        $this->view->news = $news;
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    public function actionAdd()
    {
        $this->view->display(__DIR__ . '/../../templates/add.php');
    }
    
    public function actionSave()
    {
        try {
            
            $article = new Article;
            $article->fill($_POST);
            $article->save();
            
            header('Location: /');

        } catch (MultiException $e) {
            $this->view->errors = $e;
            $this->view->display(__DIR__ . '/../../templates/add.php');
        }
    }

}