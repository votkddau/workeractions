<?php

namespace Victor\WorkerRoles\Common;

class BaseEnum
{
    /**
     * cache reflection request
     * @var array
     */
    protected static $constCache = [];

    /**
     * [constant => title] list
     * @var array
     */
    protected static $list = [];

    /**
     * @var string|int
     */
    protected static $value;

    /**
     * BaseEnum constructor.
     * @param string $value
     * @throws \ReflectionException
     */
    public function __construct($value)
    {
        if (!static::isValidValue($value)) {
            throw new \Exception("Unknown value '$value'");
        } else {
            static::$value = $value;
        }
    }

    /**
     * Returns current value
     * @return string
     */
    public static function getValue()
    {
        return static::$value;
    }

    /**
     * get class constant array
     * @return array
     * @throws \ReflectionException
     */
    public static function getConstants()
    {
        if (empty(static::$constCache[get_called_class()])) {
            $reflect = new \ReflectionClass(get_called_class());
            static::$constCache[get_called_class()] = $reflect->getConstants();
        }

        return static::$constCache[get_called_class()];
    }

    /**
     * is there constant with name
     * @param string $name
     * @return boolean
     * @throws \ReflectionException
     */
    public static function isValidName($name)
    {
        $constants = static::getConstants();
        return array_key_exists($name, $constants);
    }

    /**
     * is there constant with this value
     * @param string $value
     * @return boolean
     * @throws \ReflectionException
     */
    public static function isValidValue($value)
    {
        $values = array_values(static::getConstants());

        return in_array($value, $values, $strict = true);
    }

    /** get class constant values array
     * @return array
     * @throws \ReflectionException
     */
    public static function getValuesList()
    {
        return array_values(static::getConstants());
    }

    /**
     * Returns title by key
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    public static function getTitleByKey($key)
    {
        if (!static::isValidValue($key)) {
            throw new \Exception("Unknown value '$key'");
        }
        return !array_key_exists($key, static::$list) ? $key : static::$list[$key];
    }

    /**
     * Returns items list
     * @return array
     */
    public static function getItemsList()
    {
        return static::$list;
    }
}