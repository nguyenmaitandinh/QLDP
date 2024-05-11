<?php

class BaseController {

    const PATH_VIEW = "Views";

    public function __construct(){
        
    }

    public function view($layout = null, $view = null, array $data = []){
        foreach($data as $key => $value){
            $$key = $value;
        }
        if(isset($layout) && is_string($layout) && strlen($layout) > 0){
            if(isset($view) && is_string($view) && strlen($view) > 0)
                $view = $this->getPath($view);
            require_once $this->getPath($layout);
        }
    }

    private function getPath($path){
        $path = str_replace(".", "/", $path);
        $path = self::PATH_VIEW . "/" . $path . ".php";
        return $path;
    }
}

?>