<?php

// Array interface and function into object inherence

class SF_Array extends Controller
{
    protected function array_depth(array $array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'array' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($array)
            ->returning(DT::UINT8);
        }
        else
        {
            return (int) array_depth($array);
        }
    }

    protected function array_keys_exist(array $needles, array $haystack)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'needles'  => DT::TYPE_ARRAY,
                'haystack' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($needles, $haystack)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) array_keys_exist($needles, $haystack);
        }
    }

    protected function clear_empty_values(array $array, $keep_zero = TRUE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'array'     => DT::TYPE_ARRAY,
                'keep_zero' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($array, $keep_zero)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) clear_empty_values($array, $keep_zero);
        }
    }

    protected function convert_array_to_object(array $array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'array' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($array)
            ->returning(DT::MIXED);
        }
        else
        {
            return convert_array_to_object($array);
        }
    }

    protected function fill_array_key_leading_zeros(array $array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'array' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($array)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) fill_array_key_leading_zeros($array);
        }
    }

    protected function in_multi_array($needle, $haystack, $strict = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'needle'   => DT::MIXED,
                'haystack' => DT::TYPE_ARRAY,
                'strict'   => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($needle, $haystack, $strict)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) in_multi_array($needle, $haystack, $strict);
        }
    }

    protected function is_associate_array($array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'array' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($array)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_associate_array($array);
        }
    }

    protected function multi_explode(array $delimiters, $string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'delimiters' => DT::TYPE_ARRAY,
                'string'     => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($delimiters, $string)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) multi_explode($delimiters, $string);
        }
    }

    function preg_array_key_exists($pattern, array $array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'pattern' => DT::STRING,
                'array'   => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($pattern, $array)
            ->returning(DT::UINT8);
        }
        else
        {
            return (int) preg_array_key_exists($pattern, $array);
        }
    }

    protected function randomize_array(array $arr, $amount = 1)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'arr'    => DT::TYPE_ARRAY,
                'amount' => DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($arr, $amount)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) randomize_array($arr, $amount);
        }
    }

    protected function randomize_array_element(array $array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'array' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($array)
            ->returning(DT::MIXED);
        }
        else
        {
            return randomize_array_element($array);
        }
    }

    protected function subsort_array(array $array, $subkey)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'array'  => DT::TYPE_ARRAY,
                'subkey' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($array, $subkey)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) subsort_array($array, $subkey);
        }
    }

    protected function transpose_data(array $array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'array' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($array)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) transpose_data($array);
        }
    }

    protected function trim_array_values($array)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'array' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($array)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) trim_array_values($array);
        }
    }

    protected function trim_explode($delimiter, $string, $trim = 'trim', $limit = NULL)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'delimiters' => DT::TYPE_ARRAY,
                'string'     => DT::STRING,
                'trim'       => DT::STRING,
                'limit'      => DT::MIXED
            ])
            ->call(__FUNCTION__)
            ->with($delimiter, $string, $trim, $limit)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) trim_explode($delimiter, $string, $trim, $limit);
        }
    }
}
