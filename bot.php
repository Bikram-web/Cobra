<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if($message == "/start") {
    sendMessage($chat_id, "Welcome all of the Lions Family.

We are set to dominate the crypto world.
We will not cheat like other mining apps. So trust us and do mining with us. We will return your work gift as soon as possible.

Follow our official channels :

YouTube : https://youtube.com/@lionsapp?si=HoLiQl8QXoDsQ1zi
Telegram community : https://t.me/Lionshome_community

𝙿𝙻𝙰𝚈 𝙽𝙾𝚆✅");
}

function sendMessage($chat_id, $message) {
    $apiToken = "8071702544:AAEu8Sjq1Fhzlh38zaL1RBBpIdSV_9U6TO8";
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=".urlencode($message);
    file_get_contents($url);
}
?>
