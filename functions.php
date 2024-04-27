<?php

declare(strict_types=1);

function render_template(string $template, array $data = []) {
    extract($data);
    require "templates/$template.php";
};

function get_data(string $url):array {
    $result = file_get_contents($url);

    return json_decode($result, true);
}
