<?php 
// Defines database constants
define_if_undefined("DB_HOST", "localhost");
define_if_undefined("DB_NAME", "dd");
define_if_undefined("DB_USERNAME", "root");
define_if_undefined("DB_PASSWORD", "");

// Defines address for anonymisation server
define_if_undefined("ANON_SERVER_URL", "http://localhost:8080/");
define_if_undefined("ANON_SERVER_BROWSER_URL", "http://localhost:8080/");

// Language
define_if_undefined("BASE_LANG", "en");
define_if_undefined("LANG", "sv");

// Defines constants
define_if_undefined("WORKGROUP_PUBLIC_FORUMS_CATEGORY", 9);
define_if_undefined("WORKGROUP_PRIVATE_FORUMS_CATEGORY", 8);
define_if_undefined("POSTS_PER_PAGE", 10);
define_if_undefined("LIST_ITEMS_PER_PAGE", 50);
define_if_undefined("LIST_ITEMS_PER_PAGE_SHORT", 20);
define_if_undefined("MAX_ACTIVE_PROPOSITION_COUNT", 5);
define_if_undefined("DEFAULT_CONSTITUENCY_ID", 313);

define_if_undefined("PROP_TO_VOTE_SUPPORT", 0.2);
define_if_undefined("PROP_REMOVAL_TIME", 14*24*60*60);
define_if_undefined("STANDARD_VOTE_LENGTH", 14*24*60*60);
define_if_undefined("BUFFER_TIME_FOR_CONTINUOUS_ELECTIONS", 1*24*60*60);
define_if_undefined("EDIT_POST_TIME_WINDOW_IN_MINUTES", 10);

define_if_undefined("BASE_DIR", __DIR__);
?>