<?php
/*
==============================================
| Package Parser for SMF                     |
==============================================
| Coded by tyty1234 based off of Daniel15's  |
| original package parser.                   |
==============================================
*/
ini_set("display_errors",1);
// Make sure the path to SMF's SSI is correct.
require('C:/Inetpub/wwwroot/smfhacks/SSI.php');

function PackageParser()
{
	global $context, $txt, $sourcedir, $settings, $scripturl, $root_dir;

	// Set the page title.
	$context['page_title_html_safe'] = 'SMF Package Parser';

	// Set the script url.
	$context['self'] = str_replace('/index.php', $_SERVER['PHP_SELF'], $scripturl);

	// Grab what we need from the Subs-Package to read our package.
	require_once($sourcedir . '/Subs-Package.php');

	// Our SMF variables.
	$context['smf_vars'] = array(
		'$boarddir' => 'This is the directory SMF is installed in to (e.g. /home/[username]/public_html/forum or /var/www/forum/)',
		'$sourcedir' => 'This is your SMF sources directory ($boarddir/Sources)',
		'$avatardir' => 'This is the directory where SMF keeps its avatars ($boarddir/avatars)',
		'$themedir' => 'This is the directory of the default theme ($boarddir/Themes/default)',
		'$themes_dir' => 'This is the directory of all the themes installed to SMF ($boarddir/Themes)',
		'$imagesdir' => 'This is the directry where all images are situated ($themedir/images)',
		'$languagedir' => 'This is the directory where all languages are situated ($themedir/languages)',
		'$smileysdir' => 'This is the directory where SMF keeps its smileys ($boarddir/Smileys)',
	);

	// Our temp directory.
	$context['temp_dir'] = $root_dir . '/temp';

	// Our smf versions.
	$context['smf_versions'] = array(

		'SMF 2.1 Branch' => array(
			'2.1.7',
			'2.1.6',
			'2.1.5',
			'2.1.4',
			'2.1.3',
			'2.1.2',
			'2.1.1',
			'2.1',
			'2.1 RC4',
			'2.1 RC3',
			'2.1 RC2',
			'2.1 RC1',
			'2.1 Beta 3',
		),

		'SMF 2.0 Branch' => array(
			'2.0.20',
			'2.0.19',
			'2.0.18',
		    '2.0.17',
			'2.0.16',
			'2.0.15',
			'2.0.14',
			'2.0.13',
			'2.0.12',
			'2.0.11',
			'2.0.10',
			'2.0.9',
			'2.0.8',
			'2.0.7',
			'2.0.6',
			'2.0.5',
			'2.0.4',
			'2.0.3',
			'2.0.2',
		    '2.0.1',
			'2.0',
			'2.0 RC5',
			'2.0 RC4 Security Patch',
			'2.0 RC4',
			'2.0 RC3',
			'2.0 RC2',
			'2.0 RC1.2',
			'2.0 RC1-1',
			'2.0 RC1',
			'2.0 Beta 4',
			'2.0 Beta 3.1 Public',
			'2.0 Beta 3 Public',
		),
		'SMF 1.1 Branch' => array(
			'1.1.21',
			'1.1.20',
			'1.1.19',
			'1.1.18',
			'1.1.17',
			'1.1.16',
			'1.1.15',
			'1.1.14',
			'1.1.13',
			'1.1.12',
			'1.1.11',
			'1.1.10',
			'1.1.9',
			'1.1.8',
			'1.1.7',
			'1.1.6',
			'1.1.5',
			'1.1.4',
			'1.1.3',
			'1.1.2',
			'1.1.1',
			'1.1',
			'1.1 RC3',
			'1.1 RC2',
			'1.1 RC1',
			'1.1 Beta 3 Public',
		),
		'SMF 1.0 Branch' => array(
			'1.0.21',
			'1.0.20',
			'1.0.19',
			'1.0.18',
			'1.0.17',
			'1.0.16',
			'1.0.15',
			'1.0.14',
			'1.0.13',
			'1.0.12',
			'1.0.11',
			'1.0.10',
			'1.0.9',
			'1.0.8',
			'1.0.7',
			'1.0.6',
			'1.0.5',
			'1.0.4',
			'1.0.3',
			'1.0.2',
			'1.0.1',
			'1.0',
			'1.0 RC2',
			'1.0 RC1',
		),
	);

	// We're moving uploaded files to the temp directory.
	@mkdir($context['temp_dir']);

	// chdir it too.
	if (chdir($context['temp_dir']) === false)
		die('Could not chdir to ' . $context['temp_dir'] . '!');

	// Get the action requested.
	$context['sa'] = isset($_GET['action']) ? $_GET['action'] : 'default';

	// Setup our sub-actions.
	$subActions = array(
		'parse' => 'PackageInstructions',
		'help' => 'ShowHelp',
	);

	// We will need these css styles.
	$context['html_headers'] .= '
	<style type="text/css">
		#formtable dt
		{
			float: left;
			margin: 0;
			padding: 0;
			width: 10%;
			margin: 0.3em 0;
		}

		#formtable dd
		{
			float: left;
			margin: 0;
			padding: 0;
			width: 83%;
			margin: 0.3em 0;
		}
	</style>';

	// And now load the page.
	if (array_key_exists($context['sa'], $subActions))
		$subActions[$context['sa']]();
	else
		show_template('page');
}

function PackageInstructions()
{
	global $context, $smcFunc;

	// Make sure the package isn't empty.
	if (isset($_FILES['package']) && !empty($_FILES['package']['tmp_name']))
	{
		// Put the package in an easy to use array.
		$context['package'] = $_FILES['package'];

		//$context['smf_version'] = $_POST['smfVersion'];

		// Make sure we have the right extensions.
		if (strtolower(substr($context['package']['name'], -4)) == '.zip' || strtolower(substr($context['package']['name'], -4)) == '.tgz' || strtolower(substr($context['package']['name'], -7)) == '.tar.gz')
		{
			parseArchive($context['package'], $_POST['operation'], $_POST['settings']);

			// We can kill the files now.
			//exec('rm -rf ' . $context['temp_dir'] . '/* -R');

			$context['html_headers'] .= '
	<style type="text/css">
		.tooltip
		{
			border-bottom: 1px dashed #444;
			cursor: pointer;
		}
		.tooltip_script
		{
			font-size: 10px;
			visibility: hidden;
			z-index: 200;
			position: absolute;
			width: 225px;
			background-color: #e7eaef;
			border: 1px solid #444;
			padding: 3px;
		}
	</style>';

			// Show the template.
			show_template('instructions');
		}
		else
		{
			$context['error_msg'] = 'The package parser only supports zip, tgz, or tar.gz files.';
			show_template('page');
		}
	}
	else
	{
		$context['error_msg'] = 'No package was uploaded.';
		show_template('page');
	}

	// Get rid of the temp files.
	deltree($context['temp_dir']);
}

function ShowHelp()
{
	global $context;

	// Do we have the help var set?
	$context['help'] = isset($_REQUEST['help']) ? $_REQUEST['help'] : '';

	// Here are the limited help options we are available to.
	$context['help_options'] = array(
		'package-info' => 'The information listed in this area is just some general information about the modification.',
		'instructions' => 'Listed below contains the instructions on how to install the modification manually and what to do step by step.',
		'readme' => 'This is the modification&#39;s readme file. They contain further information about the mod.',
		'code' => 'The files listed here are files within the package that need to be executed as a "stand-alone" or by itself. To do this, you will need to extract the specified file to the root folder where your SMF forum is located. In other words, you will extract it to the same place where Settings.php is.',
		'dirs' => 'The folders listed are the folders found in the package that you will need to copy to the specified location. Mouse over the SMF variables such as $boarddir to see what that variable.',
		'files' => 'The files listed are the files found in the package that you will need to copy to the specified location. Mouse over the SMF variables such as $boarddir to see what that variable.',
		'mods' => 'These are the steps needed to take to edit SMF&#39;s files to make the mod work. Mouse over the SMF variables such as $boarddir to see what that variable means. Mouse over the text boxes for an explanation on what to do with the given code.',
	);

	// And the template.
	template_help();
}

function parseArchive($package, $operation, $show)
{
	global $context, $smcFunc;

	// Get the filename of the package.
	$filename = $package['tmp_name'];

	// The possible operations we can run.
	$operations = array('install', 'uninstall');

	// And possible "show" options we can have.
	$settings = array('all', 'theme');

	// Get the xml data.
	$result = read_tgz_data(file_get_contents($filename), $context['temp_dir'], false, true);

	// Didn't work?
	if ($result === false)
	{
		$context['error_msg'] = 'The package could not be extracted.';
		show_template('page');
	}
	// !!! package-info could be in a sub-folder, so a search has to be performed...
	// No package-info?
	elseif (!file_exists($context['temp_dir'] . '/package-info.xml'))
	{
		$context['error_msg'] = 'package-info.xml not found!';
		show_template('page');
	}
	else
	{
		// We have to assume ISO-8859-1 encoding, so we're gonna add that to all our xml files.
		fixXMLEncoding($context['temp_dir']);

		// Let's parse the package-info.xml file!
		parsePackage($context['temp_dir'] . '/package-info.xml', $operations[$operation], $settings[$show]);
	}
}

function fixXMLEncoding($dir)
{
	global $smcFunc;

	// Open up the temp directory.
	if ($dirhandle = opendir($dir))
	{
		while (false !== ($file = readdir($dirhandle)))
		{
			// We're looking for xml files ONLY!!
			if (strtolower(substr($file, -4)) == '.xml')
			{
				// Get the path to that file.
				$file = $dir . '/' . $file;

				// Get the contents of the file
				$contents = file_get_contents($file);

				// Replace the xml tag and add encoding.
				$contents = str_replace('<?xml version="1.0"?>', '<?xml version="1.0" encoding="ISO-8859-1"?>', $contents);

				// Now open and re-write the xml files.
				$fhandle = fopen($file, 'w');
				fwrite($fhandle, $contents);
				fclose($fhandle);
			}
		}
		// We're done with this directory.
		closedir($dirhandle);
	}
	// Were we unable to open the temp directory for some odd reason?
	else
	{
		$context['error_msg'] = 'Unable to locate the temp directory!';
		show_template('page');

		// We don't wanna do anything else from here...
		die;
	}
}

function parsePackage($package, $operation, $show)
{
	global $context, $smcFunc;

	// XML elements that need to be converted.
	$context['xml_elements'] = array(
		'require-dir' => 'requiredir',
		'create-dir' => 'createdir',
		'move-dir' => 'movedir',
		'remove-dir' => 'removedir',
		'require-file' => 'requirefile',
		'create-file' => 'createfile',
		'move-file' => 'movefile',
		'remove-file' => 'removefile',
	);

	// Our array of methods, and their english meaning.
	$context['xml_methods'] = array(
		'require' => array(
			'title' => 'installed',
			'sentence' => 'copied to',
		),
		'create' => array(
			'title' => 'created',
			'sentence' => 'crated in',
		),
		'move' => array(
			'title' => 'moved',
			'sentence' => 'moved to',
		),
		'remove' => array(
			'title' => 'removed',
			'sentence' => 'removed from',
		),
	);

	// Singular/plural words for file and dir.
	$context['method_txt'] = array(
		'file' => array(
			'singular' => 'File',
			'plural' => 'Files',
		),
		'dir' => array(
			'singular' => 'Directory',
			'plural' => 'Directories',
		),
	);

	// These are the operation tool tips.
	$context['op_tooltips'] = array(
		'find' => 'This is the code that you look for in the file you&#39;re editing.',
		'add_before' => 'You add this code before the code that you found above.',
		'add_after' => 'You add this code after the code you found above.',
		'replace_with' => 'You replace this code with the code you found above.',
		'end' => 'You add this code to the end of the file BEFORE the ?&gt; tag.',
	);

	// Get the contents the package.
	$xml_data = file_get_contents($package);


	// Fixes for bad xml
	$xml_data = str_replace("<<search position","<search position",$xml_data );
	$xml_data = str_replace('<search position="replace>','<search position="replace">',$xml_data );


	// Remove the hyphens from the above xml elements.
	foreach ($context['xml_elements'] as $xml_tag => $replace_xml)
		$xml_data = str_replace($xml_tag, $replace_xml, $xml_data);

	// Get the xml array of the package info.
	$context['package_info'] = new SimpleXMLElement($xml_data);

	// Put the package info into a new array.
	$context['package_array'] = array();

	foreach ($context['package_info'] as $tag => $data)
		$context['package_array'][$tag] = $data;

	// Our labels for the package info.
	$context['package_labels'] = array(
		'id' => 'Package ID',
		'name' => 'Package Name',
		'version' => 'Package Version',
		'type' => 'Package Type',
	);

	// Our operation labels.
	$context['operation_label'] = array(
		'install' => 'Installation',
		'uninstall' => 'Uninstallation',
	);

	// Global the operation and show variables.
	$context['operation'] = $operation;
	$context['show'] = $show;

	// Are we installing or uninstalling?
	$context['mod_steps'] = $context['package_info']->$operation;
}

function boardmodToXML($boardmod_file)
{
	global $smcFunc;

	// Grab and write our temp file.
	$temp_file = getTempFile($boardmod_file);

	// Grab contents of the temp file.
	$boardmod_contents = file($temp_file);

	// Grab the lines for the boardmod data.
	$boardmod_lines = getBoardmodLines($boardmod_file);

	// Grab the boardmod data from the above array.
	$boardmod_data = getBoardmodData($boardmod_lines, $boardmod_file);

	// We no longer need the temp file.
	unlink($temp_file);

	// Create a xml file name.
	$xml_file_name = str_replace('.mod', '.xml', $boardmod_file);

	// We will store the xml file in here.
	$xml_file_contents = '<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE modification SYSTEM "http://www.simplemachines.org/xml/modification">
<modification xmlns="http://www.simplemachines.org/xml/modification" xmlns:smf="http://www.simplemachines.org/">';

	// Our data goes here.
	$boardmod_xml = array();

	// This is how we will convert the boardmod tags.
	$sprintf_tags = array(
		'info' => '<%1$s>%2$s</%1$s>',
		'file' => '<file name="%1$s">',
		'search' => '<search position="%1$s"><![CDATA[
%2$s]]></search>',
		'add' => '<add><![CDATA[
%1$s]]></add>',
	);

	// Start the pre-conversion process!
	foreach ($boardmod_data as $tag => $data)
	{
		// Do the info tags first.
		if ($tag != 'file')
			$boardmod_xml[$tag] = sprintf($sprintf_tags['info'], $tag, preg_replace('/\s$/', '', $data));
		// The file, search, and add tags.
		else
		{
			$i = 0;
			// Loop through each file.
			foreach ($data as $file)
			{
				$boardmod_xml['file'][$i]['name'] = sprintf($sprintf_tags['file'], preg_replace('/\s$/', '', $file['name']));

				$j = 0;
				foreach ($file['search'] as $search)
				{
					$boardmod_xml['file'][$i]['search'][$j]['data'] = sprintf($sprintf_tags['search'], preg_replace('/\s$/', '', $search['add']['position']), preg_replace('/\s$/', '', $search['data']));
					$boardmod_xml['file'][$i]['search'][$j]['add'] = sprintf($sprintf_tags['add'], preg_replace('/\s$/', '', $search['add']['data']));
					$j++;
				}
				$i++;
			}
		}
	}

	// Fix the id tag by combining the author
	$id = preg_replace('/(<|>|\/)+\w+(?=>)(<|>|\/)+/', '', $boardmod_xml['author'] . ':' . $boardmod_xml['id']);
	$boardmod_xml['id'] = strtolower(preg_replace('/\w+(?=<)/', $id, $boardmod_xml['id']));

	// Get rid of the author tag.
	unset($boardmod_xml['author']);

	// Now convert!!
	foreach ($boardmod_xml as $tag => $data)
	{
		if ($tag != 'file')
			$xml_file_contents .= '
	' . $data;
		else
		{
			foreach ($data as $file)
			{
				$xml_file_contents .= '

	' . $file['name'];

				foreach ($file['search'] as $search)
				{
					$xml_file_contents .= '
		<operation>
			' . $search['data'] . '
			' . $search['add'] . '
		</operation>';
				}

				$xml_file_contents .= '
	</file>';
			}
		}
	}
	$xml_file_contents .= '

</modification>';

	// Write our new xml file.
	writeToFile($xml_file_name, $xml_file_contents);

	return $xml_file_name;
}

function getBoardmodLines($boardmod_file)
{
	// Get contents of file via "file" function.
	$boardmod_contents = file($boardmod_file);

	// All the data will go here.
	$boardmod_data = array();

	// Needed for the regex functions.
	$patterns = array(
		'main' => array(
			'/<(id|version|author)>/',
			'/<\/(id|version|author)>/',
		),
		'file' => array(
			'/<(file|edit file)>/',
			'/<\/(file|edit file)>/',
		),
		'search' => array(
			'/<(search|search for)>/',
			'/<\/(search|search for)>/',
		),
		'operation' => array(
			'/<(add|before|after|add before|add after|add above|above|replace|end)>/',
			'/<\/(add|before|after|add before|add after|add above|above|replace|end)>/',
		),
	);

	// This semi-long process organizes our data into a nice little array for conversion later.
	foreach ($boardmod_contents as $line_num => $line)
	{
		// We're searching for boardmod tags like id, version and author.
		if (preg_match($patterns['main'][0], $line) || preg_match($patterns['main'][1], $line))
		{
			// Take away the brackets.
			$tag = preg_replace(array('/([<^.*?>]+|[<\/^.*?>]+)/', '/[\s]/'), '', $line);

			// Now the way this works is we figure out the start and end of the tags.
			if (!array_key_exists($tag, $boardmod_data))
			{
				$boardmod_data[$tag] = array(
					'line_start' => $line_num,
				);
			}
			else
				$boardmod_data[$tag]['line_end'] = $line_num;
		}
		// We're searching for the file tags (file|edit file)
		elseif (preg_match($patterns['file'][0], $line) || preg_match($patterns['file'][1], $line))
		{
			static $k = 0;
			if (!strstr($line, '/'))
			{
				$boardmod_data['file'][$k] = array(
					'line_start' => $line_num,
				);
			}
			else
			{
				$boardmod_data['file'][$k] += array(
					'line_end' => $line_num,
				);
				$k++;
			}
		}
	}

	// Go through each file there is to find the operations and searching and adding.
	foreach ($boardmod_data['file'] as $k => $file)
	{
		$j = 0;
		// Going back through the file...
		foreach ($boardmod_contents as $line_num => $line)
		{
			// We wanna stay in a certain range...
			$count = count($boardmod_data['file']) - 1;
			$diff = ($k < $count ? $boardmod_data['file'][$k + 1]['line_start'] : $line_num);

			// Make sure we stay in that range.
			if ($line_num > $file['line_end'] && $line_num <= $diff)
			{
				// Looking for our search tags (search|search for)
				if (preg_match($patterns['search'][0], $line) || preg_match($patterns['search'][1], $line))
				{
					if (!strstr($line, '/'))
					{
						$boardmod_data['file'][$k]['search'][] = array(
							'line_start' => $line_num,
						);
					}
					else
					{
						$boardmod_data['file'][$k]['search'][$j] += array(
							'line_end' => $line_num,
						);
					}
				}
				// And our add tags and their positions (add|before|after|add before|add after|add above|above|replace|end)
				if (preg_match($patterns['operation'][0], $line) || preg_match($patterns['operation'][1], $line))
				{
					// Remove the brackets...
					$position = preg_replace(array('/([<^.*?>]+|[<\/^.*?>]+)/', '/[\s]/'), '', $line);
					if (!strstr($line, '/'))
					{
						$boardmod_data['file'][$k]['search'][$j]['add'] = array(
							'position' => preg_replace('/[\n]/', '', str_replace('add', '', $position)),
							'line_start' => $line_num,
						);
					}
					else
					{
						$boardmod_data['file'][$k]['search'][$j]['add'] += array(
							'line_end' => $line_num,
						);
						$j++;
					}
				}
			}
		}
	}

	// Return the array.
	return $boardmod_data;
}

function getBoardmodData($boardmod_lines, $file)
{
	// Get the contents of the file.
	$boardmod_file = file($file);

	// The data will go here.
	$tag_data = array();

	// Go through our boardmod data array and grab the data in between each tag.
	foreach ($boardmod_lines as $tag => $data)
	{
		// Grab all the tags that is not file.
		if ($tag != 'file')
		{
			// Go through the file again and grab the tag data.
			foreach ($boardmod_file as $line_num => $line)
			{
				// Stay within this range...
				if ($line_num > $data['line_start'] && $line_num < $data['line_end'])
					$tag_data[$tag] = $line;
			}
		}
		// It's a bit different process for the file tag.
		else
		{
			// We're going through each file.
			foreach ($data as $file)
			{
				static $i = 0;
				$j = 0;

				// Back through the file again...
				foreach ($boardmod_file as $line_num => $line)
				{
					// Stay within this range...
					if ($line_num > $file['line_start'] && $line_num < $file['line_end'])
						$tag_data['file'][$i]['name'] = $line;

					// Grab the search and add tags.
					foreach ($file['search'] as $search)
					{
						if ($line_num == $search['line_start'])
							$search_str = '';
						if ($line_num > $search['line_start'] && $line_num < $search['line_end'])
							$search_str .= $line;
						if ($line_num == $search['line_end'])
							$tag_data['file'][$i]['search'][$j]['data'] = $search_str;
						if ($line_num == $search['add']['line_start'])
							$add_str = '';
						if ($line_num > $search['add']['line_start'] && $line_num < $search['add']['line_end'])
							$add_str .= $line;
						if ($line_num == $search['add']['line_end'])
						{
							$tag_data['file'][$i]['search'][$j]['add'] = array(
								'position' => empty($search['add']['position']) ? 'replace' : fix_position($search['add']['position']),
								'data' => $add_str,
							);
							$j++;
						}
					}
				}
				$i++;
			}
		}
	}

	// Return the array, now ready for conversion.
	return $tag_data;
}

function getTempFile($file)
{
	// Get the file defined above.
	$contents = file($file);

	// We're gonna create temporary file of the boardmod file.
	$temp = '';

	// Loop through the file into a string.
	foreach ($contents as $data)
		$temp .= $data;

	// Removing the \n's...
	$temp = preg_replace('/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/', "\n", $temp);

	// Create a temporary file name.
	$temp_file = str_replace('.mod', '_temp.mod', $file);

	// Write to the temp file.
	writeToFile($temp_file, $temp);

	return $temp_file;
}

function writeToFile($file, $data)
{
	$handle = fopen($file, 'w');
	fwrite($handle, $data);
	fclose($handle);
}

function fix_position($position)
{
	// We're only fixing positions, not anything else.
	if (preg_match('/(before|after|above|replace|end)/', $position))
	{
		// Change before -> after.
		if (preg_match('/before/', $position))
			return 'after';
		// Change after -> before.
		elseif (preg_match('/(after|above)/', $position))
			return 'before';
		// If it's replace or end, just leave it.
		else
			return $position;
	}
	else
		return false;
}

function template_page()
{
	global $context;

	echo '
			<span class="upperframe"><span></span></span>
			<div class="roundframe"><div class="innerframe">
				Welcome to the SMF package parser! From here, you will be able to manually install your mods with easy-to-follow instructions on how to do it. Enjoy.
			</div></div>
			<span class="lowerframe"><span></span></span>
			<br class="clear" />
			<div class="cat_bar">
				<h3 class="catbg">SMF Package Parser</h3>
			</div>
			<form action="', $context['self'], '?action=parse" method="post" enctype="multipart/form-data">
				<span class="upperframe"><span></span></span>
				<div class="roundframe">';

		// Check for an error if there was one.
		if (isset($context['error_msg']) && !empty($context['error_msg']))
			echo '
					<div class="errorbox">
						<p class="alert">!!</p>
						<h3>Error:</h3>
						<p>', $context['error_msg'], '</p>
					</div>';

		echo'
					<dl id="formtable">
						<dt><strong>SMF Version</strong></dt>
						<dd>
							<select name="smf_version">';

	// List all the possible SMF Versions.
	foreach ($context['smf_versions'] as $branch => $smf_version)
	{
		echo '
								<optgroup label="', $branch, '">';

		// And list the versions in that branch.
		foreach ($smf_version as $version)
			echo '
									<option value="', $version, '">', $version, '</option>';

		echo '
								</optgroup>';
	}

	echo '
							</select>
						</dd>
						<dt><strong>Package</strong><br/><span class="smalltext">(zip, tgz, tar.gz)</span></dt>
						<dd><input type="file" name="package" size="38" /><br /><br />
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- support header -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:728px;height:90px"
						     data-ad-client="ca-pub-4552520252712198"
						     data-ad-slot="0005589937"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
</script>
						</dd>
						<dt><strong>Operation</strong></dt>
						<dd>
							<input type="radio" name="operation" value="0" checked="checked" />Install<br />
							<input type="radio" name="operation" value="1" />Uninstall<br />
						</dd>
						<dt><strong>Settings</strong></dt>
						<dd>
							<input type="radio" name="settings" value="0" checked="checked" />Show All Edits<br />
							<input type="radio" name="settings" value="1" />Show Theme Edits<br />
						</dd>
						<dt><input type="submit" value="Parse Mod" class="button_submit" /></dt>
					</dl>
				</div>
				<span class="lowerframe"><span></span></span>
			</form>';
}

function template_instructions()
{
	global $context, $smcFunc, $settings;

	echo '
			<div id="tooltip" class="tooltip_script"></div>
			<span class="upperframe"><span></span></span>
			<div class="roundframe"><div class="innerframe">
				Need help? Click on the <img src="', $settings['default_images_url'], '/helptopics.gif" alt="" /> for more info on each section.
			</div></div>
			<span class="lowerframe"><span></span></span>
			<br class="clear" />
			<div class="cat_bar">
				<h3 class="catbg2">
					<a href="', $context['self'], '?action=help;help=package-info" onclick="return reqWin(this.href);" class="help"><img src="', $settings['default_images_url'], '/helptopics.gif" alt="Help" /></a> Package Information
				</h3>
			</div>
			<span class="upperframe"><span></span></span>
			<div class="roundframe">';

	// List the info for this package.
	foreach ($context['package_info'] as $key => $value)
	{
		// We only want the things such as id, name, version, etc.
		if (array_key_exists($key, $context['package_labels']))
			echo '
				<strong>', $context['package_labels'][$key], ':</strong> ', $value, '<br/>';
	}

	echo '
			</div>
			<span class="lowerframe"><span></span></span>
			<br class="clear" />';

	// Right now, this is false.
	$ver_match = false;

	// And now the installation instructions!
	foreach ($context['mod_steps'] as $mod)
	{
		// Make sure we show the instructions for the version they requested! If not, we move on to the next install tag.
		if ($mod['for'] != '' && matchPackageVersion($_POST['smf_version'], $mod['for']) == false)
			continue;

		// We found a matching version, so let's set this var to true.
		$ver_match = true;

		echo '
			<div class="cat_bar">
				<h3 class="catbg2">
					<a href="', $context['self'], '?action=help;help=instructions" onclick="return reqWin(this.href);" class="help"><img src="', $settings['default_images_url'], '/helptopics.gif" alt="Help" /></a> ', $context['operation_label'][$context['operation']], ' instructions for SMF version(s): ', $mod['for'] != '' ? $mod['for'] : 'Undefined', '
				</h3>
			</div>';

		// Only show want they want to see. All edits or theme edits.
		if ($context['show'] != 'theme')
		{
			// Is there some kind of readme?
			if (isset($mod->readme))
			{
				// Is it a file?
				if ($mod->readme['type'] != 'inline')
				{
					// Get rid of the bad characters first.
					$readme_file = $context['temp_dir'] . '/' . preg_replace('/[^a-zA-Z0-9 _.\-]/', '', $mod->readme);

					// Make sure the file exists.
					$readme = file_exists($readme_file) ? file_get_contents($readme_file, '\n\r') : '[color=red]There was an error grabbing the readme file...[/color]';
				}
				else
					$readme = $mod->readme;

				// Return the readme, and parse bbc if any.
				echo '
				<div class="cat_bar">
					<h3 class="catbg">
						<a href="', $context['self'], '?action=help;help=readme" onclick="return reqWin(this.href);" class="help"><img src="', $settings['default_images_url'], '/helptopics.gif" alt="Help" /></a> Readme
					</h3>
				</div>
				<span class="upperframe"><span></span></span>
				<div class="roundframe">
					', parse_bbc(htmlspecialchars(trim($readme))), '
				</div>
				<span class="lowerframe"><span></span></span>
				<div style="padding-bottom: 4px;"></div>';
			}

			// Do we have any code needed for the DB?
			if (isset($mod->code) || isset($mod->database))
			{
				echo '
				<div class="cat_bar">
					<h3 class="catbg">
						<a href="', $context['self'], '?action=help;help=code" onclick="return reqWin(this.href);" class="help"><img src="', $settings['default_images_url'], '/helptopics.gif" alt="Help" /></a> PHP files to execute
					</h3>
				</div>
				<span class="upperframe"><span></span></span>
				<div class="roundframe">
					<dl>';

				if (isset($mod->code))
					foreach ($mod->code as $code_file)
						echo '
						<dt>&bull; ', $code_file, '</dt>';

				if (isset($mod->database))
					foreach ($mod->database as $db_file)
						echo '
						<dt>&bull; ', $db_file, '</dt>';

				echo '
					</dl>
				</div>
				<span class="lowerframe"><span></span></span>
				<div style="padding-bottom: 4px;"></div>';
			}

			// Do we have any Hooks
			if (isset($mod->hook))
			{
				echo '
				<div class="cat_bar">
					<h3 class="catbg">
						<img src="', $settings['default_images_url'], '/helptopics.gif" alt="Help" /> Hooks
					</h3>
				</div>
				<span class="upperframe"><span></span></span>
				<div class="roundframe">
					<dl>';

					foreach ($mod->hook as $hook_file)
					{
						$att =  $hook_file->attributes();

						foreach ($context['smf_vars'] as $smf_var => $tooltip)
						{
							 $att['file'] = str_replace($smf_var, '<span onmouseover="showToolTip(\'' . $tooltip . '\');" onmouseout="hideToolTip();" class="tooltip">' . $smf_var . '</span>',  $att['file']);
						}

						echo '
						<dt>Hook for <strong>', $att['hook'], '</strong> will be ', ($context['operation'] == 'install' ? 'installed' . '' : 'removed'), ' in <strong>', $att['file'], '</strong> using function <strong>', $att['function'], '</strong> </dt>';




					}

				echo '
					</dl>
				</div>
				<span class="lowerframe"><span></span></span>
				<div style="padding-bottom: 4px;"></div>';
			}



			// From here, since there are require, create, move, and remove methods, and four to a file and directory, let's run the xml foreach query.
			foreach ($context['xml_elements'] as $method)
			{
				// Is this a file or a directory?
				$file_dir = preg_replace('/(require|create|move|remove)/', '', $method);

				// Are we requiring, creating, moving, or removing?
				$method2 = preg_replace('/(file|dir)/', '', $method);

				if (isset($mod->$method))
				{
					echo '
			<div class="cat_bar">
				<h3 class="catbg">
					<a href="', $context['self'], '?action=help;help=', $file_dir, '" onclick="return reqWin(this.href);" class="help"><img src="', $settings['default_images_url'], '/helptopics.gif" alt="Help" /></a> ', $context['method_txt'][$file_dir]['plural'], ' ',  $context['xml_methods'][$method2]['title'], '
				</h3>
			</div>
			<span class="upperframe"><span></span></span>
			<div class="roundframe">
				<dl>';

					// Loop through each file/directory.
					foreach ($mod->$method as $obj)
					{
						// Add the tooltip.
						foreach ($context['smf_vars'] as $smf_var => $tooltip)
						{
							if ($context['operation'] == 'install')
								$obj['destination'] = str_replace($smf_var, '<span onmouseover="showToolTip(\'' . $tooltip . '\');" onmouseout="hideToolTip();" class="tooltip">' . $smf_var . '</span>', $obj['destination']);
							else
								$obj['name'] = str_replace($smf_var, '<span onmouseover="showToolTip(\'' . $tooltip . '\');" onmouseout="hideToolTip();" class="tooltip">' . $smf_var . '</span>', $obj['name']);
						}

						echo '
					<dt>&bull; The ', strtolower($context['method_txt'][$file_dir]['singular']), ' <strong>', $obj['name'], '</strong> will be ', $context['operation'] == 'install' ? $context['xml_methods'][$method2]['sentence'] . ' <strong>' . $obj['destination'] . '</strong>' : $context['xml_methods'][$method2]['title'], '</dt>';
					}

					echo '
				</dl>
			</div>
			<span class="lowerframe"><span></span></span>
			<div style="padding-bottom: 4px;"></div>';
				}
			}

			echo '
			<br class="clear" />';
		}

		// Are there modification xml files?
		if (isset($mod->modification))
		{
			echo '
			<div class="cat_bar">
				<h3 class="catbg2">
					<a class="floatright" id="show_all_edits" href="javascript:void(0);" onclick="toggleAllEdits();">Show All Edits</a>';

			if ($context['show'] != 'theme')
				echo ' <a href="', $context['self'], '?action=help;help=mods" onclick="return reqWin(this.href);" class="help"><img src="', $settings['default_images_url'], '/helptopics.gif" alt="Help" /></a> Modifications to SMF files';
			else
				echo ' If a file does not exist in your theme, don&#39;t worry about it as it will use the default theme&#39;s one instead.';

			echo '
				</h3>
			</div>';

			// For the collapse/expand.
			$context['count'] = 0;

			// Make sure we grab ALL modification files.
			foreach ($mod->modification as $modification)
			{
				// Get rid of the bad characters in the file name.
				//$mod_file = $context['temp_dir'] . '/' . preg_replace('/[^a-zA-Z0-9 _.\-]/', '', $modification);
				$mod_file = $context['temp_dir'] . '/' . $modification;

				// And make sure the mod file exists.
				if (file_exists($mod_file))
				{
					// Make sure it's XML.
					if (!isset($modification['format']) || strtolower($modification['format']) == 'xml')
						xml_mod_instructions($modification, $mod_file);
					// Or is it a boardmod file?
					elseif (!isset($modification['format']) || strtolower($modification['format']) == 'boardmod')
					{
						// Convert the boardmod file to xml.
						$mod_file = boardmodToXML($mod_file);

						// Parse boardmod file that is in xml format.
						xml_mod_instructions($modification, $mod_file);
					}
					// Return an error...
					else
						echo '
			<span class="upperframe"><span></span></span>
			<div class="roundframe alert">
				Unsupported format: ', strtoupper($modification['format']), '
			</div>
			<span class="lowerframe"><span></span></span>
			<div style="padding-bottom: 4px;"></div>';
				}
				// The xml modification file is missing?
				else
					echo '
			<span class="upperframe"><span></span></span>
			<div class="roundframe alert">
				The xml package <strong>', str_replace($context['temp_dir'] . '/', '', $mod_file), '</strong> appears to be missing...
			</div>
			<span class="lowerframe"><span></span></span>
			<div style="padding-bottom: 4px;"></div>';
			}
		}

		// Exit the foreach loop.
		break;
	}

	echo '
			<script language="JavaScript" type="text/javascript"><!-- // --><![CDATA[
				function toggleEdit(id)
				{
					var el = "file_" + id;
					var el_img = "file_img_" + id;
					var el_disp = document.getElementById(el).style.display;

					if (el_disp == "none")
					{
						document.getElementById(el).style.display = "";
						document.getElementById(el_img).src = "', $settings['images_url'], '/collapse.gif";
					}
					else
					{
						document.getElementById(el).style.display = "none";
						document.getElementById(el_img).src = "', $settings['images_url'], '/expand.gif";
					}
				}

				function toggleAllEdits()
				{
					var total = "', $context['count'], '";
					var mode = (document.getElementById("show_all_edits").innerHTML == "Show All Edits" ? 0 : 1);

					for (i = 0; i <= total; i++)
					{
						var el = "file_" + i;
						var el_img = "file_img_" + i;
						var el_disp = document.getElementById(el).style.display;

						if (mode == 0)
						{
							document.getElementById(el).style.display = "";
							document.getElementById(el_img).src = "', $settings['images_url'], '/collapse.gif";
						}
						else
						{
							document.getElementById(el).style.display = "none";
							document.getElementById(el_img).src = "', $settings['images_url'], '/expand.gif";
						}

						document.getElementById("show_all_edits").innerHTML = (mode == 0 ? "Hide All Edits" : "Show All Edits");
					}
				}

				function selectAll(target)
				{
					var target = document.getElementById("operation-" + target);
					target.focus();
					target.select();
				}

				var tooltipDiv = document.getElementById("tooltip");
				function showToolTip(tip)
				{
					setInnerHTML(tooltipDiv, \'<div class="windowbg">\' + tip + \'</div>\');
					tooltipDiv.style.visibility = "visible";
					document.onmousemove = moveMouse;
				}
				function hideToolTip()
				{
					tooltipDiv.style.visibility = "hidden";
					document.onmousemove = "";
				}
				function moveMouse(e)
				{
					if (!e)
						var e = window.event;
					if (e.pageX)
					{
						tooltipDiv.style.left = (e.pageX + 20) + "px";
						tooltipDiv.style.top = (e.pageY  + 20) + "px";
					}
					else
					{
						tooltipDiv.style.left = e.clientX + (document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + 20;
						tooltipDiv.style.top = e.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + 20;
					}
				}
			// ]]></script>';

	// If we didn't find a matching version, let's tell them that the package does not support it.
	if (!$ver_match)
		echo '
			<span class="upperframe"><span></span></span>
			<div class="roundframe alert">
				This mod is not supported with your version of SMF.
			</div>
			<span class="lowerframe"><span></span></span>
			<div style="padding-bottom: 4px;"></div>';
}

function xml_mod_instructions($modification, $xml_file)
{
	global $context, $settings;

	// Check if the reverse attribute was set. If not, set this as false by default.
	if (!isset($modification['reverse']))
		$modification['reverse'] = 'false';

	// Proceed with installation.
	$mod_xml_file = file_get_contents($xml_file);

	// Fixes for bad xml
	$mod_xml_file = str_replace("<<search position","<search position",$mod_xml_file );
	$mod_xml_file = str_replace('<search position="replace>','<search position="replace">',$mod_xml_file);

	$mod_xml = new SimpleXMLElement($mod_xml_file);

	// Now loop through each instruction.
	foreach ($mod_xml->file as $file)
	{
		// Do we have an error attribute set?
		$context['skip_file'] = isset($file['error']);

		// And show what they want to see.
		if ($context['show'] == 'theme')
		{
			// If we're only showing theme edits, is this a theme file?
			if (!stristr($file['name'], '$themedir') && !stristr($file['name'], 'Themes/default'))
				continue;

			// And replace the theme name with a theme they are going to install to.
			$file['name'] = str_replace(array('$themedir', 'Themes/default'), 'Themes/[your_theme]', $file['name']);
		}

		// Add the tooltip.
		foreach ($context['smf_vars'] as $smf_var => $tooltip)
			$file['name'] = str_replace($smf_var, '<span onmouseover="showToolTip(\'' . $tooltip . '\');" onmouseout="hideToolTip();" class="tooltip">' . $smf_var . '</span>', $file['name']);

		echo '
			<span class="upperframe"><span></span></span>
			<div class="roundframe">
				<div class="cat_bar">
					<h3 class="catbg">
						<span onclick="toggleEdit(\'', $context['count'], '\');"><img class="floatright" style="padding: 10px 5px 0 0; cursor: pointer;" id="file_img_', $context['count'], '" src="', $settings['images_url'], '/expand.gif" alt="*" title="Show or hide edits" /></span>In the file ', $file['name'], '', $context['skip_file'] ? ' (not required)' : '', '
					</h3>
				</div>
				<div style="padding-bottom: 1px;"></div>
				<div id="file_', $context['count'], '" style="display: none;">';

		// And now for the instructions!!!
		foreach ($file->operation as $op)
		{
			$search = $op->search;
			$add = $op->add;

			// Are we uninstalling?
			if ($modification['reverse'] == 'true')
			{
				// Show instructions for before.
				if ($op->search['position'] == 'before')
				{
					$search2 = ($op->search . $op->add);

					$op_options = array(
						array(
							'label' => 'Find',
							'operation' => $search2,
						),
						array(
							'label' => 'Replace With',
							'operation' => $search,
						),
					);

					// Display the operation.
					show_operation($op_options);
				}
				// Show for after.
				elseif ($op->search['position'] == 'after')
				{
					$search2 = ($op->add . $op->search);

					$op_options = array(
						array(
							'label' => 'Find',
							'operation' => $search2,
						),
						array(
							'label' => 'Replace With',
							'operation' => $search,
						),
					);

					// Display the operation.
					show_operation($op_options);
				}
				// Show for replace.
				if ($op->search['position'] == 'replace')
				{
					$op_options = array(
						array(
							'label' => 'Find',
							'operation' => $add,
						),
						array(
							'label' => 'Replace With',
							'operation' => $search,
						),
					);

					// Display the operation.
					show_operation($op_options);
				}
				// Show for end.
				if ($op->search['position'] == 'end')
				{
					$op_options = array(
						array(
							'label' => 'Delete',
							'operation' => $add,
						),
					);

					// Display the operation.
					show_operation($op_options);
				}
			}
			// So we're installing then.
			else
			{
				// Set these default options.
				$op_options = array(
					array(
						'label' => '',
						'operation' => '',
					),
					array(
						'label' => '',
						'operation' => $add,
					),
				);

				// Show for everything that's not end.
				if ($op->search['position'] != 'end')
				{
					$op_options[0]['label'] = 'Find';
					$op_options[0]['operation'] = $search;
				}
				else
					unset($op_options[0]);

				// Show for before.
				if ($op->search['position'] == 'before')
					$op_options[1]['label'] = 'Add After';
				// Show for after.
				elseif ($op->search['position'] == 'after')
					$op_options[1]['label'] = 'Add Before';
				// Show for replace.
				elseif ($op->search['position'] == 'replace')
					$op_options[1]['label'] = 'Replace With';
				// Show for end.
				elseif ($op->search['position'] == 'end')
					$op_options[1]['label'] = 'Add to end of file';
				else
					$op_options[1]['label'] = 'Do Something';

				show_operation($op_options);
			}
		}

		echo '
				</div>
			</div>
			<span class="lowerframe"><span></span></span>
			<div style="padding-bottom: 4px;"></div>';

		$context['count']++;
	}
}

function show_operation($options)
{
	global $context, $smcFunc;

	// Make sure options is an array first!
	if (is_array($options))
	{
		static $i = 0;
		foreach ($options as $option)
		{
			// Set the tooltip.
			$tooltip = $option['label'] == 'Add to end of file' ? 'end' : strtolower(str_replace(' ', '_', $option['label']));

			echo '
					<div class="title_barIC">
						<h4 class="titlebg">
							', $option['label'], ' <span class="smalltext"><a href="javascript:void(0);" onclick="return selectAll(\'', $i, '\');">[Select]</a></span>
						</h4>
					</div>
					<textarea id="operation-', $i, '" readonly="readonly" rows="5" cols="5" style="width: 100%; height: auto;" title="', $context['op_tooltips'][$tooltip], '">', htmlspecialchars($option['operation']), '</textarea>
					<div style="padding-bottom: 4px;"></div>';
			$i++;
		}
	}
	else
		echo '
					<span class="alert">Unable to display modifications</span>
					<div style="padding-bottom: 4px;"></div>';
}

function template_help()
{
	global $context, $settings;

	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"', $context['right_to_left'] ? ' dir="rtl"' : '', '>
<head>
	<link rel="stylesheet" type="text/css" href="', $settings['default_theme_url'], '/css/index.css" />
	<script type="text/javascript" src="', $settings['default_theme_url'], '/scripts/script.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=', $context['character_set'], '" />
	<meta name="robots" content="noindex" />
	<title>Package Parser Help</title>
</head>
<body id="help_popup">
	<div class="windowbg description">
		', (array_key_exists($context['help'], $context['help_options']) ? $context['help_options'][$context['help']] : 'undefined'), '<br/>
		<br />
		<a href="javascript:self.close();">Close Window</a>
	</div>
</body></html>';
}

function show_template($template)
{
	global $context, $settings, $scripturl;

	$template = 'template_' . $template;

	// Header...
template_header();

	$template();

	echo '

	<div id="footer_section"><div class="frame">
		<div class="smalltext">This package parser was coded by tyty1234 based off of Daniel15&#39;s original package parser</div>
	</div>'
;
template_footer();

}

PackageParser();
?>