<?php
include 'lib.php';
conn();
head();
if(isset($_POST['title']) && $_POST['title']!='' && isset($_POST['summary']) && $_POST['summary']!='' && isset($_POST['context']) && $_POST['context']!=''){

$fields['title']= $_POST['title'];
$fields['summary']= $_POST['summary'];
$fields['context'] = $_POST['context'];
$s = insertPost($fields);
	if($s){
		$posts = view(1,'1=1 order by date DESC');
		echo posts($posts);
	}else{
		echo 'olmadı';
	}
}
echo '
<form action="add.php" method="post">
	Başlık:<br />
	<input type="text" name="title" /><br />
	Özet:<br />
	<textarea name="summary" id="" cols="30" rows="10"></textarea><br />
	Devamı:<br />
	<textarea name="context" id="" cols="30" rows="10"></textarea>
	<input type="submit" value="Kaydet" />
</form>
';
footer();
