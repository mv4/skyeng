<?php

namespace skyeng\storage;

use Exception;

/**
 * Class StorageTrait.
 * Набор методов реализующий работу с хранилищем.
 *
 * @package skyeng\storage
 */
trait StorageTrait
{
    /**
     * Имя класса реализуещее хранилище (БД например).
     *
     * @var string
     */
    protected $storage = DefaultStorage::class;

    /**
     * Получить инициализированный объект хранилища ответов.
     *
     * @return StorageInterface
     *
     * @throws Exception
     */
    protected function getStorage()
    {
        if (! $this->storage instanceof StorageInterface) {
            throw new Exception('Класс объекта хранилища должен быть реализован от интерфейса ' . StorageInterface::class);
        }
        $storage = $this->storage;
        return $storage::instance([]);
    }

    /**
     * Укакзать название класса для работы с хранилищеем.
     *
     * @param string $value название класса.
     *
     * @return static
     *
     * @throws Exception
     */
    public function setStorage($value)
    {
        if (! $value instanceof StorageInterface) {
            throw new Exception('Класс объекта хранилища должен быть реализован от интерфейса ' . StorageInterface::class);
        }
        $this->storage = $value;

        return $this;
    }

    /**
     * Сохранить в хранилище.
     *
     * @param mixed $newAnswer данные для сохранения.
     *
     * @return boolean
     *
     * @throws Exception
     */
    public function saveToStorage($newAnswer)
    {
        return $this->getStorage()->load($newAnswer)->save();
    }
}
