<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>app mvc</title>
</head>
<body>
  
   <h1> 
        <?php
            include ('./system/libs/Dcontroller.php');
            include ('./system/libs/Load.php');
            include ('./system/libs/Database.php');
            include ('./system/libs/Dmodel.php');
            include ('./url/url.php');
            include ('./system/libs/session.php');
         
            $url=isset($_GET['url']) ? $_GET['url'] : NULL;

            if($url!=NUll){
                $url=trim($url);
                $url=rtrim($url,"/");
                $url=explode("/", filter_var($url, FILTER_SANITIZE_URL));
            }else{
                unset($url);
            }
         
            if(isset($url[0])){
                include('./app/controllers/'.$url[0].'.php');
                $controler =new $url[0]();
                // if(isset($url[2])){
                    $controler->{$url[1]}();
                // }
              
            }
            else{
                include ('./app/controllers/login.php');
                $index =new login();
                $index->login();
            }
           
  
      
        ?>
   </h1>
    
  
</body>
</html>