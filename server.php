<?php

    $db = new PDO('mysql:host=localhost;dbname=crudajax','root','');
    $page = isset($_GET['p'])?$_GET['p']:'';
    
    if($page=='add'){

        $name = $_POST['nm'];
        $email = $_POST['em'];
        $phone = $_POST['ph'];
        $address = $_POST['al'];
        $sql = "insert into dados (nome,email,phone,address) values(?,?,?,?)";
        print_r($sql);
        $stmt = $db->prepare($sql);

        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$email);
        $stmt->bindParam(3,$phone);
        $stmt->bindParam(4,$address);
        $stmt->execute();
    }
    else if($page=='edit'){

    }
    else if($page=='del'){

    }




?>