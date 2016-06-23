<?php
	header('content-type:text/html;charset=utf-8');
	function select($sql,Memcache $memcache){
		echo $key = md5($sql);
		$date = $memcache->get($key);
		var_dump($date);
		if(!$date){
			echo 'p';
			try{
				$pdo = new PDO("mysql:host=localhost;dbname=s43_shop","root","123456");
			}catch(PDOException $e){
				die('链接数百');
			}
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$date = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$memcache->add($key,$date,MEMCACHE_COMPRESSED,0);
		}
		return $date;
	}
	$memcache = new Memcache;
	$memcache->connect('localhost',11211);
	$date = select("select * from s43_user",$memcache);
	// var_dump($date);