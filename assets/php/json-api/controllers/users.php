<?php

class JSON_API_Users_Controller {

  public function list_all() {

    foreach (get_users() as $key => $value) {
      $user->id = $value->id;
      $user->name = $value->display_name;
      $user->email = $value->user_email;
      $user->bio = $value->user_description;
      $user->meta = get_user_meta($value->id);
      $display = get_user_meta($value->id, 'display', true);
      $user->display = ($display == 1) ? true : false;
      $user->twitter = get_user_meta($value->id, 'twitter', true);
      $user->twitter_url = "http://twitter.com/" . trim($user->twitter, "@");
      $user->github = get_user_meta($value->id, 'github', true);
      $user->github_url = "http://github.com/" . $user->github;
      $user->gravatar = get_avatar( $value->id, $size = '300');
      $users_list[] = $user;
      unset($user, $display);
    }

    $users->users = $users_list;

    return $users;
  }

}

// Adding to JSON-API
function add_users_controller($controllers) {
  $controllers[] = 'users';
  return $controllers;
}

add_filter('json_api_controllers', 'add_users_controller');

function set_users_controller_path() {
  $dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/php/json-api/";
  return $dir . "controllers/users.php";
}

add_filter('json_api_users_controller_path', 'set_users_controller_path');

?>
