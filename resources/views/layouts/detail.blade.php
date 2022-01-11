<?php
    //データベース情報の指定
    $db['dbname'] = "nsync";  // データベース名
    $db['user'] = "nsync";  // ユーザー名
    $db['pass'] = "eraihito";  // ユーザー名のパスワード
    $db['host'] = "ec2-54-249-230-203.ap-northeast-1.compute.amazonaws.com";  // DBサーバのURL

    //dsnを作成
    $dsn = sprintf('mysql:host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']); 

    try {
        //PDOを使ってMySQLに接続
        $dbh = new PDO($dsn, $db['user'], $db['pass'], [
            //エラーモードのオプション設定
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ]);

		//テーブルのデータを取得
		$sql = 'SELECT * FROM contents';
		$stmt = $dbh->query($sql);
	
		//SQLの結果を受け取る
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);  
		$dbh = null;

    } catch (PDOException $e) {
        echo “接続失敗” . $e->getMessage();
    exit();
    };

?>