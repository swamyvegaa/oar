<?php

error_reporting(E_ALL ^ E_NOTICE);

$username = $_GET['username'];
$limit = 1;
$interval = 3600;

define("SECOND", 1);
define("MINUTE", 60 * SECOND);
define("HOUR", 60 * MINUTE);
define("DAY", 24 * HOUR);
define("MONTH", 30 * DAY);

function wpimpress_twitter_time($time)
{
    $delta = strtotime('+0 hours') - $time;
    if ($delta < 2 * MINUTE) {
        return "1 min ago";
    }
    if ($delta < 45 * MINUTE) {
        return floor($delta / MINUTE) . " minutes ago";
    }
    if ($delta < 90 * MINUTE) {
        return "1 hour ago";
    }
    if ($delta < 24 * HOUR) {
        return floor($delta / HOUR) . " hours ago";
    }
    if ($delta < 48 * HOUR) {
        return "Yesterday";
    }
    if ($delta < 30 * DAY) {
        return floor($delta / DAY) . " days ago";
    }
    if ($delta < 12 * MONTH) {
        $months = floor($delta / DAY / 30);
        return $months <= 1 ? "1 month ago" : $months . " months ago";
    } else {
        $years = floor($delta / DAY / 365);
        return $years <= 1 ? "1 year ago" : $years . " years ago";
    }
}


function wpimpress_twitter_feed($username, $limit, $interval = 3600) {


		$twitter_feed = "http://twitter.com/statuses/user_timeline/" . $username . ".json?count=" . $limit;

		$cache_file = 'cache/' . $username . '-twitter-cache';

		if (file_exists($cache_file)) {
			$last = filemtime($cache_file);
		} 

		$now = time();

		if ( !$last || (( $now - $last ) > $interval) ) {

			$context = stream_context_create(array(
				'http' => array(
					'timeout' => 3
				)
			));

			$cache_rss = @file_get_contents($twitter_feed, 0, $context);

			if (!empty($cache_rss)) {
				  echo "<!-- SUCCESS: Twitter feed used to update cache file -->";
				$cache_static = fopen($cache_file, 'wb');
				fwrite($cache_static, serialize($cache_rss));
				fclose($cache_static);
				
			} else {

				echo "<!-- ERROR: Twitter feed was blank! Using cache file. -->";
			}

			$rss = @unserialize(file_get_contents($cache_file));
		}
		else {

			echo "<!-- SUCCESS: Cache file was recent enough to read from -->";
			$rss = @unserialize(file_get_contents($cache_file));
		}	

		if($rss != '')
		{
			$decodes = json_decode($rss, true);

			foreach($decodes as $decode => $text)
			{
			
				$unix_time = strtotime($text['created_at']);
				$pretty_time = wpimpress_twitter_time($unix_time);

				$subject = $text['text'];

				$subject = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $subject);
				$subject = preg_replace("/@(\w+)/", "<a href=\"http://www.twitter.com/\\1\" target=\"_blank\">@\\1</a>", $subject);

				?>

				<?php echo $subject; ?>
                
				<?php
			}
		}


}

wpimpress_twitter_feed($username, $limit, $interval = 3600);

?>