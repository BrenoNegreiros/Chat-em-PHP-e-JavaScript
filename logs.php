<?php 
$con=mysqli_connect("localhost","id2477082_root","negreiros","id2477082_chatbox");
$result1 = mysqli_query($con,"SELECT * FROM logs ORDER by id DESC");

while($extract = mysqli_fetch_array($result1)){
 echo "<span class='uname'>". $extract['username']. "</span:<span class='msg'>" . $extract['msg']. "</span><br>";
 
}

?>