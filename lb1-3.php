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
    padding: 20px;">Клиенты с отрицательным балансом счета</h2>
    
            <?php
             require_once __DIR__ . "/vendor/autoload.php";

            $colclient = (new MongoDB\Client)->nastya->client;
            $cursor = $colclient->find(
                         [ 
                             'balance' => [ '$lt' => 0 ]
                         ],
                         [ 
                             'projection' => ["_id" => 0, "login" => 1, "balance" => 1]
                         ]
            );
                    foreach ($cursor as $document){
                        echo $document['login'].'-->'.$document['balance'].'<br>';
                    }
                          
            ?>
    </main>
 </body>
</html>
