<?php

return function($site, $pages, $page) {

  $q     = get('q');
  $posts = page('press')->search($q, 'title|description|text');

  return [
    'q'     => $q,
    'posts' => $posts,
  ];

};