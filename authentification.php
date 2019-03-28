<html>
<head>
<title>Authentification</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript"> 
function isEmpty()
{
a=document.getElementById("login");
if(a.value=="")
{alert ("login est obligatoire");}
b=document.getElementById("password");
if(b.value=="")
{alert (" password est obligatoire ");}
}
</script>
<style type="text/css">

body {
	background-color: #FFFFFF;
}
.Style1 {
	color: #000000;
	font-style: italic;
	font-weight: bold;
	font-size: 24px;
}
.Style2 {font-size: medium}
#Layer5 {
	position:absolute;
	width:200px;
	height:28px;
	z-index:4;
	left: 299px;
	top: 24px;
}
.Style3 {
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
}

</style>
</head>
<body>
<center class="Style2"><form name="f" action="connexion.php" method="Post" >
<div id="header"> 
  <div align="center"> 
        <div id="layer" style="position:absolute; width:1640px; height:63px; z-index:3; left: -140px; top: -6px; background-image: url(images/main_bg.gif); layer-background-image: url(images/main_bg.gif); border: 1px none #000000;"> 
          <blockquote> 
            <div align="center"></div>
          </blockquote>
    </div>
    <p>&nbsp;</p>
    <p align="right">&nbsp;</p>
        <div id="layer2" style="position:absolute; width:1636px; height:65px; z-index:3; left: -145px; top: 636px; background-image: url(images/main_bg.gif); layer-background-image: url(images/main_bg.gif); border: 1px none #000000;"> 
          <blockquote>
            <div align="center">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </div>
      </blockquote>
    </div>
    <p>&nbsp;</p>
       <div id="Layer1" bgcolor="#000000" style="position:absolute; width:782px; height:443px; z-index:1; left: 106px; top: 202px; background-image: url(images/wel2.gif); layer-background-image: url(images/wel2.gif); border: 1px none #000000;" > 
          <p>&nbsp;</p>
          <div id="Layer5"><strong><span class="Style1">Authentification</span></strong></div>
          <p>&nbsp;</p>
          <center>
            <table width="547" height="297"  border="0" background="#000000">
             <tr> 
                <td width="570">
</center>
                    <table width="69%" height="166" border="0">
                      <tr> 
                        <td height="47"><span class="Style3"><font color="#000000">Login :</font></span></td>
                        <td width="46%"><input type="text" name="login" id="login" ></td>
                      </tr>
                      <tr> 
                        <td height="54"><span class="Style3"><font color="#000000">Password :</font></span></td>
                        <td><input type="password" name="password" id="password" ></td>
                      </tr>
                      <tr> 
                        <td height="42" colspan="2"> <div align="right"> 
                            <div align="center"> 
                              <input name="submit" type="submit" value="connexion" onClick="isEmpty();">
                            </div>
                            <div align="left"> </div>
                          </div></td>
                      </tr>
                    </table>
                  </center><a href="inscription.php"> </a>
                <div align="center"> 
                    <div class="Style3" id="Layer4" style="position:absolute; width:137px; height:17px; z-index:4; left: 406px; top: 300px;"><a href="inscription.php"><font color="#000000">Inscription</font></a></div>
                  </div>
                </td>
            </tr>
          </table>
            <p align="center"><a href="index.html"><img src="images/home.jpg" width="54" height="35" border="0"></a><font color="#FFCC00"><a href="authentification.php"><img src="images/quitter.jpg" width="54" height="35" border="0" onclick="window.close();" /></a></font></p>
            <p align="center">&nbsp;</p>
          </center>

      </div>
</div></form>
</center>
</body>
</html>