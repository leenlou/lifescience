<?php
/**
 * Youtube Video Info
 */
field::$methods['youtube_info'] = function($field) {
    preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $field->value, $matches);

    if (empty($matches)) {
        return false;
    }

    $id   = $matches[0];
    $data = file_get_contents("http://youtube.com/get_video_info?video_id=". $id);

    parse_str($data, $info);

    return array(
        'id' => $id,
        'title' => $info['title'],
        'embed' => 'https://www.youtube.com/embed/',
    );
};
