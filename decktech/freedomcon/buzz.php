
<html><!-- #BeginTemplate "/Templates/freedom.dwt" -->
<head>
<title>FreedomCon - United We Stand</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {  margin: 0px 0px; border: none; font: 10pt Verdana, Arial, Helvetica, sans-serif; color: #000000}
.legal {  font: 6pt Verdana, Arial, Helvetica, sans-serif; color: #CCCCCC}
td {  font: 9pt Verdana, Arial, Helvetica, sans-serif}
.nav {  font-size: 8pt; color: #FFFFFF; text-decoration: none}
-->
</style>
</head>

<body bgcolor="#000E58" margin="0" marginwidth="0" marginheight="0">
<table width="93%" border="0" cellspacing="0" cellpadding="0" vspace="0" hspace="0">
  <tr> 
    <td colspan="2" height="97"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" vspace="0" hspace="0">
        <tr>
          <td><img src="/freedomcon/gfx/freeblue.gif" width="266" height="123" border="0"> 
          </td>
          <td valign="middle" align="center">&nbsp; </td>
        </tr>
      </table>
      
    </td>
    <td width="42" height="97">&nbsp;</td>
  </tr>
  <tr> 
    <td width="144">&nbsp;</td>
    <td width="541" bgcolor="#999999">&nbsp;</td>
    <td width="42">&nbsp;</td>
  </tr>
  <tr> 
    <td width="144" valign="top"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr valign="top"> 
          <td height="149"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr> 
                <td class="legal"><a href="/freedomcon/index.php" class="nav">Home</a></td>
              </tr>
              <tr> 
                <td><a href="/freedomcon/about.php" class="nav">About FreedomCon</a></td>
              </tr>
              <tr> 
                <td><a href="/freedomcon/sponsors.php" class="nav">Our Sponsors</a></td>
              </tr>
              <tr> 
                <td><a href="/freedomcon/contact.php" class="nav">Contact Us</a></td>
              </tr>
              <tr> 
                <td><a href="/freedomcon/attend.php" class="nav">Players Attending</a></td>
              </tr>
              <tr> 
                <td><a href="/freedomcon/donate.php" class="nav">Donations and Charity</a></td>
              </tr>
              <tr>
                <td><a href="/freedomcon/buzz.php" class="nav">Discuss FreedomCon 2!</a></td>
              </tr>				  
			  
            </table>
            
          </td>
        </tr>
      </table>

      <!-- #BeginEditable "nav" --> <!-- #EndEditable --><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF"><br>
      </font>
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr valign="top"> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF"><b><br>
            What:<br>
            FreedomCon</b> <br>
            Philadelphia 2002<br>
            <br>
            <b>When:</b> <br>
            October 4-6 <br>
            <br>
            <b>Where:</b> <br>
            NeoQuest Games<br>
            Gary's Plaza<br>
            531 South Broad Street<br>
            Lansdale, PA 19446<br>
            </font><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">215 
            855 7035</font></td>
        </tr>
      </table>
      <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"></font></td>
    <td width="541" bgcolor="#FFFFFF" valign="top" background="/freedomcon/gfx/Vegasxflcam.jpg"><!-- #BeginEditable "body" --> 
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr> 
          <td valign="top" height="461" width="57%"> <br>

<script language="javascript">

echo "test";

// This makes certain pages private, for members only. Neal 10-2013
if ($access == "" )
{
echo "<table bgcolor='#ffffff' width=500><tr><td><P>This area of DeckTech is now restricted to members only. You must be logged in to view this page.
Go to <a href='http://www.decktech.net/'> DeckTech.net </a> to log in";
echo "<P>If you are not a member, and would like to spy on a member, you are cordially invited to kiss off.</td></tr></table>";
exit;
}

function getpreviewwin()
{
texttoshow = document.buzzboardform.convertedtext.value;
prev1 = window.open('','previewwindow','width=150,height=100,resizable=yes,left=300,top=300');
prev1.document.writeln("<font size='2' face='verdana'>The text you have entered will look like this:<p>");
prev1.document.writeln(texttoshow);
}

function changetobold()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<b>"+newtext+"</b>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetoitalic()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<i>"+newtext+"</i>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetounderline()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<u>"+newtext+"</u>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetospoiler()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "(drag mouse to see spoiler)<div style=background-color:red;color:red;foreground-color:red>"+newtext+"</div>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetourl()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
linkyaddress = document.buzzboardform.texttoconvert.value;
oldtext=document.buzzboardform.convertedtext.value + "<a href="+linkyaddress+" target=x>"+newtext+"</a>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetoquote()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<blockquote><i>"+newtext+"</i></blockquote>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetoimage()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<img src="+newtext+">";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetored()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<font color=#ff0000>"+newtext+"</font>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetoblue()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<font color=#0000ff>"+newtext+"</font>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function changetoyellow()
{
newtext = document.buzzboardform.texttoconvert.value;
document.buzzboardform.convertedtext.value = "";
oldtext=document.buzzboardform.convertedtext.value + "<font color=#ffff00>"+newtext+"</font>";
document.buzzboardform.convertedtext.value = oldtext;
document.buzzboardform.convertedtext.focus()
}

function oldchangetobold()
{
newtext = prompt("Bold Text", "Enter your text to convert to Bold Face here");
oldtext=document.buzzboardform.comments.value + "<b>"+newtext+"</b>";
document.buzzboardform.comments.value = oldtext;
document.buzzboardform.comments.focus()
}

function oldchangetoitalic()
{
newtext = prompt("Italic Text", "Enter your text to convert to Italic Face here");
oldtext=document.buzzboardform.comments.value + "<i>"+newtext+"</i>";
document.buzzboardform.comments.value = oldtext;
document.buzzboardform.comments.focus()
}

function oldchangetounderline()
{
newtext = prompt("Underlined Text", "Enter your text to Underline here");
oldtext=document.buzzboardform.comments.value + "<u>"+newtext+"</u>";
document.buzzboardform.comments.value = oldtext;
document.buzzboardform.comments.focus()
}

function oldchangetoquote()
{
newtext = prompt("Quote Another", "Enter the text you want to Quote here");
oldtext=document.buzzboardform.comments.value + "<blockquote><i>"+newtext+"</i></blockquote>";
document.buzzboardform.comments.value = oldtext;
document.buzzboardform.comments.focus()
}

function oldchangetourl()
{
newtext = prompt("Make a Link", "Enter your text to describe your link here");
linkyaddress = prompt("Make a Link You MUST use the http:// to start!", "Enter the address you want to link to here. You must include http://");
oldtext=document.buzzboardform.comments.value + "<a href="+linkyaddress+" target=x>"+newtext+"</a>";
document.buzzboardform.comments.value = oldtext;
document.buzzboardform.comments.focus()
}

function oldchangetoimage()
{
newtext = prompt("Post an Image: DO NOT ABUSE THIS FEATURE! You must use the http:// format", "Enter the url of your image from the internet. This may be found by right clicking on an image and selecting properties. You must use the http:// format");
oldtext=document.buzzboardform.comments.value + "<img src="+newtext+">";
document.buzzboardform.comments.value = oldtext;
document.buzzboardform.comments.focus()
}

</script>







<table width="100%" border="0" cellspacing="0" cellpadding="3" class="border"><tr class="header_bg"><td height="2"><font class="h1font"><table border="0" cellspacing="0" cellpadding="0" width="100%" vspace="0" hspace="0"><tr><td><font class="h1font"></td><form method='post' action=''><td align='right' valign='bottom'><select name='select' onChange='go(this)'><option selected>More DeckTech Buzz Boards</option><option value='#'> </option><option value='/starwarsccg/resources/buzz.php'>Star Wars: CCG</option><option value='/heroclix/resources/buzz.php'>HeroClix</option><option value='/vs/resources/buzz.php'>Marvel VS</option><option value='/lotr/resources/buzz.php'>Lord of the Rings</option><option value='/premium/resources/buzz.php'>Premium Tech Support</option><option value='/magic/resources/buzz.php'>Video Games and Movies</option><option value='/wars/forums/buzz.php'>Wizards Minis</option></select></td></form></tr></table></B></font></td></tr><tr valign="top"><td><table cellspacing=0 cellpadding=1 border=0 bordercolor='#ffffff'

 bgcolor=#EFF1FF width='100%'><tr>



<form method='post' action='/freedomcon/buzz.php' name=''>

<TD valign='top' align='left'>

<input type='submit' value='Add New Topic' name='rumoradd'></TD>

</form>



 <form action='/freedomcon/buzz.php' method='post'>

<td valign='top' align='right'><input type='text size='10' name='searchstring'>

 &nbsp; <input type='submit' value='Search Posts' ><BR><a href='/freedomcon/buzz.php?advancedsearch=1'>Advanced

 Search</a>



 </td></form></tr><tr><td valign='top' width='50%'><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>General Interest Topics</b></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10067' class='rumor'> women and such </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;Phil78  @ <font size='1'>13:46 TODAY! *****</font><BR> &nbsp;&nbsp;&nbsp;&nbsp;220 comments &nbsp; 408 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10127' class='rumor'> Premiere Star Wars CCG revisited </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;Phil78  @ <font size='1'>09:37 TODAY! *****</font><BR> &nbsp;&nbsp;&nbsp;&nbsp;431 comments &nbsp; 276 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10100' class='rumor'> The Travel Thread </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>12:35 2014-04-29 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;40 comments &nbsp; 220 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">Neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9899' class='rumor'> Game of Thrones TV </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;Phil78  @ <font size='1'>21:10 2014-04-28 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;464 comments &nbsp; 266 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9033' class='rumor'> Stock Market TCG</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;BartmanMLV  @ <font size='1'>12:30 2014-04-28 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;2473 comments &nbsp; 265 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8648' class='rumor'> It&#39;s the most wonderful time of the year. 
NHL Playoffs !!!</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;Iceman  @ <font size='1'>19:51 2014-04-26 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;2908 comments &nbsp; 245 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/premium/main/mpage.php?member=42">Iceman </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9584' class='rumor'> Movie Discussion </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>15:07 2014-04-25 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;2314 comments &nbsp; 223 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/starwarsccg/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=7600' class='rumor'> The Real TV Thread</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;The Judge  @ <font size='1'>09:57 2014-04-25 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;2254 comments &nbsp; 299 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/lotr/main/mpage.php?member=2021">Serpent </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9000' class='rumor'> Movie Review Thread </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>12:49 2014-04-23 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;462 comments &nbsp; 199 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9138' class='rumor'> American Auto Makers = Teh stoopid</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>13:22 2014-04-16 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;2264 comments &nbsp; 236 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10278' class='rumor'> See BEARS in theaters; help charity, get membership! </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>14:12 2014-04-14 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;5 comments &nbsp; 135 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=7577' class='rumor'> Red vs. Blue:  The Judge hates Bush and Nitsuj does, too.  Liberals suck.  Conse...</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>13:14 2014-04-07 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;8851 comments &nbsp; 248 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/lotr/main/mpage.php?member=17798">Mike Hockenballs </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10115' class='rumor'> The United Kingdom, could it bloody well be DONE FOR? </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>09:57 2014-04-07 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;28 comments &nbsp; 139 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9831' class='rumor'> DeckTech website changes log </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>09:11 2014-04-01 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;100 comments &nbsp; 137 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=5783' class='rumor'> News o&#39; the Day</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;Darth Bear  @ <font size='1'>12:43 2014-03-27 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;1538 comments &nbsp; 186 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/heroclix/main/mpage.php?member=17517">JacinB </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9801' class='rumor'> Recommended Anime for otaku </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>11:13 2014-03-26 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;46 comments &nbsp; 137 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10098' class='rumor'> Gun Control, executive actions and the POTUS. </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;boothwah  @ <font size='1'>10:45 2014-03-25 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;832 comments &nbsp; 142 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10274' class='rumor'> The new state of "Jefferson". Will it happen? </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;BartmanMLV  @ <font size='1'>00:05 2014-03-25 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;11 comments &nbsp; 135 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10270' class='rumor'> Defining types of "work". And which do you prefer? </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;BartmanMLV  @ <font size='1'>00:01 2014-03-25 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;33 comments &nbsp; 137 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/magic/main/mpage.php?member=17">neal </a></I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9681' class='rumor'> tech thread </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;<a href="http://www.decktech.net/magic/main/mpage.php?member=17">Dredlox�</a> @ <font size='1'>07:07 2014-03-23 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;2053 comments &nbsp; 259 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I><a href="http://www.decktech.net/starwarsccg/main/mpage.php?member=17">neal </a></I></td></tr><TR><form method='post' action='/freedomcon/buzz.php' name=''>

<TD valign='bottom' align='left' bgcolor=#FFFFFF>

<input type='submit' value='Add New Topic' name='rumoradd'>

<BR>

<font class="afont"> Showing 1 - 20 of 1671

<A HREF='/freedomcon/buzz.php?shownlast=20'>Next</A>

</TD></form>



</TR></table></td><td valign='top' width='50%'><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>FreedomCon Topics</b></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9811' class='rumor'> THIS IS NOW THE SUPER SECRET SECTION OF THE BUZZBOARDS FOR COOL KIDS ONLY </a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp; @ <font size='1'>16:24 2010-07-19 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;0 comments &nbsp; 137 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I>AYATOLLAH BOOTHAMENI </I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=3579' class='rumor'> Anyone staying at the Best Western?  Post here.</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;boothwah  @ <font size='1'>15:32 2010-07-19 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;5 comments &nbsp; 131 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I>Mike Carr</I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=3571' class='rumor'> Things To Do At FreedomCon II</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;Hayes  @ <font size='1'>15:29 2010-07-19 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;3 comments &nbsp; 132 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I>Mike Carr</I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=3547' class='rumor'> Star Wars CCG Players Committee Support</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;BlackViper @ <font size='1'>00:00 2002-10-11 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;6 comments &nbsp; 131 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I>Mike Carr</I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=3581' class='rumor'> On my Way</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;mc9457 @ <font size='1'>00:00 2002-10-03 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;1 comments &nbsp; 131 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I>Mike Carr</I></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=3568' class='rumor'> Going to Fcon? Bring your Butchers :)</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#EFF1FF><font class="bfont"> &nbsp;&nbsp;&nbsp;yavinite @ <font size='1'>00:00 2002-10-02 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;6 comments &nbsp; 131 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I>Yoda Killa</I></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=3548' class='rumor'> Charity Drawing</a></b></font></center></td></tr><tr><td valign='top' align='left'  bgcolor=#FFFFFF><font class="bfont"> &nbsp;&nbsp;&nbsp;mc9457 @ <font size='1'>00:00 2002-10-02 </font><BR> &nbsp;&nbsp;&nbsp;&nbsp;3 comments &nbsp; 131 views <BR>&nbsp;&nbsp;&nbsp;&nbsp;Originator: <I>Mike Carr</I></td></tr><TR><form method='post' action='/freedomcon/buzz.php' name=''>

<TD valign='bottom' align='left' bgcolor=#FFFFFF>

<input type='submit' value='Add New Topic' name='rumoradd'>

<BR>

<font class="afont"> Showing 0 - 7 of 1671

<A HREF='/freedomcon/buzz.php?shownlastlocal=7'>Next</A>

</TD></form>



</TR></table><center><p><font size='3'><b>Other DeckTech Discussions</b></font><p></center><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Star Wars CCG Topics</b>

&nbsp;<a href='http://www.decktech.net/starwarsccg/resources/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10277' class='rumor'> Cards for sell
http://www.endgamecards.com </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>06:51 2014-04-23 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10131' class='rumor'> Introducing WWII: The Card Game </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>07:28 2013-12-14 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=7707' class='rumor'> HAPPY MUTHA F&#39;N THANKSGIVING!</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>12:43 2013-11-28 </font></center></td></tr></table><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Lord of the Rings Topics</b>

&nbsp;<a href='http://www.decktech.net/lotr/resources/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10107' class='rumor'> HEX! 

  </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>18:34 2013-11-25 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10091' class='rumor'> Ascension is FREE (on iOS till Dec. 19th) </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>16:46 2013-09-17 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=2707' class='rumor'> What would you say, of all the companions, is the all out best to have?  All fac...</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>12:04 2013-01-16 </font></center></td></tr></table><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Video Game & Movies Topics</b>

&nbsp;<a href='http://www.decktech.net/magic/resources/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8069' class='rumor'> Micro$oft says &#39;We and Nintendo are frimbazeling Sony over hardcore&#39;</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>13:02 2013-12-09 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8542' class='rumor'> Classic Games played and recommendations</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>15:29 2013-09-18 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8706' class='rumor'> What is a microsoft zone, or something?</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>15:40 2013-09-12 </font></center></td></tr></table><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Boothlandia Topics</b>

&nbsp;<a href='http://www.decktech.net/swtcg/resources/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=10123' class='rumor'> Recently posted to their Facebook page:

Our Story

 It�s now the ten year a...</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>00:01 2013-11-24 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8116' class='rumor'> Some random pictures</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>17:14 2012-04-28 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8048' class='rumor'> Boothlandia : Question of the Day</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>13:55 2011-11-24 </font></center></td></tr></table><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Premium Member Topics</b>

&nbsp;<a href='http://www.decktech.net/premium/resources/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=7928' class='rumor'> Test Sigs!</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>11:43 2007-05-24 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8473' class='rumor'> Tick Tock</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>11:50 2006-12-20 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8036' class='rumor'> Thank God.</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>08:00 2006-05-02 </font></center></td></tr></table><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Heroclix Topics</b>

&nbsp;<a href='http://www.decktech.net/heroclix/resources/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8259' class='rumor'> Help with Heroclix</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>11:27 2012-01-06 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9312' class='rumor'> WizKids goes under! </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>23:46 2010-03-30 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=7801' class='rumor'> Heroclix Realms... kinda annoying.</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>08:58 2006-07-11 </font></center></td></tr></table><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Versus Topics</b>

&nbsp;<a href='http://www.decktech.net/vs/resources/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=7472' class='rumor'> Lets talk about sex</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>16:46 2013-12-23 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8606' class='rumor'> UDE update - OP system in the shimmerter - game over</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>23:36 2010-05-26 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=7247' class='rumor'> </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>16:11 2010-01-12 </font></center></td></tr></table><p><table cellspacing=0 cellpadding=4 border=1 bordercolor='#ffffff'

 bgcolor=#EFF1FF width=100%><tr><td><b>Latest Star Wars and Axis&Allies Topics</b>

&nbsp;<a href='http://www.decktech.net/wars/forums/buzz.php'>see all topics</a></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9725' class='rumor'> Minis and RPG ending </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>16:04 2014-01-05 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#EFF1FF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=8524' class='rumor'> Board games - tell me some good ones</a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>03:35 2013-09-15 </font></center></td></tr><tr><td align='left' valign='middle' bgcolor=#FFFFFF><BR><center><font class="bfont"><b><A HREF='/freedomcon/buzz.php?id=9183' class='rumor'> Begun, the Clone Wars have. </a></b></font><BR><font class="bfont"> &nbsp;&nbsp;&nbsp; <font size='1'>14:14 2009-11-06 </font></center></td></tr></table></td></tr></table></font></td></tr></table><script language='javascript'>function quoteboard(quotetext){document.buzzboardform.comments.value = '<i>'+quotetext+'</i><p>';}</script>
<!-- advertising code -->
<!-- Kontera ContentLink(TM);-->
<!--
<script type='text/javascript'>
var dc_AdLinkColor = 'blue' ; 
var dc_PublisherID = 157626 ; 
</script>
<script type='text/javascript' src='http://kona.kontera.com/javascript/lib/KonaLibInline.js'>
</script>
-->
<!-- rumors board code end -->

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>&nbsp;</p>
            </td>
        </tr>
      </table>
      <!-- #EndEditable --></td>
    <td width="42">&nbsp;</td>
  </tr>
  <tr> 
    <td width="144">&nbsp;</td>
    <td width="541" bgcolor="#999999">&nbsp;</td>
    <td width="42">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3"> 
      <p align="center" class="legal"><span class="legal"><span class="legal"><span class="legal"><br>
        Legal- TM & � 1998 Lucasfilm Ltd. All Rights Reserved. Star Wars and related 
        marks are trademarks of Lucasfilm Ltd. TM & � 1998 Decipher Inc. Decipher, 
        Customizable Card Game, The Art of Great Games and associated marks and 
        intellectual property are exclusively owned by Decipher Inc. All Rights 
        Reserved. THIS Web Site IS NOT PRODUCED OR ENDORSED BY DECIPHER, INC OR 
        LUCASFILM LTD OR PARAMOUNT PICTURES. STAR TREK. </span></span></span> 
        <span class="legal"><span class="legal"><br>
        <span class="legal"> TM & � 2002 www.decktech.net. All Rights Reserved. 
        </span></span></span><br>
        <br>
      </p>
      </td>
  </tr>
</table>
<br>
<br>
<br>
<br>
</body>
<!-- #EndTemplate --></html>
