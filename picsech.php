<!DOCTYPE html>
<html lang="en">
<head>
  <title>อย่ามีปัญหากับคนที่เข้าถึงแปลงสีฟันคุณได้</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row content">
  <form class="form-horizontal" method="post">
  <fieldset>
    <legend> Line Notify </legend>
    <div class="form-group">
      <label for="inputimage" class="col-lg-2 control-label">ค้นหารูปจากเลข 13 หลัก</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputimage" name="inputimage" placeholder="13 หลัก">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">ข้อความเตื่อนความจำ</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"  name="textArea"></textarea>
        <span class="help-block"> </span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<?php 
if ($_POST) { 

//Setting
$lineapi = "vE1y2Cj7TrCg8b2QE5QTK5puWbvyYsRfWi5QEt7pCl2";  //โทเค่น line

$mms =  trim($_POST['textArea']);
$input =  trim($_POST['inputimage']);
$inputimage = 'http://vpn.idms.pw:9977/polis/imagebyte?id=' . $input;   
   
   
date_default_timezone_set("Asia/Bangkok");
//line Send

$chOne = curl_init(); 
curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
// SSL USE 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
//POST 
curl_setopt( $chOne, CURLOPT_POST, 1); 
// Message 
curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms&imageThumbnail=$inputimage&imageFullsize=$inputimage"); 
// follow redirects 
curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
//ADD header array 
$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', ); 
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
//RETURN 
curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
$result = curl_exec( $chOne ); 
//Check error 
if(curl_error($chOne)) { echo 'error:' . curl_error($chOne); } 
else { $result_ = json_decode($result, true); 
echo "status : ".$result_['status']; echo "message : ". $result_['message']; } 
//Close connect 
curl_close( $chOne );      
}
?>
</div>
</div>
</body>
</html>
