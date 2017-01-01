<?php
error_reporting(E_ALL);

/**
 * @link http://php.net/boolval
 */
assert(boolval("a")===true);

/**
 * @link http://php.net/doubleval
 * @link http://php.net/floatval
 */
assert(doubleval(-2)===floatval(-2));

/**
 * @link http://php.net/empty
 */
assert(empty($var)===true);

/**
 * @link http://php.net/intval
 */
assert(intval("1.2")===1);

/**
 * @link http://php.net/is_array
 */
assert(is_array([])===true);

/**
 * @link http://php.net/is_bool
 */
assert(is_bool(true)===true);

/**
 * @link http://php.net/is_double
 * @link http://php.net/is_float
 */
assert(is_double(1.2)===is_float(1.2));

/**
 * @link http://php.net/is_double
 * @link http://php.net/is_real
 */
assert(is_double(.2)===is_real(1.2));

/**
 * @link http://php.net/is_int
 * @link http://php.net/is_integer
 * @link http://php.net/is_long
 */
assert(is_int(1)===is_integer(1));
assert(is_int(2)===is_long(2));

/**
 * @link http://php.net/is_null
 */
assert(is_null(null)===true);

/**
 * @link http://php.net/is_numeric
 */
assert(is_numeric("12")===true);

/**
 * @link http://php.net/is_object
 * @link http://php.net/json_decode
 */
assert(is_object(new stdClass)===is_object(json_decode("{}")));

/**
 * @link http://php.net/is_scalar
 */
assert(is_scalar([])===false);

/**
 * @link http://php.net/is_string
 */
assert(is_string("im a string. so im true")===true);

/**
 * @link http://php.net/isset
 */
assert(isset($undefined)===false);

/**
 * @link http://php.net/settype
 */
settype($a, "null");
assert(is_null($a)===true);

/**
 * @link http://php.net/strval
 */
assert(strval(1)==="1");

/**
 * @link http://php.net/var_export
 * @link http://php.net/var_dump
 */
$a ="2";
assert(var_export($a)===null);
assert(var_export($a,true)==="'2'");