<?php

require_once 'classes/NextMovie.php';

require 'functions.php';
require 'consts.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);

$data = $next_movie->get_data();

render_template('head', ['title' => $data['title']]);
render_template('main', array_merge(
    $data,
    ['untilMessage' => $next_movie->get_until_message()]
));;
render_template('styles');
