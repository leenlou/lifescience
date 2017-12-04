<?php

return function($site, $pages, $page) {

  $q     = get('q');
  $posts = page('your-health-digest')->children()->visible()->search($q, 'title|description|text');

  return [
    'q'     => $q,
    'posts' => $posts,
  ];

};