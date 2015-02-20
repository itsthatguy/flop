<?php

$dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/php/";
@require_once $dir . "manifest.php";


add_filter('json_api_encode', 'json_api_encode_acf');

function json_api_encode_acf($response) {

  if (isset($response['posts'])) {
    foreach ($response['posts'] as $post) {
      json_api_add_acf($post); // Add specs to each post
      json_api_add_gravatar($post);
    }
  }
  else if (isset($response['post'])) {
    json_api_add_acf($response['post']); // Add a specs property
    json_api_add_gravatar($response['post']);
  }

  elseif (isset($response['pages'])) {
    foreach ($response['pages'] as $page) {
      json_api_add_acf($page); // Add specs to each post
      json_api_add_gravatar($page);
    }
  }
  else if (isset($response['page'])) {
    json_api_add_acf($response['page']); // Add a specs property
    json_api_add_gravatar($response['page']);
  }

  return $response;
}


function json_api_add_acf(&$post) {
  json_api_clean($post);
  $post->acf = get_fields($post->id);
  $post->date = date('F j, Y', strtotime($post->modified));

  $shorturl = get_bitly($post->id);
  $post->bitly = $shorturl;
}


function get_bitly($id) {
  $shorturl = get_post_meta( $id, '_wpbitly', true );

  if ( $shorturl == false )
  {
    wpbitly_generate_shortlink( $id );
    $shorturl = get_post_meta( $id, '_wpbitly', true );
  }
  return $shorturl;
}


function json_api_clean(&$post) {
  unset($post->title_plain);
  unset($post->custom_fields);
  unset($post->comments);
  unset($post->comment_count);
  unset($post->comment_status);
}


function json_api_add_gravatar(&$post) {
  $post->author->gravatar = get_avatar( $post->author->id, $size = '300');
}


function json_api_add_date(&$post) {
}


?>


