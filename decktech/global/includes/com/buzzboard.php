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







<br />
<b>Fatal error</b>:  Call to undefined function  table_header() in <b>/home/decktech/public_html/global/includes/com/buzzboard.php</b> on line <b>224</b><br />
