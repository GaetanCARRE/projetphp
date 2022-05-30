<?php

function compteur()
{
    $fichier = 'cpt.txt';
    if(file_exists($fichier))
    {
        $content = (int)file_get_contents($fichier);
        $content ++;
        file_put_contents($fichier,$content);
    }
    else
    {
        file_put_contents($fichier,1);
    }
}