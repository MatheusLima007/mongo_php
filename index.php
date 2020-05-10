<?php   
    $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");
    $db= new \MongoDB\Driver\BulkWrite;
    $db->insert(['nome'=>'maria','idade'=>35]);
    $manager->executeBulkWrite('raiz.academicos', $db);
    

    // $manager = new \MongoDB\Driver\Manager();
    // print '<pre>';
    // var_dump($manager);
    // print '<pre>';