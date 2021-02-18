<?php

namespace App\Controllers\Frontend;

use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class OneNews
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
        $view->loadTemplate('one_news.php', [
            'row' => $model->getOneNews($this->id),
        ]);
    }
}