<?php
class MySQL{
    function search($title){ 
        try{
            $db = new PDO('mysql:dbname=sangi_jidokan; host=localhost; charset=utf8', 'root', '');
          }catch(PDOException $e){
            echo 'DB接続エラー：'.$e->getMessage();
          }
        $statement = $db->prepare("SELECT * FROM musicplayer.info WHERE title LIKE :title");
        $name = '%'.$title.'%';
		$statement->bindParam(':title', $name, PDO::PARAM_STR);
		$statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

