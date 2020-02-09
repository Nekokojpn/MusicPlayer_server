<?php
	$title = htmlspecialchars($_GET["title"]);

    include 'MySQL.php';
    $se = new MySQL();
    $res = $se->search($title);
    foreach($res as $key => $val){
        echo "::title : ".$val["title"]." end;
            created : ".$val["created"]." end;
            path : ".$val["path"]." end;
            img_path : ".$val["img_path"]. "end;
            description : ".$val["description"]." end;::";
    }
?>  