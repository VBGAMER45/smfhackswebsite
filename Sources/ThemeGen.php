<?php
/*
Copyright SMFHacks.com 2007
*/

function ThemeGen()
{
	loadtemplate('ThemeGen');
	
	
	
	//Actions
	$subActions = array(
		'gen' => 'Save',
		'preview' => 'Preview',
	);
		
	@$sa = $_GET['sa'];
	if (!empty($subActions[$sa]))
		$subActions[$sa]();
	else
		View();
}
function View()
{
	global $context;
	
	$context['page_title'] = "SMF Theme Generator - Generate a style for your SMF Theme";
	
}
function Save()
{
	global $context,$boarddir;
	
	//if($_REQUEST['cmdCreate'] != 'Create Style')
	//{
		$css_tags = array(
			
		
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
			
		
			
			array('windowbg', 'color','WindowBG Color:','#ECEDF3',''),
			array('windowbgtext', 'color','WindowBG Text Color:','#000000',''),
			array('windowbg2', 'color','WindowBG2 Color:','#F6F6F6',''),
			array('windowbg2text', 'color','WindowBG2 Text Color:','#000000',''),
			array('windowbg3', 'color','WindowBG3 Color:','#E0E1E8',''),
			array('windowbg3text', 'color','WindowBG3 Text Color:','#000000',''),
			
		
			
			array('catbgtext', 'color','Category Background Text Color:','#ffffff',''),
			array('catbgcolor', 'color','Category Background Color:','#88A6C0',''),
			array('catbgimage', 'url','Category Background Image:','http://www.smfboards.com/Themes2/default/images/catbg.jpg',''),
			array('cathotvercolor', 'color','Category Hover Color:','#e0e0ff',''),
		
			array('catbg2text', 'color','Category Background 2 Text Color:','#ffffff',''),
			array('catbg2color', 'color','Category Background 2 Color:','#A1BFD9',''),
			array('catbg2image', 'url','Category Background 2 Image:','http://www.smfboards.com/Themes2/default/images/catbg2.jpg',''),
			
			
			
				
			array('titlebgtext', 'color','Title Background Text Color:','black',''),
			array('titlebgcolor', 'color','Title Background Color:','#E9F0F6',''),
			array('titlebgimage', 'url','Title Background Image:','http://www.smfboards.com/Themes2/default/images/titlebg.jpg',''),
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
			
			
			array('tabfirst', 'url','Tab First Image:','http://www.smfboards.com/Themes2/default/images/maintab_first.gif',''),
			array('tabback', 'url','Tab Back Image:','http://www.smfboards.com/Themes2/default/images/maintab_back.gif',''),
			array('tablast', 'url','Tab Last Image:','http://www.smfboards.com/Themes2/default/images/maintab_last.gif',''),
			array('tabactivefirst', 'url','Tab Active First Image:','http://www.smfboards.com/Themes2/default/images/maintab_active_first.gif',''),
			array('tabactiveback', 'url','Tab Active Back Image:','http://www.smfboards.com/Themes2/default/images/maintab_active_back.gif',''),
			array('tabactivelast', 'url','Tab Active Last Image:','http://www.smfboards.com/Themes2/default/images/maintab_active_last.gif',''),
			
			
			array('mirrortabtextcolor', 'color','Mirror Tab Text Color:','white',''),
			array('mirrortabvisitedcolor', 'color','Mirror Tab Visited Color:','white',''),
			array('mirrortabhovercolor', 'color','Mirror Tab Hover Color:','#e0e0ff',''),
			
			
			array('mirrortabfirst', 'url','Mirror Tab First Image:','http://www.smfboards.com/Themes2/default/images/mirrortab_first.gif',''),
			array('mirrortabback', 'url','Mirror Tab Back Image:','http://www.smfboards.com/Themes2/default/images/mirrortab_back.gif',''),
			array('mirrortablast', 'url','Mirror Tab Last Image:','http://www.smfboards.com/Themes2/default/images/mirrortab_last.gif',''),
			array('mirrortabactivefirst', 'url','Mirror Tab Active First Image:','http://www.smfboards.com/Themes2/default/images/mirrortab_active_first.gif',''),
			array('mirrortabactiveback', 'url','Mirror Tab Active Back Image:','http://www.smfboards.com/Themes2/default/images/mirrortab_active_back.gif',''),
			array('mirrortabactivelast', 'url','Mirror Tab Active Last Image:','http://www.smfboards.com/Themes2/default/images/mirrortab_active_last.gif',''),
				
			
			
			);
			
			$finalarray = array();
			$field = '';
			//Get the fields from the result
			foreach($css_tags as $key => $tag)
			{
				
				if (isset($_REQUEST[$tag[0]]))
					$field = htmlspecialchars($_REQUEST[$tag[0]],ENT_QUOTES);
				
				//No value entered? Then enter the default
				if($field == '')
					$field = $tag[3];
				
				$finalarray[] = 
				array(
				'title' => $tag[0],
				'value' =>  $field,
				);
			}
			
			
		
			// get default contents of a file into a string
			$filename = "$boarddir\\defaultstyle.css";
			$handle = fopen ($filename, "r");
			$contents = fread ($handle, filesize ($filename));
			fclose ($handle);
		
			
			
			
		
			// edit file
			foreach($finalarray as $key => $edit2)
			{
				$contents = str_replace('{'  . $edit2['title'] . '}', $edit2['value'], $contents);
			}
			
		$context['smf_themegen'] = $contents;
		
		$context['page_title'] = "SMF Theme Generator - SMF Theme has been generated!";
		$context['sub_template']  = 'theme_save';
	
	//}
	//else
	// {
	//	$context['page_title'] = "SMF Theme Generator - Theme Preview";
	//}
}
function Preview()
{
	global $context;
	
	


}

?>