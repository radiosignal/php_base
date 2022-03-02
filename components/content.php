<?php
include "../functions/renderTemplate.php";

$about = renderTemplate('about',777777);

echo renderTemplate('layout', $about);