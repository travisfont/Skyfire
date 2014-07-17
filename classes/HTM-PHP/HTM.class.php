<?php

class HTM
{

	public static function __callStatic($tag, $arguments)
	{
		$tags = array
		(
			'a', 'i', 'p', 'u',
			'em', 'hr',
			'del', 'div', 'ins', 'pre',
			'cite', 'code', 'font', 'span', 'sub', 'sup',
			'strike',
			'textarea', 'blockquote'
		);
		$html = '';

		if (in_array($tag, $tags))
		{
			if (isset($arguments[1]))
			{
				foreach ($arguments[1] as $attribute => $element)
				{
					$html .= ' '.$attribute.'="'.$element.'"';
				}
			}
		
			return '<'.$tag.$html.'>'.$arguments[0].'</'.$tag.'>';
		}
		elseif (in_array(strtolower($tag), array('br')))
		{
			if (!isset($arguments[0]))
			{
				$arguments[0] = 1;
			}
			for ($i = 0; $i < $arguments[0]; $i++)
			{
				$html .= '<'.$tag.'/>';
			}

			return $html;
		}
		else
		{
			trigger_error ($tag.' object does not exist HTML class', E_USER_ERROR);
		}
	}

}
