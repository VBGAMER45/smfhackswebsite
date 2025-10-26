<?php


function template_main()
{
	global $scripturl;

	echo '<table border="0" width="100%" cellspacing="1" cellpadding="5" class="bordercolor">
		<tr class="catbg">
		<td>SMF Theme 1.1.x Theme Generator</td>
		</tr>
		<tr class="windowbg2"><td>';


echo "
<script language=\"Javascript\" src=\"http://www.freesmfhosting.com/Themes/default/ColorPicker2.js\"></script>
<script language=\"JavaScript\">
var cp = new ColorPicker('window');
var last_selected;


//document.styleform.stylename.focus();

function SelectImage(txtbox,picname,picsrc)
{

	if(last_selected != null)
		last_selected.style.backgroundColor = '#FFFFFF';

	//Change the Background color
	txtbox.style.backgroundColor = '#6699CC';


	if(picsrc != 'none')
	document.getElementById(picsrc).src = 'http://www.freesmfhosting.com/gen/' + picname + '.PNG';

	last_selected = txtbox;


}
function UpdateImage(imgbox)
{
	//alert('sq_'  + imgbox);

	document.getElementById('sq_'  + imgbox).style.backgroundColor = document.getElementById(imgbox).value;
}



</script>";

echo'
<form method="POST" action="', $scripturl, '?action=themegen;sa=gen" name="styleform" id="styleform">
  <b>Fill out the following options to generate the style.css for your theme.</b></p>
  <table border="0" cellpadding="0" cellspacing="0" bordercolor="#111111" width="100%">';


//Main Array
	$css_tags = array(

	array('imgsource1', 'img','http://www.freesmfhosting.com/gen/bodybackgroundcolor.PNG','',''),

	array('bodybackgroundcolor', 'color','Background color:','#E5E5E8','This is the background color for the body'),
	//array('bodyimage', 'url','Background image:', '','The image that is the background for your forum'),
	array('bodyfontcolor', 'color','Font Color:','#000000',''),
	array('bodyfontname', 'fontname','Font:', 'verdana, sans-serif','The default font for your forum'),
	array('bodyfontsize', 'fontsize','Font Size:', 'small','The default size of the text on your forum. Small is normally fine.'),



	array('bodylinkcolor', 'color','Link Color:','#476C8E',''),
	array('bodylinkvisit', 'color','Visited Color:','#476C8E',''),
	array('bodylinkhover', 'color','Hover Color:','#476C8E',''),
	array('navlinkcolor', 'color','Nav Link Color:','#000000',''),
	array('navhovercolor', 'color','Nav Hover Color:','#cc3333',''),

	array('imgsource2', 'img','http://www.freesmfhosting.com/gen/windowbg.PNG','',''),

	array('windowbg', 'color','WindowBG Color:','#ECEDF3',''),
	array('windowbgtext', 'color','WindowBG Text Color:','#000000',''),
	array('windowbg2', 'color','WindowBG2 Color:','#F6F6F6',''),
	array('windowbg2text', 'color','WindowBG2 Text Color:','#000000',''),
	array('windowbg3', 'color','WindowBG3 Color:','#E0E1E8',''),
	array('windowbg3text', 'color','WindowBG3 Text Color:','#000000',''),

	array('none', 'img','','',''),

	array('catbgtext', 'color','Category Background Text Color:','#ffffff',''),
	array('catbgcolor', 'color','Category Background Color:','#88A6C0',''),
	array('catbgimage', 'url','Category Background Image:','images/catbg.jpg',''),
	array('cathotvercolor', 'color','Category Hover Color:','#e0e0ff',''),

	array('catbg2text', 'color','Category Background 2 Text Color:','#ffffff',''),
	array('catbg2color', 'color','Category Background 2 Color:','#A1BFD9',''),
	array('catbg2image', 'url','Category Background 2 Image:','images/catbg2.jpg',''),




	array('titlebgtext', 'color','Title Background Text Color:','black',''),
	array('titlebgcolor', 'color','Title Background Color:','#E9F0F6',''),
	array('titlebgimage', 'url','Title Background Image:','images/titlebg.jpg',''),
	array('titlebghovertext', 'color','Title Text Hover Color:','#404040',''),
	array('bordercolor', 'color','Border Color:','#ADADAD',''),
	array('tborder', 'color','Table Border Color:','#696969',''),
	array('tborderbg', 'color','Table Border  Background Color:','#FFFFFF',''),


	array('inputtextbuttonbg', 'color','Input,Textarea, Button Background Color:','',''),
	array('inputtextbuttoncolor', 'color','Input,Textarea, Button Text Color:','#000000',''),
	array('selectcolor', 'color','Select Text Color:','#000000',''),
	array('hrcolor', 'color','HR Color:','#666666',''),
	array('quotetextcolor', 'color','Quote Text Color:','#000000',''),
	array('quotebackgroundcolor', 'color','Quote Background Color:','#D7DAEC',''),
	array('quoteheadercolor', 'color','Quote / Code Header Text Color:','#000000',''),
	array('meactioncolor', 'color','/me Action Color:','red','/me uses this a lot. (emote, try typing /me in a post.)'),
	array('highlightbgcolor', 'color','Highlighted Background Color:','yellow','Highlighted text - such as search results.'),
	array('highlighttextcolor', 'color','Highlighted Text Color:','black','Highlighted text - such as search results.'),






	array('error', 'color','Error Text Color:','red',''),
	array('ajaxtextcolor', 'color','AJAX Text Color:','white',''),
	array('ajaxbgcolor', 'color', 'AJAX Background Color:','#32CD32',''),



	array('tabtextcolor', 'color','Tab Text Color:','white',''),
	array('tabvisitedcolor', 'color','Tab Visited Color:','white',''),
	array('tabhovercolor', 'color','Tab Hover Color:','#e0e0ff',''),


	array('tabfirst', 'url','Tab First Image:','images/maintab_first.gif',''),
	array('tabback', 'url','Tab Back Image:','images/maintab_back.gif',''),
	array('tablast', 'url','Tab Last Image:','images/maintab_last.gif',''),
	array('tabactivefirst', 'url','Tab Active First Image:','default/images/maintab_active_first.gif',''),
	array('tabactiveback', 'url','Tab Active Back Image:','default/images/maintab_active_back.gif',''),
	array('tabactivelast', 'url','Tab Active Last Image:','default/images/maintab_active_last.gif',''),


	array('mirrortabtextcolor', 'color','Mirror Tab Text Color:','white',''),
	array('mirrortabvisitedcolor', 'color','Mirror Tab Visited Color:','white',''),
	array('mirrortabhovercolor', 'color','Mirror Tab Hover Color:','#e0e0ff',''),


	array('mirrortabfirst', 'url','Mirror Tab First Image:','images/mirrortab_first.gif',''),
	array('mirrortabback', 'url','Mirror Tab Back Image:','images/mirrortab_back.gif',''),
	array('mirrortablast', 'url','Mirror Tab Last Image:','images/mirrortab_last.gif',''),
	array('mirrortabactivefirst', 'url','Mirror Tab Active First Image:','images/mirrortab_active_first.gif',''),
	array('mirrortabactiveback', 'url','Mirror Tab Active Back Image:','images/mirrortab_active_back.gif',''),
	array('mirrortabactivelast', 'url','Mirror Tab Active Last Image:','images/mirrortab_active_last.gif',''),



	);

	$current_src = 'imgsource1';
	foreach($css_tags as $key => $tag)
	{
		echo '<tr>';

		if($tag[1] == 'img')
		{
			if($tag[0] != 'none')
			echo '      <td width="100%" colspan="3"><img id="', $tag[0], '" name="', $tag[0], '" width="781" height="326" src="', $tag[2], '" /></td>';
			else
			echo '      <td width="100%" colspan="3">&nbsp;</td>';

			//Set the current Image source
			$current_src = $tag[0];
		}
		else
		{
			//Print out the tag title
			echo '      <td width="33%">', $tag[2], '</td>';
			echo "\n";

			echo '<td width="33%" valign="top"><input type="text" name="',$tag[0],'" id="',$tag[0],'" size="31" value="',$tag[3],'" onFocus="SelectImage(this,\'',$tag[0],'\',\'', $current_src,'\');" ' . ($tag[1] == 'color' ? ' onChange="UpdateImage(\'' . $tag[0] . '\');return false;"' : '') . ' />';

			echo "\n";

			if($tag[1] == 'url' && $tag[3] != '')
			{
				echo ' <img src="https://www.smfhacks.com/Themes/default/' . $tag[3]  . '" />';
			}



			if($tag[1] == 'color')
				 echo "<span id=\"sq_{$tag[0]}\" name=\"sq_{$tag[0]}\" style=\"background-color: {$tag[3]}\" onClick=\"cp.select(document.styleform.{$tag[0]},'sq_{$tag[0]}','pick');return false;\">&nbsp;&nbsp;&nbsp;&nbsp;</span><br /><a href=\"#\" onClick=\"cp.select(document.styleform.{$tag[0]},'sq_{$tag[0]}','pick');return false;\" name=\"pick\" id=\"pick\">Pick A Color</a>";

			echo '</td>';
			echo "\n";
			//Print out the help
			echo '      <td width="34%">', $tag[4], '</td>';
		}

		echo '</tr>';
		echo "\n";
	}



echo '
  </table>

  <p align="center"><!--<input type="submit" value="Preview" name="cmdPreview" />&nbsp;--><input type="submit" value="Create Style" name="cmdCreate" /></p>

</form>
<br />
		</td></tr></table>
		';

}
function template_theme_save()
{
	global $context;
	echo '
	<table border="0" cellspacing="0" cellpadding="4" align="center" width="100%" class="tborder">
			<tr class="titlebg"><td>SMF 1.1.x Style Generated</td></tr>
				<tr class="windowbg">
					<td>
					<b>Copy this text and save it as style.css and use it for your custom theme.</b><br />
					<textarea cols="100" rows="30">', $context['smf_themegen'],'

					</textarea>
					<br />
					Thank you for using SMF Theme Generator! Have any ideas let me know.
					</td></tr>
					</td>
				</tr>
		</table>';
}


?>