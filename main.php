<?php

$botToken="128030957:AAGwreQwP9oE3AsRwFlAL56FHstfNPTy6qM";
$website="https://api.telegram.org/bot".$botToken;

$update=file_get_contents($website."/getupdates");

$updateArray=json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");

 ?>
