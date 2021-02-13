<?php

class My_rout extends Database{
    
    public function getController($route) {
        
        $add_controller = 'errors/404';
        
        $path = $this->getPath($route);
        if($path !== 404){
            $path_mass = explode('/', $path);
            $get_path = array();
            foreach ($path_mass as $pm) {
                $small_path = explode('=', $pm);
                if($small_path[0] == 'controller'){
                    $add_controller =  $small_path[1];
                }
                else{
                    $get_path[$small_path[0]] = $small_path[1];
                }
            }
            foreach ($get_path as $key => $value) {
                $_POST[$key] = $value;
            }

        }
        return $add_controller;
    }
    
    private function getPath($route) {
        
        $url = '';
        $control_true = 0;
        
        $route_mass = explode('/', $route);
        foreach ($route_mass as $rm) {
            $result = $this->getOneDb("SELECT url FROM url_alias WHERE alias = '$rm'");
            if($result){
                    foreach ($result as $value) {
                        $url .= '/'.$value;
                        //проверим что бы в пути был тоько один контроллер
                        $text="controller";
                        if(strstr($value, $text)) $control_true++;
                    }
            }
            else{
                //так мы отрезаем не существующие параметры URL
                return 404;
            }
        }
        //убираем не существующие страницы из повторений правельного ЧПУ
        if($control_true>1) return 404;
        //убрал первый слеш
        return substr($url, 1);
    }
    
    public function includder($add_controller) {

        $path = DIR_ROOT;

        //проверим на существование в URL слова back
        $url = $_SERVER['REQUEST_URI'];

        //шаблон по умолчанию - его можно переопределить в вызываемом контроллере
        $add_tpl = $add_controller;
        
        //$ajax - для определения AJAX запроса что бы можно было вернуть только результат...
        $ajax = false;
        if(isset($_REQUEST['method']) && $_REQUEST['method']=='ajax'){
            $ajax = true;
        }

        //подключим нужные контроллеры
        if(!$ajax){ include $path . 'controller/header.php'; }
        include $path . 'controller/'.$add_controller.'.php';
        if(!$ajax){ include $path . 'controller/footer.php'; }

        if(!$ajax){ include VIEW.'header.php'; }
        if(!$ajax){ include VIEW.$add_tpl.'.php'; }
        if(!$ajax){ include VIEW.'footer.php'; }
    }

}