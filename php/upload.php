<?php include 'dataaccess.php';?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $caption= $_POST["caption"];
    $file = $_FILES["image"];
    
    
    echo $caption;
    if($caption==null || $file==null){
        header('Location: form.php?upload=3');
    }else{

        //$data = new Database();
        $imagefile= file_get_contents($file);
        echo $imagefile;
        //$success = $data->InsertImage($imagefile, $caption);
/*
        if($success){
            header('Location: form.php?upload=1');
            
        }else{
            header('Location: form.php?upload=2');
        }*/
    }
}





?>
