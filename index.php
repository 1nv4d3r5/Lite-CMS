<?php
include 'lib.php';
conn();
head();
$posts = view(2,'');
echo posts($posts);
footer();