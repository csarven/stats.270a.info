<?php
#ini_set('display_errors', '1');
#ini_set('error_reporting', '1');

#print_r($_GET);
#print_r(sha1($_GET['datasetX'].$_GET['datasetY'].$_GET['refPeriod']));

$file = "/var/shiny-server/www/lsd-analysis/www/plots/".sha1($_GET['datasetX'].$_GET['datasetY'].$_GET['refPeriod']).".svg";

if (file_exists($file)) {
    $fp = fopen($file, 'rb');

    header('Last-Modified: '.gmdate('D, d M Y H:i:s', filemtime($file)).' GMT');

    if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) &&
        filemtime($file) == strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
        header("HTTP/1.1 304 Not Modified");
    }
    header("Content-Type: image/svg+xml");
    fpassthru($fp);
}
else {
    header("HTTP/1.1 404 Not Found");
    header("Status: 404 Not Found");
}

exit();
?>
