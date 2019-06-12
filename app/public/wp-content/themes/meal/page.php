<?php

get_header();
the_post();
the_content();

echo "<hr/>";
echo get_transient('hello');
echo "<hr/>";
echo get_transient('world');
echo "<hr/>";

get_footer();