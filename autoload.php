<?php
function __autoload($class){
    if(file_exists(__DIR__.'/class/'.$class. '.php')){
        require __DIR__.'/class/'.$class. '.php';
    }elseif (file_exists(__DIR__.'/models/'.$class. '.php')){
        require __DIR__.'/models/'.$class. '.php';
    }elseif (file_exists(__DIR__.'/models/'.$class. '.php')){
        require __DIR__.'/models/'.$class. '.php';
    }
};
?>