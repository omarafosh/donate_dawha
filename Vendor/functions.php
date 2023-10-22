
<?php

// ===============================
// HTTP Request Functions
// ==============================
function get($name = 'home', $def = '')
{

    return isset($_REQUEST[$name]) ?? $def;
}

function bootstrap($home_page)
{
    $page = parse_url($_SERVER['REQUEST_URI'])['path'];
    if ($page == '/') {
        $page = $home_page;
    } else {
        $page = substr($page, 1);
    }
    return $page;
}


// ============

function dd($data)
{
    echo "<pre style='background-color:#000;color:#0f0'>";
    print_r($data);
    echo "</pre>";
    exit();
}




function assets($filename)
{
   return 'assets/css/'.$filename;
}
