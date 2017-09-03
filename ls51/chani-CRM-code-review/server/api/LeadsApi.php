<?php
    require_once 'IApi.php';
    require_once ('../leads.php');

         
    // check if a request was sent from client and saves it's value
    if(isset($_REQUEST['q'])) {
        $getvalue = $_REQUEST['q'];
    }
    else
    {
        die();
    }
    $id = trim($_REQUEST['id']);
    $name = trim($_REQUEST['name']);
    $phone = trim($_REQUEST['phone']);
    $product_id = trim($_REQUEST['product_id']);
    $Lead_id = trim($_REQUEST['Lead_id']);

    $lapi = new LeadsApi();
    
    switch ($getvalue) {
            case 'select':
                echo json_encode();
            break;
    
            case 'leadid':
            echo json_encode(leads::GetLeadsid());
            break;
    
            case 'checkLeadId':
            echo leads::CheckId($id);
            break;

    
            case 'update':
            if (Validat::isNumber($id) &&
            Validat::NotNull($name) &&
            Validat::isNumber($phone) &&
            Validat::optionSelected($product_id))
            {
                    $update = new leads($id, $name, $phone, $product_id);
                    $update->UpdateLead($id, $name, $phone, $product_id);
                    $OK = leads::$isOK;
                    echo json_encode($OK);
            }
            else {
                    echo json_encode("input error");
            }
    
            break;
    
    
            case 'create':
            if (Validat::NotNull($name) &&
            Validat::isNumber($phone) &&
            Validat::optionSelected($product_id))
            {
                    $create = new leads(0, $name, $phone, $product_id);
                    $create->CreateLead($name, $phone, $product_id);
                    $OK = leads::$isOK;
                    echo json_encode($OK);
            }
            else {
                    echo json_encode("input error");
            }  
            break;
    
    
    
    
            case 'delete':
            echo leads::DeleteLead($id);
            break;
        }

    class LeadsApi implements IApi {
   
    }
?>