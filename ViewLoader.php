<?php

namespace App\Services;

class ViewLoader
{

    /**
     * @param string $template
     * @param array $params
     */
    public function loadTemplate(string $template, array $params = [])
    {
        ob_start();
        extract($params);
        include './view/' . $template;

        $view = ob_get_clean();

        echo $view;
    }
}