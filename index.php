<?php 
    require './Core/HTML.php';
    // require './Core/URL.php';
    $content = 'App/Views/main.php';
    $scripts = [HTML::script('component/test/Main.js?v='.time()),HTML::script('assets/web/main/script.js?v='.time())];
    require 'App/Views/layouts/web.php';
?>