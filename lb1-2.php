<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8"/>
  <title>ЛБ 2</title>
  <link href="style1.css" rel="stylesheet">
 </head>

 <body>
    <main>  
    <h2 style=" margin: auto 20px; background: rgb(191, 191, 255); border-radius: 10px;
    padding: 20px;">Общий входящий и исходящий трафик</h2>           
            <?php
             require_once __DIR__ . "/vendor/autoload.php";

             $colseanse = (new MongoDB\Client)->nastya->seanse;
          
                 $cursor1 = $colseanse->aggregate(
                    [
                        [ 
                            '$group' => ['_id' => 0, 'count' => [ '$sum' => '$in_trafic' ]]
                        ]
                    ]
                );

                $cursor2 = $colseanse->aggregate(
                    [
                        [ 
                            '$group' => ['_id' => 0, 'count' => [ '$sum' => '$out_trafic' ]]
                        ]
                    ]
                );

                foreach ($cursor1 as $document){
                    echo 'Количество входящего трафика --> '.$document['count'].'<br>';
                }

                foreach ($cursor2 as $document){
                    echo 'Количество исходящщего трафика --> '.$document['count'].'<br>';
                }  
            ?>
    </main>
 </body>
</html>
