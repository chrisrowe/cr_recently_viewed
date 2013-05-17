<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class cr_recently_viewed {

  function __construct()
	{
		$this->EE =& get_instance();
	}

	function addrecent()
	{
		$entry_id = $this->EE->TMPL->fetch_param('entry_id');

		if ($entry_id)
		{
			if (isset($_COOKIE['recently_viewed']))
			{
				$recent_cookie = unserialize($_COOKIE['recently_viewed']);
				if (!in_array($entry_id, $recent_cookie))
				{
					array_unshift($recent_cookie, $entry_id);
				}
				$recent_cookie = serialize($recent_cookie);
			}
			else
			{
				$recently_viewed[] = $entry_id;
				$recent_cookie = serialize($recently_viewed);
			}
			setcookie('recently_viewed', $recent_cookie, strtotime('+30 days'), '/', '');
		}
	}

	function getrecent()
	{
		if (isset($_COOKIE['recently_viewed']))
		{
			$recent_cookie = unserialize($_COOKIE['recently_viewed']);
			$recent_cookie = array_filter($recent_cookie);
			return implode("|", $recent_cookie);
		}
	}

}

/* End of file pi.cr_recently_viewed.php */
/* Location: ./system/expressionengine/third_party/cr_recently_viewed/pi.cr_recently_viewed.php */
