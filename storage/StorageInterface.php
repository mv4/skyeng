<?php

namespace skyeng\storage;

/**
 * Interface StorageInterface
 * Интерфейс реализующий работу хранилища.
 *
 * @package skyeng\storage
 */
interface StorageInterface
{
    /**
     * Инициализация обращения к хранилищу.
     *
     * @param mixed $params набор параметров.
     *
     * @return mixed
     */
    public static function instance($params);

    /**
     * Сохранение в хранилище.
     *
     * @param array $value массив данных для сохранения.
     *
     * @return mixed
     */
    public function save(array $value);
}
