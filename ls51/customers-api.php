<?php
    $method = $_SERVER['REQUEST_METHOD'];
    $param = ["id" => 3];

    switch ($method) {
        case "POST":
            echo "POST";
            return;
            $c = new Customer;
            $c->Create($param);
            break;
        case "GET":
            echo "GET";
            return;
            $c = new Customer;
            $c->Select($param);
            break;
        case "PUT":
            $c = new Customer;
            $c->Update($param);
            break;
        case "DELETE":
            echo "DELETE";
            return;
            $c = new Customer;
            $c->Delete($param);
            break;  
    }
?>