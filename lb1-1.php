<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8"/>
  <title>ЛБ 2</title>
  <link href="style1.css" rel="stylesheet">
 </head>

 <body>
        <h2 style=" margin: auto 20px; background: rgb(191, 191, 255); border-radius: 10px;
    padding: 20px;">Сообщение от выбранного клиента</h2>
            
            <?php
             require_once __DIR__ . "/vendor/autoload.php";

             $colclient = (new MongoDB\Client)->nastya->client;

             if(isset($_POST["login"]))
             {
                 $login=$_POST["login"];
                 
                 $cursor = $colclient->find(
                         [ 
                             'login' => $login
                         ],
                         [ 
                             'projection' => ["_id" => 0, "message" => 1]
                         ]
                );

                foreach ($cursor as $document){
                    echo $document['message'].'<br>';
                }
            }
            ?>
 </body>
</html>
