<?php

// will catch any combination of <br>, <br/>, or <br />
// with any amount or type of whitespace between them and replace them with a single <br />
    
function replace_multi_br_to_single($string)
{
    return (string) preg_replace('#(<br */?>\s*)+#i', '<br />', $string);
}
