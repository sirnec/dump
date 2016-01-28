<?php

$files = [
    'YTo1OntzOjQ6InRpbWUiO2k6MTQ0OTM5OTcxMDtzOjI6ImlkIjtpOjE2MTc4O3M6NDoiZmlsZSI7czo0MDoiYnNwbGF5ZXItMi02LTQtMTA3My1ic3BsYXllcjI2NC4xMDczLmV4ZSI7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9lcy5vbGR2ZXJzaW9uLmNvbS93aW5kb3dzL2JzcGxheWVyLTItNi00LTEwNzMiO3M6NDoicGFzcyI7czozMjoiODQ1YzQ5ZDA1YWNmODc4NmMzM2UyNGUxOWY1ZTZmNmQiO30=',
    'YTo1OntzOjQ6InRpbWUiO2k6MTQ0OTYwODc1MDtzOjI6ImlkIjtpOjcwNzY7czo0OiJmaWxlIjtzOjMxOiJ1dG9ycmVudF8yLjIuMV9idWlsZF8yNTI3My4uZXhlIjtzOjM6InVybCI7czo1NjoiaHR0cDovL3d3dy5vbGR2ZXJzaW9uLmNvbS9tYWMvdXRvcnJlbnQtMi0yLTEtYnVpbGQtMjUyNzMiO3M6NDoicGFzcyI7czozMjoiNGFiOTljNzkyYmQ1NDNkN2ZjNmQ5OTZjZDNjOTk5ZmMiO30=',
    'YTo1OntzOjQ6InRpbWUiO2k6MTQ1MDA0MTU3NztzOjI6ImlkIjtpOjcwNzY7czo0OiJmaWxlIjtzOjMxOiJ1dG9ycmVudF8yLjIuMV9idWlsZF8yNTI3My4uZXhlIjtzOjM6InVybCI7czo1NToiaHR0cDovL3d3dy5vbGR2ZXJzaW9uLmZyL21hYy91dG9ycmVudC0yLTItMS1idWlsZC0yNTI3MyI7czo0OiJwYXNzIjtzOjMyOiI5YTcxNjUxMjUwMmVmODA3OTlmYzQ5YWEwZjgzODBjNyI7fQ==',
    'YTo1OntzOjQ6InRpbWUiO2k6MTQ1MDA2OTY5NDtzOjI6ImlkIjtpOjI3MjtzOjQ6ImZpbGUiO3M6MTA6Im1pcmM1OC5leGUiO3M6MzoidXJsIjtzOjQyOiJodHRwOi8vd3d3Lm9sZHZlcnNpb24uY29tL3dpbmRvd3MvbWlyYy01LTgiO3M6NDoicGFzcyI7czozMjoiNDQwNDUxNjg3NmUzYjExYmQ0MmUzMzQ5NGMwMDI4MDgiO30=',
];

echo "<pre>";

foreach ($files as $file) {
    $decoded = base64_decode($file);
    $unserialized_data = unserialize($decoded);
    
    echo 'file: ' . $unserialized_data['file'] . ', url: ' . $unserialized_data['url'] . ';' . PHP_EOL;
    
}

echo "</pre>";