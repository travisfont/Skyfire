<?php

/**
 * @param $tag_name
 * @param $html
 * @param string $encoding
 *
 * @return array
 */
function get_element_all_attributes($tag_name, $html, $encoding = 'UTF-8')
{
    $dom = new DOMDocument('1.0', $encoding);
    $dom->loadHTML($html);

    $attributes = array();
    foreach ($dom->getElementsByTagName($tag_name)->item(0)->attributes as $attribute_name => $attribute_node)
    {
        $attributes[$attribute_name] = $attribute_node->nodeValue;
    }

    return (array) $attributes;
}

/* EXAMPLE CODE:
$html = '
<select name="event_no_end_time">
    <option value="true">Yes</option>
    <option value="false">No</option>
</select>';
$attributes = get_element_all_attributes('select', $html);

echo var_dump($attributes);

# RETURNS:
array (size=1)
  'name' => string 'event_all_day_event' (length=19)
*/