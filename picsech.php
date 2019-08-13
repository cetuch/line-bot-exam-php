<?php
    $accessToken = "vE1y2Cj7TrCg8b2QE5QTK5puWbvyYsRfWi5QEt7pCl2";
    
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    

if($message[0] == "รูป"){
    $image_url = "http://vpn.idms.pw:9977/polis/imagebyte?id=".$message[1];
    $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
    $arrayPostData['messages'][0]['type'] = "image";
    $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
    $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
    replyMsg($arrayHeader,$arrayPostData);
}
function replyMsg($arrayHeader,$arrayPostData){
    $strUrl = "https://api.line.me/v2/bot/message/reply";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$strUrl);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
    curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close ($ch);
}
exit;
?>
