<?php
 ...
case 'login':
$data = json_decode(file_get_contents("php://input"));
$username=$data->username;
$password=md5($data->password);
$akses=$data->aksesuser;
$query=mysqli_query($konek,"SELECT * FROM user WHERE username='$username' AND password='$password' AND level='$akses'");
$hasil=mysqli_fetch_array($query);  
echo json_encode($hasil);
break;
 ..
?>