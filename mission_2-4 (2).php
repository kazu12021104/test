<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>mission_2-4</title>
</head>
<body>
    <h1>入力フォーム</h1>
    <form action="" method="post">
        <input type="text" name="str" placeholder="入力してください">
        <input type="submit" value="送信">
    </form>
        <?php
            $str=$_POST["str"];
            if($str!=NULL){
                $filename="mission_2-4.txt";
                $fp=fopen($filename,"a");
                fwrite($fp,$str.PHP_EOL);
                fclose($fp);
                echo "書き込み成功！<br>";
                echo "<br>";
                if($str=="完成！"){
                echo "おめでとう！<br>";
                echo "<br>";
                }if(file_exists($filename)){
                    $lines=file($filename,FILE_IGNORE_NEW_LINES);
                    foreach($lines as $line){
                        echo $line . "<br>";
                    }
                }    
            }else{
                echo "入力されていません";
            }
        ?>
</body>
</html>