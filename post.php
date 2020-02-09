<?php
	$name = htmlspecialchars($_POST["name"]);
	$text = htmlspecialchars($_POST["text"]);
    echo "return from server: [".$name."] said [".$text."]";
    include 'MySQL.php';
    $up = new MySQL();
    $up->add($name, $text);
	$fp = fopen("android.txt", "a");
	if ($name) {// nameが送られてきていたら、
        fwrite($fp ,$name,$text + "\n"); // 保存ファイルに書き込み
        fclose($fp);
	}
?>  
