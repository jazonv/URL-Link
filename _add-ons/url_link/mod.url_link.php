<?php

class Modifier_url_link extends Modifier
{

	public function index($value, $parameters=array())
	{
		$original_url = $value;

		// Remove 'http://'
		if (strpos($value, 'http://') === 0) {
			$value = substr($value, 7);
		}

		// Remove 'https://'
		if (strpos($value, 'https://') === 0) {
			$value = substr($value, 8);
		}

		// Remove 'www'
		if (strpos($value, 'www.') === 0) {
			$value = substr($value, 4);
		}

		// Remove trailing slash
		if (substr($value, -1) === '/') {
			$value = rtrim($value, '/');
		}

		if (isset($parameters[0]) && $parameters[0] == 'no')
			return $value;
		else
			return "<a href=\"$original_url\">$value</a>";
	}

}