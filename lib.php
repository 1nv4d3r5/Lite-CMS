<?php
function conn(){
	$server = mysql_connect('localhost','root','') or die('Error@server');
	$database= mysql_select_db('cms') or die('Error@database');
}
function head(){
	$head='
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset=utf-8 />
	<title>Lite CMS</title>
	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style>
	  article, aside, figure, footer, header, hgroup, 
	  menu, nav, section { display: block; }
	  #wrap{margin:10px auto; width:600px;}
	  
	</style>
	</head>
	<body>
	  <div id="#wrap">
		<h1>CMS lite</h1>
		<div id="content">';
	echo $head;
}
function footer(){
	$footer='		
		</div>
	  </div>
	</body>
	</html>';
	echo $footer;
}
function view($limit,$condition){
	$condition =($condition)? 'where '.mysql_real_escape_string($condition) : '';
	$limit =($limit)? ' limit '.mysql_real_escape_string($limit) : ' limit 0,1';
	$sql = 'select * from posts '.$condition.$limit;

	$result = mysql_query($sql);

	if (!$result) {
		echo "Could not successfully run query ($sql) from DB: " . mysql_error();
		exit;
	}

	if (mysql_num_rows($result) == 0) {
		echo "No rows found, nothing to print so am exiting";
		exit;
	}
	
	$posts = Array();
	$i=0;
	while ($row = mysql_fetch_assoc($result)) {
		$posts[$i]['id'] = $row["id"];
		$posts[$i]['title'] = $row["title"];
		$posts[$i]['summary'] = $row["summary"];
		$posts[$i]['context'] = $row["context"];
		$posts[$i]['date'] = $row["date"];
		$i++;
	}
	return $posts;
}
function insertPost($fields){
	$sql = 'INSERT INTO cms.posts (title, summary, context, date) VALUES ("'. $fields["title"].'","'.$fields["summary"].'","'.$fields["context"].'","'.date('Y-m-d H:i:s').'");';
	if (mysql_query($sql)) return true;
	echo mysql_error();
	return false;
}
function posts($posts){
	$postsOut =''; 
	foreach($posts as $post){
		$postsOut.='<h2>'.$post['title'].'</h2>
		<p>'.$post['summary'].'</p>
		<p>'.$post['date'].'</p>
		<p><a href="view.php?id='.$post['id'].'">Devamı</a></p>';
	}
	return $postsOut;
}

function post($data){
	foreach($data as $post){
		$postOut ='<h2>'.$post['title'].'</h2>
			<p>'.$post['summary'].'</p>
			<p>'.$post['context'].'</p>
			<p>'.$post['date'].'</p>';
		return $postOut;
	}
}