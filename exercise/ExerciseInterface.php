<?php

namespace skyeng\exercise;

use Exception;

/**
 * Interface ExerciseInterface
 * Интерфейс реализующий работу сущности упражнения.
 *
 * @package skyeng\exercise
 */
interface ExerciseInterface
{
    /**
     * Расчет результата ответа на упражнение.
     *
     * @return array
     *
     * @throws Exception
     */
    public function check();

    /**
     * Сохранить в хранилище.
     *
     * @param mixed $newAnswer данные для сохранения.
     *
     * @return boolean
     *
     * @throws Exception
     */
    public function saveToStorage($newAnswer);

    /**
     * Получить инициализированный объект расчета результата ответа.
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function getCalculation();

    /**
     * Указать ответ на упражнение.
     *
     * @param mixed $value ответ на упражнение.
     *
     * @return mixed
     */
    public function setAnswer($value);

    /**
     * Получить указанный ответ на упражнение.
     *
     * @return mixed
     */
    public function getAnswer();
}
