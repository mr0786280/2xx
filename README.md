# 2xx
phpsteps to the inside-out-project

https://2xx.catchthesehands.net

Version 200.0
	- pulled files from clients HTML site and uploaded to development server.
	- updated title tag and header title with PHP variable
	- converted all HTML comments into PHP comments. 

Version 201.0
	- Replaced top level pages by changing them to php files (love, who, challenges, you).
	- Removed header and footer from the pages replaced.
	- Created the include folder
	Created the header.inc.php and foot.inc.php files.
	
	
Version 202.0
	- replaced navigation manu with top level pages by creating a function and array to dynamically create the menu (love, who, challenges, you)
	- created the function.inc.php file
		-created the menuBuilder function
	- created the menu.data.php file
		- created menuItems array
	- included in the very top of the header.inc.php a require_once to the include/menu.data.php file
	- include in the very top of the header.inc.php a require_once to the include/functions.inc.php file