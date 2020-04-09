<?php
/**
 *
 * @author     Roberto Padilla
 * @since      Version 1.0.0
 * @filesource
 */

/**
 * EXtended URL Helpers
 *
 * @package RobertoPadilla
 */

if (! function_exists('get_first_segment'))
{
	/**
	 * Returns the first segment after baseURL if doesn't exist segments, return false
	 *
	 * @return string/bool 
	 */
	function get_first_segment(): string
	{
		// get the current url
		$currentURL = current_url();
		// extract the number of segments
		$segmentsArray = explode("/", $currentURL);
		$numSegments = count($segmentsArray);

		// verify if exist more segments than the baseURL and then return the expected value
		if($numSegments > 4)
		{
			return (string) $segmentsArray[3];
		}
		else
		{
			return false;
		}
	}
}

//--------------------------------------------------------------------
