<?php

namespace App\Traits;


trait UploadFile
{
    //sm.jpg
    function uploadFile($File,$imgName,$Dossier){
        // $File_Extension= $File->extension();
        $File_Name = time().$imgName;
        $path = $Dossier;
        $File->move($path,$File_Name);
        
        return $File_Name;
    }


}
