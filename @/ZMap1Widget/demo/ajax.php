<?php
if(isset($_POST['submit'])){
    $comment = $_POST['comment'];
    echo $comment;
}
else echo "POST not found";

?>