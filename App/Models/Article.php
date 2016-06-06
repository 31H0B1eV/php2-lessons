<?php

namespace App\Models;

use App\Model;
use App\MultiException;

class Article
    extends Model
{

    protected static $table = 'news';

    public $title;
    public $lead;
    
    public function fill($data) 
    {
        $errors = new MultiException();
        
        if (empty($data['title'])) {
            $errors->add( new \Exception('Пустой заголовок') );
        }
        if (empty($data['lead'])) {
            $errors->add( new \Exception('Пустой текст новости') );
        }
        
        if (0 != count($errors)) {
            throw $errors;
        }
        
        $this->title = $data['title'];
        $this->lead  = $data['lead'];
    }

}