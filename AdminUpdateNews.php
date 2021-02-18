<?php


namespace App\Controllers\Admin;


use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class AdminUpdateNews
{
    private $id;
    private $news_name;
    private $short_description;
    private $full_description;

    public function __construct($id, $news_name, $short_description,$full_description)
    {
        $this->id = $id;
        $this->news_name = $news_name;
        $this->short_description = $short_description;
        $this->full_description = $full_description;
    }
    public function render()
    {
        $model = new NewsModel();
        $view = new ViewLoader();
        $view->loadTemplate('update_news_admin.php', [
            'update_news' => $model->updateNewsOne($this->id, $this->news_name, $this->short_description, $this->full_description ),
        ]);
    }
}