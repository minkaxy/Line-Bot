<?php
$access_token = 'E8qWEOBI39lIdamO4U0txPNt8iFz5/hm0YlvSJHBL+ciH9BekWiZ2SnOKRKhbkz22Ja0Z/Tfs2Oa1IeP/DoR0TI4IemSIt1dEQwLuqH+kuqUWUrJL3swZ7Hdj7SGk+2eeX59mZyDmz/EpfXN0pHoVgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
