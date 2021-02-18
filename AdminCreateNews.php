<?php


namespace App\Controllers\Admin;


use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class AdminCreateNews
{

    private $news_name;
    private $short_description;
    private $full_description;

    public function __construct($news_name, $short_description,$full_description)
    {

        $this->news_name = $news_name;
        $this->short_description = $short_description;
        $this->full_description = $full_description;

    }
    public function render()
    {
        $model = new NewsModel();
        $view = new ViewLoader();
        $view->loadTemplate('create_news_admin.php', [
            'create_news' => $model->addNewsOne($this->news_name, $this->short_description, $this->full_description ),
        ]);
    }
}
