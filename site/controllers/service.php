<?php

return function($site, $pages, $page) {
    $key    = get('survey');
    $survey = $key != '' ? json_encode(s::get($key)) : '';

  return ['survey' => $survey];
};