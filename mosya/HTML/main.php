
<?php
     

     $dsn = 'mysql:dbname=profile;host=localhost';
     $user = 'root';
     $password = 'listenpower1020';
     
     try{
         $dbh = new PDO($dsn, $user, $password);
          print('接続に成功しました。<br>');

          $dbh->query('SET NAMES sjis');

          $sql = 'select * from shouhin';
          foreach ($dbh->query($sql) as $row) {
              print($row['id']);
              print($row['name'].'<br>');
          }
          }catch (PDOException $e){
              print('Error:'.$e->getMessage());
              die();
          }

          $dbh = null;

  ?>

