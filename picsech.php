<?php
$LINEData = file_get_contents('php://input');
$jsonData = json_decode($LINEData, true);

$replyToken = $jsonData["events"][0]["replyToken"];
$userID = $jsonData["events"][0]["source"]["userId"];
$text = $jsonData["events"][0]["message"]["text"];
$timestamp = $jsonData["events"][0]["timestamp"];


function sendMessage($replyJson, $sendInfo)
{
    $ch = curl_init($sendInfo["URL"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $sendInfo["AccessToken"]
        )
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $replyJson);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if($message[0] == "pic"){
    $image_url = "http://vpn.idms.pw:9977/polis/imagebyte?id=".$message[1];
    $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
    $arrayPostData['messages'][0]['type'] = "image";
    $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
    $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
    replyMsg($arrayHeader,$arrayPostData);
}
$lineData['URL'] = "https://api.line.me/v2/bot/message/reply";
$lineData['AccessToken'] = "9EQDL+a4qHdYrNxdDPC/eExmvMrLuaXSJuo6ieNPkFgkJlqeQr2cBJ9+OrPqi9hScSvWQ8EfByd7LFkSXVfM3Td0daGZ9wfmtHnkdU5ETGzDFm3JOiLLj8L17RCdon7qOa2fW8KmugttR5fE+lF1TgdB04t89/1O/w1cDnyilFU=";
$replyJson["replyToken"] = $replyToken;
$replyJson["messages"][0] = $message;
$encodeJson = json_encode($replyJson);
$results = sendMessage($encodeJson, $lineData);
echo $results;
http_response_code(200);
?>
