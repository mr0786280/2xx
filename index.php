<?php
  /*
  	The following will be passed along to JavaScript by establishing variables in PHP and passing them into the HTML via Global JavaScript variables the same names used for PHP.
  */

	$siteName = 'inside out | 2xx';


?> 




<!doctype html>

<!-- this is beginning of the html the browser will process -->
<html>

<!-- information used by the browser -->

<head>


    <meta charset="utf-8">

    <!--
            displayed anywhere the title is used
            for the browser, search engines, etc.
        -->
    <title><?php echo $siteName = 'inside out | 2xx'; ?></title>

    <!--
            used to display information about the 
            page by search engine and  other sites./
            looking at our page.
        -->
    <meta name="description" content="inside out is a class project we use to learn html." />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	
	<script>
		var siteName = '<?php echo $siteName; ?>'
	</script>
	
</head>

<!-- content displayed in the browser window -->

<body>

    <header>
        <h1><a href="index.php"><?php echo $siteName = 'inside out | 2xx'; ?></a></h1>
        <h2>continuously falling foward into the light... </h2>
        <nav>
            <ul>
                <li><a href="love.html">love</a>
                    <ul>
                        <li><a href="things.html">things</a>
                            <ul>
                                <li><a href="music.html">music</a></li>
                                <li><a href="movies.html">movies</a></li>
                                <li><a href="books.html">books</a></li>
                                <li><a href="website.html">website</a></li>
                            </ul>
                        </li>
                        <li><a href="people.html">people</a>
                            <ul>
                                <li><a href="family.html">family</a></li>
                                <li><a href="friends.html">friends</a></li>
                                <li><a href="others.html">others</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="who.html">who</a>
                    <ul>
                        <li><a href="i.html">i</a>
                            <ul>
                                <li><a href="was then.html">was then</a></li>
                                <li><a href="am now.html">am now</a></li>
                                <li><a href="will be.html">will be</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="challenges.html">challenges</a>
                    <ul>
                        <li><a href="behind me.html">behind me</a></li>
                        <li><a href="ahead of me.html">ahead of me</a></li>
                    </ul>
                </li>
                <li><a href="you.html">you</a>
                    <ul>
                        <li><a href="profile.html">profile</a></li>
                        <li><a href="settings.html">settings</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

    </header>
    <section>
        <p>this is where the page content goes on</p>
    </section>
    <footer>
        <h4>this is the footer</h4>
        <p>we place redundant information here</p>
        <div id="footerTagLine">I am 7 inches left of normal</div>
    </footer>

</body>

</html>
