<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);
        $explode_url = explode('/', $url);
        $request->controller = $explode_url[1];
        $request->action = 'index';
        $request->params = isset($explode_url[2]) ? explode('&', $explode_url[2]) : [];

    }
}
