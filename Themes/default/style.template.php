<?
/*
Copyright 2005-2006 SMFHacks.com
*/

if (!defined('SMF'))
	die('Hacking attempt...');

function template_main()
{
	global $scripturl, $smcFunc, $user_info;



		echo '<div class="tborder" style="margin-bottom: 2px;">
		<div class="titlebg" style="padding: 4px; font-weight: bold;">Styles and Themes</div><div class="windowbg" style="padding: 4px;">';

		echo '<a href="https://www.smfhacks.com/?action=style;sa=addstyle">Add a Style</a><br />';
		echo '<hr />';

		echo '<br />';
		//Now List all the themes
			$q = "SELECT h.ID_STYLE, h.ID_MEMBER, sl.title stylelink, h.stylename, h.version, h.author, h.approved, h.shortdesc FROM {db_prefix}style AS h, {db_prefix}style_lookup AS sl WHERE  sl.ID_STYLE = h.ID_STYLE   ORDER BY ID_STYLE DESC";
			$res = $smcFunc['db_query']('',$q);

				echo '<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
					<tr>
						<th class="catbg" width="20%">Image</td>
						<th class="catbg" width="40%">Name</td>
						<th class="catbg" width="15%" align="center">Author</td>
						<th class="catbg" width="25%">SMF Version</td>

					</tr>
					<tr>
				<td colspan="2">
								<br />
								<ul><a href="https://www.smfmobile.com"><b>Featured: SMF4Mobile From SMFSMFMobile.com</b></a><br />

									<li>Enhancing users experience on smart phones and tablets.</li>
									<li>Valid for unlimited sites owned by you!</li>
									<li><a href="https://www.smfmobile.com">Click here for more information</a>
			</ul>
			<td>SMFMobile.com</td>
			<td>SMF 2.0.x</td>

			</td>
				</tr>
					';


			while($arr = $smcFunc['db_fetch_assoc']($res))
			{
				echo '<tr>';
				echo '<td class="windowbg2"><a href="https://www.smfhacks.com/styles/' . $arr['stylelink'] . '.html"><img src="https://www.smfhacks.com/themeimages/' . $arr['stylename']  . '.gif" /></a></td>';
				echo '<td class="windowbg2"><b><a href="https://www.smfhacks.com/styles/' . $arr['stylelink'] . '.html">' . $arr['stylename'] . '</a></b>';
				if($user_info['id']  == $arr['ID_MEMBER'])
				{
					echo '<b>&nbsp;<a href="' . $scripturl . '?action=style;sa=updatestyle&id=' . $arr['ID_STYLE'] . '">[Edit]</a>&nbsp;<a href="' . $scripturl . '?action=style;sa=deletestyle&id=' . $arr['ID_STYLE'] . '">[Delete]</a></b>';

				}
				echo '<br />';
				echo stripslashes($arr['shortdesc']) . '</td>';
				echo '<td class="windowbg2" align="center">' . stripslashes($arr['author']) . '</td>';





				echo '<td class="windowbg2">' . $arr['version'] . '</td>';
				echo '</tr>';
			}
			$smcFunc['db_free_result']($res);


		echo '</table><br />';


		echo '</div></div></div>';



}
function template_view_style()
{
	global $smcFunc, $scripturl, $user_info;

	$title=$_GET['title'];

	$id = ' ';
	if($title == '')
	{
		$id= (int) $_GET['id'];
		if($id=='')
			fatal_error('No style selected to view.', false);
	}
	else
	{
	$title=addslashes($title);
	$res = $smcFunc['db_query']('', "SELECT ID_STYLE FROM {db_prefix}style_lookup WHERE title='$title'");
	$arr = $smcFunc['db_fetch_assoc']($res);
		$id = $arr['ID_STYLE'];

	}

	$q = "SELECT h.ID_STYLE, h.ID_MEMBER, h.description, h.stylename, h.demourl, h.authorsite, h.author, h.created, h.lastupdated, h.approved, h.shortdesc,h.version, h.downloadurl, m.real_name FROM {db_prefix}style AS h, {db_prefix}members AS m  WHERE h.ID_MEMBER = m.ID_MEMBER AND h.ID_STYLE ='$id'";
	$res = $smcFunc['db_query']('',$q);
	$arr = $smcFunc['db_fetch_assoc']($res);

echo '<div class="tborder">
<b><font size="5">' . stripslashes($arr['stylename']) .'</font></b>';
//See if the user owns this posting
if($user_info['id'] == $arr['ID_MEMBER'])
{
	echo '<b>&nbsp;<a href="' . $scripturl . '?action=style;sa=updatestyle&id=' . $id . '">[Edit]</a>&nbsp;<a href="' . $scripturl . '?action=style;sa=deletestyle&id=' . $id . '">[Delete]</a></b>';

}

echo '<br /><img src="https://www.smfhacks.com/themeimages/' . $arr['stylename']  . '.gif" border="1" />
<br />
<b>Author:</b> ' . stripslashes($arr['author']) . '<br />
<b>Submitted by:</b> <a href="' . $scripturl . '?action=profile;u=' . $arr['ID_MEMBER'] . '">' .$arr['real_name'] . '</a><br />

';


if($arr['authorsite']!='')
{

	if(substr($arr['authorsite'], 0,7) != "http://")
		$arr['authorsite'] = 'http://' . $arr['authorsite'];

	echo '<b>Author Website:</b><a href="' . $arr['authorsite'] . '" rel="nofollow"  target="_blank">' . $arr['authorsite'] . '</a><br />';
}

echo '<b>Date Submitted:</b> ' . $arr['created'] . '<br />
<b>Last Updated:</b> ' . $arr['lastupdated'] . '<br />';

if($arr['demourl']!='')
{
	if(substr($arr['demourl'], 0,7) != "http://")
		$arr['demourl'] = 'http://' . $arr['demourl'];
	echo'<b>Demo Url:</b><a href="' . $arr['demourl'] . '" rel="nofollow"  target="blank">' . $arr['demourl'] . '</a><br />';
}




echo '<b>Supported Version:</b> ' . $arr['version'] . '<br />
<b>Short Description</b><br />';
echo stripslashes(nl2br($arr['shortdesc']));
echo '
<br />
<b>Downloads:</b><br />
<b><a href="' . $arr['downloadurl'] . '" rel="nofollow"  target="blank">' . $arr['downloadurl'] . '</a></b><br />

<br />
<b>Detailed Description:</b><br />';
echo stripslashes(nl2br($arr['description']));




echo '<br />
<b>Latest Ratings:</b>&nbsp;<a href="'.$scripturl.'?action=style;sa=rating&id=' . $arr['ID_STYLE'] . '">[Add Rating]</a><br />';

 //Get the latest ratings
 $q3 = "SELECT r.ID_STYLE, r.ID,r.ID_MEMBER, m.real_name, r.date, r.value,r.description FROM {db_prefix}style_ratings AS r, {db_prefix}members AS m  WHERE r.ID_MEMBER = m.ID_MEMBER AND r.ID_STYLE='$id' ORDER BY r.ID DESC LIMIT 5";
 $res3 = $smcFunc['db_query']('',$q3);
 while($arr3 = $smcFunc['db_fetch_assoc']($res3))
 {

 	if($arr3['value'] == 1)
 		$rate_icon = 'thumbup.gif';
 	else if($arr3['value'] == -1)
 		$rate_icon = 'thumbdown.gif';
 	else
 		$rate_icon = 'xx.gif';


 	echo '
	<div class="titlebg" style="padding: 4px; font-weight: bold;"><img src="https://www.smfhacks.com/Themes/babylon/images/post/' . $rate_icon . '" />&nbsp;' . timeformat($arr3['date']) . '&nbsp;<a href="'.$scripturl.'?action=profile;u=' . $arr3['ID_MEMBER'] . '">' . $arr3['real_name'] . '</a>&nbsp;wrote:</div>
	<div class="windowbg" style="padding: 4px; ">' . nl2br($arr3['description']) . '</div>';

 }

echo '</div>';

}
function template_add_style()
{
global $scripturl;

echo '<div class="tborder">
<p><b><font size="5">Add Style</font></b></p>
<p><font color="#FF0000">* Required</font></p>
One rule only submit the style/theme that you have made.<br />
<form enctype="multipart/form-data" method="POST" action="'.$scripturl.'?action=style;sa=addstyle2">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="163">
  <tr>
    <td width="16%" height="22">Title <font color="#FF0000">* </font></td>
    <td width="84%" height="22"><input type="text" name="title" size="40" /></td>
  </tr>
  <tr>
    <td width="16%" height="36" valign="top">Short Description (100 Characters Max) <font color="#FF0000">* </font></td>
    <td width="84%" height="36"><input type="text" name="sdes" size="40" maxlength="100" /></td>
  </tr>
  <tr>
  <tr>
    <td width="16%" height="36" valign="top">Description <font color="#FF0000">* </font></td>
    <td width="84%" height="36"><textarea rows="5" name="description" cols="52"></textarea></td>
  </tr>
  <tr>
    <td width="16%" height="22">Author <font color="#FF0000">*</font></td>
    <td width="84%" height="22"><input type="text" name="author" size="40" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Author Website</td>
    <td width="84%" height="22">
    <input type="text" name="authorwebsite" size="40" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Demo Url</td>
    <td width="84%" height="22"><input type="text" name="demourl" size="40" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Version</td>
    <td width="84%" height="22"><input type="text" name="version" size="40" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Download Url</td>
    <td width="84%" height="22"><input type="text" name="downloadurl" size="40" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Theme Image/Screenshot<font color="#FF0000">* </font></td>
    <td width="84%" height="22"><input type="file" name="themeimage" size="40" /><br />
    <i>Must be 120x120 and a gif image</i>
    </td>
  </tr>
  <tr>
    <td width="100%" align="center" colspan="2">
    <input type="submit" value="Add Style" name="cmdAddStyle" /></td>
  </tr>
</table>
</form>
</div>
';

}
function template_update_style()
{
global $scripturl, $smcFunc, $user_info;

$id= (int) $_GET['id'];
if(empty($id))
	fatal_error('No Style selected to update', false);

//Get the information
$q = "SELECT ID_STYLE, stylename, description, downloadurl, shortdesc, author, authorsite, demourl, ID_MEMBER, version FROM {db_prefix}style where ID_STYLE='$id'";
$res = $smcFunc['db_query']('',$q);
$arr = $smcFunc['db_fetch_assoc']($res);
$smcFunc['db_free_result']($res);

if($user_info['id'] != $arr['ID_MEMBER'])
	fatal_error('This style does not belong to you! You are a very bad person.', false);




echo '
<p><b><font size="5">Update Style</font></b></p>
<p><font color="#FF0000">* Required</font></p>
<form enctype="multipart/form-data" method="POST" action="'.$scripturl.'?action=style;sa=updatestyle2" enctype="multipart/form-data">
<input type="hidden" name="id" value="' . $arr['ID_STYLE'] . '">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="163">
  <tr>
    <td width="16%" height="22">Title <font color="#FF0000">* </font></td>
    <td width="84%" height="22"><input type="text" name="title" size="40" value="'. $arr['stylename'] . '" /></td>
  </tr>
  <tr>
    <td width="16%" height="36" valign="top">Short Description (100 Characters Max) <font color="#FF0000">* </font></td>
    <td width="84%" height="36"><input type="text" name="sdes" size="40" maxlength="100" value="' . $arr['shortdesc'] . '" /></td>
  </tr>
  <tr>
  <tr>
    <td width="16%" height="36" valign="top">Description <font color="#FF0000">* </font></td>
    <td width="84%" height="36"><textarea rows="5" name="description" cols="52">' . $arr['description'] . '</textarea></td>
  </tr>
  <tr>
    <td width="16%" height="22">Author <font color="#FF0000">*</font></td>
    <td width="84%" height="22"><input type="text" name="author" size="40" value="'. $arr['author'] . '" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Author Website</td>
    <td width="84%" height="22">
    <input type="text" name="authorwebsite" size="40" value="' . $arr['authorsite'] .  '" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Demo Url</td>
    <td width="84%" height="22"><input type="text" name="demourl" size="40" value="'. $arr['demourl'] . '" /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Version</td>
    <td width="84%" height="22"><input type="text" name="version" size="40" value="'. $arr['version'] . '"  /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Download Url</td>
    <td width="84%" height="22"><input type="text" name="downloadurl" size="40" value="'. $arr['downloadurl'] . '"  /></td>
  </tr>
  <tr>
    <td width="16%" height="22">Theme Image/Screenshot</td>
    <td width="84%" height="22"><input type="file" name="themeimage" size="40" /><br />
    <i>Must be 120x120 and a gif image</i>
    </td>
  </tr>
  <tr>
    <td width="100%" align="center" colspan="2">
    <input type="hidden" name="id" value="' .$id . '" />
    <input type="submit" value="Update Style" name="cmdUpdateStyle" /></td>
  </tr>
</table>
</form>
';
}
function template_delete_style()
{
	global $scripturl, $user_info, $smcFunc;

$id= (int) $_GET['id'];
if($id=='')
	fatal_error('No no style selected to delete.', false);

//Get the information
$q = "SELECT ID_STYLE, stylename,ID_MEMBER FROM {db_prefix}style where ID_STYLE='$id'";
$res = $smcFunc['db_query']('',$q);
$arr = $smcFunc['db_fetch_assoc']($res);
$smcFunc['db_free_result']($res);

if($user_info['id']  != $arr['ID_MEMBER'])
	fatal_error('This style does not belong to you! You are a very bad person.', false);



echo '
<form method="POST" action="'.$scripturl.'?action=style;sa=deletestyle2">
  Are you sure you want to delete this style? - ' . $arr['stylename'] .  '</p>
  <p align="center">
  <input type="hidden" name="id" value="' . $id . '">
  <input type="submit" value="Delete Style" name="cmdDeleteStyle"></p>
</form>';
}



function template_rating()
{
	global $context, $scripturl, $smcFunc, $user_info;
	echo '<div class="tborder"><div class="titlebg" style="padding: 4px; font-weight: bold;">
	Add Rating</div>
	<div class="windowbg" style="padding: 4px; ">
	<form method="POST" action="'.$scripturl.'?action=style;sa=rating2">
  <h5>Rate This Style</h2>
  <input type="radio" value="1" name="rate" /> <b>
  Excellent Style/Theme</b><br />
  <input type="radio" value="0" name="rate" /> <b>Average Style/Theme</b><br />
  <input type="radio" value="-1" name="rate" /><b>
  Poor Style/Theme</b><br />
  <h5>Leave a short comment to justify your rating</h2>
  <textarea rows="9" name="comment" cols="45"></textarea><br /><br />
  <input type="hidden" name="id" value="' . $context['rateid'] . '" />
  <input type="submit" value="Add Rating" name="cmdsubmit" />
  </form></div></div>';
}
?>