<?php
add_filter('login_redirect', 'custom_redirect_filter', 0, 3);

function custom_redirect_filter($redirect_to, $request, $user) {
   $user_blogs = get_blogs_of_user($user->ID);
   foreach ($user_blogs as $user_blog) {
       $user_blog->path;
       return site_url($user_blog->path);
   }
   return site_url();
}
?>
