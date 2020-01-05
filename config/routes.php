<?php
/**
 * Created by PhpStorm.
 * User: huangfs
 * Date: 2020/1/4
 * Time: 19:15
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo "成功！";
});
Macaw::get('', 'HomeController@home');

Macaw::$error_callback = function() {

    throw new Exception("路由无匹配项 404 Not Found");

};
Macaw::dispatch();