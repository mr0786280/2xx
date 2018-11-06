# 2xx
phpsteps to the inside-out-project

https://2xx.catchthesehands.net

Version 200.0

	- Pulled files from clients HTML site and uploaded to development server.
	- Updated title tag and header title with PHP variable
	- Converted all HTML comments to PHP comments
	
Version 201.0

	- Replaced top level pages by changing them to php files (love who, challenges, you)
	- Removed header and footer from the pages replaced
	- Created the include folder
	- Created the header.inc.php and footer.inc.php files
	
Version 202.0

	- Replaced navigation menu with top level pages by creating a function and array to dynamically create the menu (love who, challenges, you)
	
	- Created the functions.inc.php file
		- Created the menuBuilder function
		- Created the menu.data.php file
		- Created menuItems array
		- Included in the very top of the header.inc.php a requier_once to the include/menu.data.php file
	- Included in the very top of the header.inc.php a requier_once to the include/functions.inc.php file
	
Version 203.0

	- Renamed the menu.data.php page to content.data.php and made updates in header.inc.php
		- Make modifications to the content.data.php page
			- Change the variable/array name from "$menuItems" to "$content"
			- Replace all instances of "MenuLink" with "pageLink"
			- Replace all instances of "MenuName" with "pageName"
			- Add the "childPages" sub-array for each of the pages
	- Updated the menuBuilder() function to recursivly handle child data
	- Created a config.inc.php file to keep our global variables in as we create them.
	- Added the code to the footer.inc.php page to add the copyright and version information.
	- Added class to the style.css page for the copyright and version. (.copyright)
	- Added redirect to force a secure connection in the header.inc.php.