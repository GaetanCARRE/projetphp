<?php
   // session_start();
    //$ordre = "asc";

    if(isset($_POST['filtre']) )
    {
        var_dump($_POST['filtre']);
        $ordre =$_POST['filtre'];
        $_SESSION['filtre']=$ordre;

    }
   
  

    $fichier = 'ordre.txt';
    if(file_exists($fichier))
    {
        $content = $ordre;
        //$content ++;
        file_put_contents($fichier,$content);
        header('Location: ../?modif_err=success');

    }
    else{
       // header('Location: ../?modif_err=error');

    }


?>
    