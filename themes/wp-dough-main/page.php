<?php
/** config for default page template **/

$title = get_the_title();
$content = get_the_content();

render('views/templates/default-page.php', compact('title', 'content'));
