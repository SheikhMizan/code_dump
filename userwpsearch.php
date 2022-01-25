//search usertable
$wp_user_query = new WP_User_Query(
  array(
    'search' => "*{$str}*",
    'search_columns' => array(
    'user_login',
    'user_nicename',
    'user_email',
  ),

) );
 $users = $wp_user_query->get_results();

//search usermeta
 $wp_user_query2 = new WP_User_Query(
  array(
    'meta_query' => array(
    'relation' => 'OR',
      array(
        'key' => 'first_name',
        'value' => $str,
        'compare' => 'LIKE'
      ),
    array(
        'key' => 'last_name',
        'value' => $str,
        'compare' => 'LIKE'
      )
    )
  )
 );

$users2 = $wp_user_query2->get_results();

$totalusers_dup = array_merge($users,$users2);

$totalusers = array_unique($totalusers_dup, SORT_REGULAR);
