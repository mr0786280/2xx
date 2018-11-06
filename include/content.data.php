<?php

$content = array(
     'pages' => array(
          array(
               'pageName' => 'love',
               'pageLink' => 'love.php',
               'childPages' => array(
                    array(
                         'pageName' => 'things',
                         'pageLink' => 'things.html',
                         'childPages' => array(
                              array(
                                   'pageName' => 'books',
                                   'pageLink' => 'books.html',
                                   'childPages' => array()
                              ),
                              array(
                                   'pageName' => 'music',
                                   'pageLink' => 'music.html',
                                   'childPages' => array()
                              ),
                              array(
                                   'pageName' => 'movies',
                                   'pageLink' => 'movies.html',
                                   'childPages' => array()
                              ),
                              array(
                                   'pageName' => 'websites',
                                   'pageLink' => 'websites.html',
                                   'pageContent' => 'This is the content for the websites page.',
                                   'childPages' => array()
                              )
                         )
                    ),
                    array(
                         'pageName' => 'people',
                         'pageLink' => 'people.html',
                         'childPages' => array(
                              array(
                                   'pageName' => 'family',
                                   'pageLink' => 'family.html',
                                   'childPages' => array()
                              ),
                              array(
                                   'pageName' => 'friends',
                                   'pageLink' => 'friends.html',
                                   'childPages' => array()
                              ),
                              array(
                                   'pageName' => 'others',
                                   'pageLink' => 'others.html',
                                   'childPages' => array()
                              )
                         )
                    )
               )
          ),
          array(
               'pageName' => 'who',
               'pageLink' => 'who.php',
               'childPages' => array(
                    array(
                         'pageName' => 'i',
                         'pageLink' => 'i.html',
                         'childPages' => array(
                              array(
                                   'pageName' => 'was then',
                                   'pageLink' => 'was_then.html',
                                   'childPages' => array()
                              ),
                              array(
                                   'pageName' => 'am now',
                                   'pageLink' => 'am_now.html',
                                   'childPages' => array()
                              ),
                              array(
                                   'pageName' => 'will be',
                                   'pageLink' => 'will_be.html',
                                   'childPages' => array()
                              )
                         )
                    )
               )
          ),
          array(
               'pageName' => 'challenges',
               'pageLink' => 'challenges.php',
               'childPages' => array(
                    array(
                         'pageName' => 'behind me',
                         'pageLink' => 'behind_me.html',
                         'childPages' => array()
                    ),
                    array(
                         'pageName' => 'on me',
                         'pageLink' => 'on_me.html',
						'childPages' => array()
                    ),
                    array(
                         'pageName' => 'ahead of me',
                         'pageLink' => 'ahead_of_me.html',
                         'childPages' => array()
                    )
               )
          ),
          array(
               'pageName' => 'you',
               'pageLink' => 'you.php',
               'childPages' => array(
                    array(
                         'pageName' => 'profile',
                         'pageLink' => 'profile.html',
                         'childPages' => array()
                    ),
                    array(
                         'pageName' => 'settings',
                         'pageLink' => 'settings.html',
                         'childPages' => array()
                    )
               )
          )
     )
);

?>