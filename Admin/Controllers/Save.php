<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use App\Models\Author;
use Controller;


class Save extends Controller
{

    protected $data;
    protected $author;

    public function __construct($data)
    {
        $this->data = $data;
        $this->article = new Article();
        $this->author = new Author();
        if (!empty($data['id']))
        {
            $this->article->id = $data['id'];
        }
    }

    public function saveData()
    {
        $this->article->title = $this->data['title'];
        $this->article->text = $this->data['text'];

        $author_test = Author::findAuthor([':firstname' => trim($_POST['firstname']), ':lastname' => trim($_POST['lastname'])]);


        if (isset($author_test[0]))
        {
            $this->article->author_id = $author_test[0]->id;
        }
        else
        {
            $this->author->firstname = trim($this->data['firstname']);
            $this->author->lastname = trim($this->data['lastname']);


            $this->author->save();
            $this->article->author_id = $this->author->id;
        }

         $this->article->save();
    }
}