<?php

namespace App\Services;

use App\Controllers\Admin\AdminCreateNews;
use App\Controllers\Admin\AdminDeleteNews;
use App\Controllers\Frontend\News;
use App\Controllers\Frontend\OneNews;
use App\Controllers\Admin\AdminAllNews;


class Route
{


    public static function render()
    {
        ;
        /*$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $segments = explode('/', trim($uri, '/'));

        if ($segments[0] === 'admin') {
            if ($segments[1] === 'news')
                $controller = new AdminAllNews;
            elseif ($segments[1] === 'news')
                $controller = new AdminAllNews;
            else
                $controller = new AdminAllNews;
        } else {
            if ($uri === 'news')
                $controller = new News;
            elseif ($uri === '/1')
                $controller = new OneNews(str_replace('/news/', '', $_SERVER['PATH_INFO']));
            else
                $controller = new AdminAllNews;
        }
        $controller->render();
    }*/

        switch ($_SERVER['PATH_INFO']) {

           /* case str_replace('/admin/news/', '', $_SERVER['PATH_INFO']) !== '' && $_SERVER['REQUEST_METHOD'] === 'DELETE':
                die('test');

                //break;*/
            case'/admin/news':
                $controller = new AdminAllNews;

                break;

            case str_replace('/admin/news/create/', '', $_SERVER['PATH_INFO']) !== '' && $_SERVER['REQUEST_METHOD'] === 'POST':
            $controller = new AdminCreatenews(str_replace('/admin/news/create', '', $_SERVER['PATH_INFO']));

            break;
            case str_replace('/admin/news/', '', $_SERVER['PATH_INFO']) !== '' && $_SERVER['REQUEST_METHOD'] === 'DELETE':
                $controller = new AdminDeletenews(str_replace('/admin/news/', '', $_SERVER['PATH_INFO']));

                break;
            case str_replace('/admin/news/', '', $_SERVER['PATH_INFO']) !== '' && $_SERVER['REQUEST_METHOD'] === 'PUT':
                $controller = new AdminUpdateNews(str_replace('/admin/news/', '', $_SERVER['PATH_INFO']));

                break;


            case  '/':
                $controller = new News;

                break;


            case'/news':
                $controller = new News;

                break;
            case '/news/':
                $controller = new News;

                break;

            /*case str_replace('/news/', '', $_SERVER['PATH_INFO']) !== '':
                $controller = new OneNews(str_replace('/news/', '', $_SERVER['PATH_INFO']));

                break;*/



            /*case str_replace('/admin/news/1', '', $_SERVER['PATH_INFO']) !== '' && $_SERVER['REQUEST_METHOD'] === 'DELETE':
                 $controller = new OneNews(str_replace('/news/', '', $_SERVER['PATH_INFO']));

                 break;*/

        }

        $controller->render();
    }
}

