<?php
    function escape($val)
    {
        return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
    }
    
    function connect() :PDO 
    {
        $pdo = new PDO("mysql:host=localhost; dbname=kunren; charset=utf8mb4","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    function php_log($var) 
    {
        //エラーログをon
        ini_set('log_errors', 'On');
        //エラーログの記録先を指定
        ini_set('error_log', 'php.log');
        //エラーログに記録
        error_log(print_r($var, true));
    }