<!doctype html>
<html>
    <head>
    <style>
input,select {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

input span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

input span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

input:hover span {
  padding-right: 25px;
}

input:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
        <title>Mon premier formulaire</title>
        <img src="image.gif">

        <meta charset="UTF-8" />
    </head>
    
    <body style="background-color:#2471A3">

    <center>
    <form action="tictac.php" method="post"> 
            <p> <input type="submit" name="new" value="New Game" />

               </p>
            <p>
                <input type="text" name="id" placeholder=" ID" />
<select name="player">
<option value="1"> j1
<option value="2"> j2

<select >
<input type="submit" value="Join Game" /></p>

         </form>
</center>
       





<?php


class MyDB extends SQLite3 {
    function __construct() {
       $this->open('tictactoe.sqlite');
    }
 }

 $db = new MyDB();
 if(!$db) {
    echo $db->lastErrorMsg();
    exit();
 } 
 $sql=  " SELECT * FROM tictactoe" ;
 $ret = $db->query($sql);

  while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {

     echo $row['ID'] ." ".$row['GRID']."".$row['PLAYER']." <br>";
  }

 

 $db->close();
 ?>
    </body>
</html>