<?php
$json = file_get_contents('https://api.roblox.com/users/get-by-username?username=' . $_GET["username"]);
$data = json_decode($json,true);
$id = $data['Id'];
Header("Location: https://www.roblox.com/bust-thumbnail/image?userId=" . $id . "&width=420&height=420&format=png");
