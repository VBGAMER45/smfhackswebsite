window.smfAnnouncements = [
	{
		subject: 'SMF XboxLIVE 0.1 Beta 2 - Released!',
		href: 'http://www.jblaze.net/forum/index.php?topic=29.0',
		time: 'January 6, 2010, 03:31:57 AM',
		author: 'JBlaze',
		message: 'SMF XboxLIVE has had a few changes. The developer is proud to announce the first public beta!',
	},
	{
		subject: 'SMF XboxLIVE 0.1 Beta 1 - Released!',
		href: 'http://www.jblaze.net/forum/index.php?topic=18.0',
		time: 'December 14, 2009, 05:21:54 AM',
		author: 'JBlaze',
		message: 'SMF XboxLIVE\'s developer has released the first public beta!',
	}
];
if (window.smfVersion < "0.1 Beta 2")
{
	window.smfUpdateNotice = 'Please update to the latest version!';
	window.smfUpdateCritical = false;
}