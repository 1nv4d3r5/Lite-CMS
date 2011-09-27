<?php
include 'lib.php';
conn();
head();
if(isset($_GET['id']) && $_GET['id']!=''){
$id= $_GET['id'];
$posts = view(1,'id='.$id);
echo post($posts);
}else{
echo 'no posts';
}
footer();