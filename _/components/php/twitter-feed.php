<?php

require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token'        => "81180639-jMoo215bPNu1ck09sTDh5QJ9CHEGILUms2g5vS1wW",
    'oauth_access_token_secret' => "OWWGOth8qylVXGdNUPzn4WWEKC9FFf2pBF8sJA3kbhAzy",
    'consumer_key'              => "pEuyjvzS5q14r2oHuvLhw",
    'consumer_secret'           => "ZwY0zl10lcnY2l42zSftqaiXdMklk7B25jw6dNpQH78",
);

$url           = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield      = '?screen_name=shoutingwords&count=5';
$requestMethod = 'GET';
$twitter       = new TwitterAPIExchange($settings);

header('Content-Type: application/json');

$response = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();

$string = json_decode($response, $assoc = TRUE);

foreach($string as $items)
    {
      echo '<dl class="dl-horizontal f-twitter">';
      echo "<dt>";
      echo '<i class="fa fa-twitter"></i>';
      echo "</dt>";
      echo "<dd>";
      echo '<a href="https://twitter.com/' . $items['user']['screen_name']. '">@' . $items['user']['screen_name']. ' </a>';
      echo $items['text'];

      $tweet_time = $items['created_at'];

      $time_now = strtotime("now"); // get current timestamp
      $tweet_created = strtotime($tweet_time); // get timestamp when tweet created

      $time_diff = $time_now - $tweet_created; // get time difference

      //calculate different time values
      $minute = 60;
      $hour = $minute * 60;
      $day = $hour * 24;
      $week = $day * 7;

// Need to work on the conditions below as mutliple conditions are true right now. there has to be just one at any give point in time.

      if(is_numeric($time_diff) && $time_diff > 0) {
        //if less than 3 seconds
        if($time_diff < 3) {
          echo "<span>right now</span>";
        } elseif ($time_diff < $minute) {
          //if less than minute
          echo "<span>" . floor($time_diff) . " seconds ago" . "</span>";
        } elseif ($time_diff < $minute * 2) {
          //if less than 2 minutes
          echo "<span>" . "string"; "about 1 minute ago" . "</span>";
        } elseif ($time_diff < $hour) {
          // if less than an hour
          echo "<span>" . floor($time_diff / $minute) . " minutes ago" . "</span>";
        } elseif ($time_diff < $hour * 2) {
          // if less than 2 hours
          echo "<span>about 1 hour ago</span>";
        } elseif ($time_diff < $day) {
          // if less than a day
          echo "<span>" . "string"; floor($time_diff / $hour) . " hours ago" . "</span>";
        } elseif ($time_diff > $day && $time_diff < $day * 2) {
          // if more than a day but less than 2 days
          echo "<span>" . "string"; "yesterday" . "</span>";
        } elseif ($time_diff < $day * 365) {
          // if less than a year
          echo "<span>" . floor($time_diff / $day) . " days ago" . "</span>";
        } elseif ($time_diff > $day * 365) {
          // if more than a year
          echo "<span>over a year ago</span>";
        }
      }

      echo "</dd>";
      echo "</dl>";
    }

?>