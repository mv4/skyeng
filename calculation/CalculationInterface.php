<?php

namespace skyeng\calculation;

/**
 * Interface CalculationInterface
 * Интерфейс реализующий работу расчета правильности ответа на упражнение.
 *
 * @package skyeng\calculation
 */
interface CalculationInterface
{
    /**
     * Получить кол-во набранных балов за упражнение.
     *
     * @return mixed
     */
    public function getScore();

    /**
     * Получить статус верности ответа на упражнение.
     *
     * @return boolean
     */
    public function getIsCorrect();

    /**
     * Метод с какой-то логикой проверки ответов на упражнение.
     *
     * @return static
     */
    public function run();

    /**
     * Указать ответ на упражнение.
     *
     * @param mixed $value ответ на упражнение.
     *
     * @return static
     */
    public function setAnswer($value);

    /**
     * Указать верный ответ на упражнение.
     *
     * @param mixed $value верный ответ на упражнение.
     *
     * @return static
     */
    public function setCorrectAnswer($value);
}