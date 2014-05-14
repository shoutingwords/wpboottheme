<?php

function getTwitterFollowers($screenName = 'shoutingwords')
{
    require_once('cache.php');
    require_once('TwitterAPIExchange.php');
    // this variables can be obtained in http://dev.twitter.com/apps
    // to create the app, follow former tutorial on http://www.codeforest.net/get-twitter-follower-count
    $settings = array(
        'oauth_access_token' => "81180639-jMoo215bPNu1ck09sTDh5QJ9CHEGILUms2g5vS1wW",
        'oauth_access_token_secret' => "OWWGOth8qylVXGdNUPzn4WWEKC9FFf2pBF8sJA3kbhAzy",
        'consumer_key' => "pEuyjvzS5q14r2oHuvLhw",
        'consumer_secret' => "ZwY0zl10lcnY2l42zSftqaiXdMklk7B25jw6dNpQH78"
    );
 
    $cache = new Cache();
  
    // get follower count from cache
    $numberOfFollowers = $cache->read('cfTwitterFollowers.cache');
    // cache version does not exist or expired
    if (false === $numberOfFollowers) {
        // forming data for request
        $apiUrl = "https://api.twitter.com/1.1/users/show.json";
        $requestMethod = 'GET';
        $getField = '?screen_name=' . $screenName;
 
        $twitter = new TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getField)
             ->buildOauth($apiUrl, $requestMethod)
             ->performRequest();
 
        $followers = json_decode($response);
        $numberOfFollowers = $followers->followers_count;
  
        // cache for an hour
        $cache->write('cfTwitterFollowers.cache', $numberOfFollowers, 1*60*60);
    }
  
    return $numberOfFollowers;
}

?>