<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get the Code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>get the code of your newsletter</h1>
</div>
<?php

/**
 * get the code of your newsletter
 * show index.php in iframe
 * show code in textarea
 */

include '_variables.php';
$get_code = file_get_contents($newsletter_root."index.php");

echo '<div class="container">';
echo '<div class="row g-1">';
echo '<div class="col-4">';
echo '<div class="p-3 bg-light">';
echo '<iframe src="'.$newsletter_root.'index.php" style="width:100%;height:500px;">';
echo '</iframe>';
echo '</div>';
echo '</div>';
echo '<div class="col-8">';
echo '<div class="p-3 bg-info">';
echo '<textarea class="form-control" style="height:500px;">';
echo "$get_code";
echo '</textarea>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
