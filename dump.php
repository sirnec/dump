<?php

$f = "YTo1OntzOjQ6InRpbWUiO2k6MTQ0OTYwODc1MDtzOjI6ImlkIjtpOjcwNzY7czo0OiJmaWxlIjtzOjMxOiJ1dG9ycmVudF8yLjIuMV9idWlsZF8yNTI3My4uZXhlIjtzOjM6InVybCI7czo1NjoiaHR0cDovL3d3dy5vbGR2ZXJzaW9uLmNvbS9tYWMvdXRvcnJlbnQtMi0yLTEtYnVpbGQtMjUyNzMiO3M6NDoicGFzcyI7czozMjoiNGFiOTljNzkyYmQ1NDNkN2ZjNmQ5OTZjZDNjOTk5ZmMiO30=";

$decoded = @base64_decode($f);

$unserialized = @unserialize($decoded);

var_dump($decoded);

echo "<br>";

$f = "YTo1OntzOjQ6InRpbWUiO2k6MTQ0OTM5OTcxMDtzOjI6ImlkIjtpOjE2MTc4O3M6NDoiZmlsZSI7czo0MDoiYnNwbGF5ZXItMi02LTQtMTA3My1ic3BsYXllcjI2NC4xMDczLmV4ZSI7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9lcy5vbGR2ZXJzaW9uLmNvbS93aW5kb3dzL2JzcGxheWVyLTItNi00LTEwNzMiO3M6NDoicGFzcyI7czozMjoiODQ1YzQ5ZDA1YWNmODc4NmMzM2UyNGUxOWY1ZTZmNmQiO30=";

$decoded = @base64_decode($f);

$unserialized = @unserialize($decoded);

var_dump($decoded);


if($_POST['value']) {
    $file = file_put_contents('file.txt', $_POST['value']);
    
    
}
?>
<form method="post">
    <input name="value">
    <input type="submit">
</form>