<?php
function dd($result)
{
?>
    <pre>
        <?php var_dump($result); ?>
    </pre>
<?php
}
?>
<style>
    pre {
        background-color: #000;
        color: #fff;
    }
</style>


<?php
$root = __DIR__;
$auth = __DIR__."\\pages\\auth\\";
$admin = __DIR__ . "\\" . "admin\\";
$assets = __DIR__ . "\\" . "assets\\uploads\\";
$database = __DIR__ . "\\" . "database\\";
$pages_websit = __DIR__ . "\\pages\\";
$pages_admin = __DIR__ . "\\admin\\pages\\";
$partials = __DIR__ . "\\pages\\partials\\";
$partials_admin = __DIR__ . "\\admin\\partials\\";
$controller = $database . "controllers\\";

function asset($path, $folder)
{
    return '../../assets/uploads/' . $folder . "/" . $path;
}

