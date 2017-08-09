<?php
namespace skyeng\storage;

/**
 * Class DefaultStorage.
 * Класс для работы с каким-то храилищему.
 *
 * @package skyeng\storage
 */
class DefaultStorage implements StorageInterface
{
    public static $instance;

    /**
     * Инициализация обращения к хранилищу.
     *
     * @param mixed $params набор параметров.
     *
     * @return mixed
     */
    public static function instance($params)
    {
        if (null === static::$instance) {
            static::$instance = new static($params);
        }

        return static::$instance;
    }

    /**
     * Сохранение в хранилище.
     *
     * @param array $value массив данных для сохранения.
     *
     * @return boolean
     */
    public function save(array $value)
    {
        return true;
    }
}