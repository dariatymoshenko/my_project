<?php


namespace App\Controllers\Admin;


use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class AdminDeleteNews
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        $model = new NewsModel();
        $view = new ViewLoader();
        $view->loadTemplate('delete_news_admin.php', [
            'delete_news' => $model->delNewsOne($this->id),
        ]);
    }
}