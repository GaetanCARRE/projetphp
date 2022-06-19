<?php
    // session_start();
    $db =require_once('../config/config.php');

        //$id = ($_POST['id']);
         $id = $_POST['id'];
       
        //echo "<img src={$image} class='img_article'><br>"; 

        //ajouter($db,$image,$nom,$prix,$quantite);

        //header('Location:/website/src/index.php');
        //echo "<img src={$image} class='img_article'><br>"; 

        
        
        //$insert = $db->prepare('DELETE FROM product where id=?');
        //$insert->execute($id);
        $res = $db->prepare("DELETE FROM product WHERE id=?");
        $res->execute([$id]);
        header("Location:../index.php?id=$id");
