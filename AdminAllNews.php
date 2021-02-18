<?php


namespace App\Controllers\Admin;


use App\Models\News as NewsModel;
use App\Services\ViewLoader;

class AdminAllNews
{
    public function render()
    {
        $model = new NewsModel();
        $view = new ViewLoader();
        $view->loadTemplate('admin_all_news.php', [
            'all_news' => $model->getNews(),
        ]);
    }
}