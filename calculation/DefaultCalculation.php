<?php

namespace skyeng\calculation;

/**
 * Class DefaultCalculation.
 * Класс с правилом расчета правильности ответа на упражнение.
 *
 * @package skyeng\calculation
 */
class DefaultCalculation implements CalculationInterface
{
    /**
     * Флаг запуска раасчета.
     *
     * @var boolean
     */
    private $isRun = false;

    /**
     * Кол-во балов полученных за ответ.
     *
     * @var mixed
     */
    protected $score;

    /**
     * Флаг верного выполнения упражнения.
     *
     * @var boolean
     */
    protected $isCorrect;

    /**
     * Ответ на упражнение.
     *
     * @var mixed
     */
    protected $answer;

    /**
     * Правильный ответ на упражнение.
     *
     * @var mixed
     */
    protected $correctAnswer;

    /**
     * Указать ответ на упражнение.
     *
     * @param mixed $value ответ на упражнение.
     *
     * @return static
     */
    public function setAnswer($value)
    {
        $this->answer = $value;
        return $this;
    }

    /**
     * Указать верный ответ на упражнение.
     *
     * @param mixed $value верный ответ на упражнение.
     *
     * @return static
     */
    public function setCorrectAnswer($value)
    {
        $this->correctAnswer = $value;
        return $this;
    }

    /**
     * Получить статус верности ответа на упражнение.
     *
     * @return boolean
     *
     * @throws CalculationException
     */
    public function getIsCorrect()
    {
        if ($this->isRun) {
            throw new CalculationException('Перед получением результата требуется выполнить метод run()');
        }
        return $this->isCorrect;
    }

    /**
     * Получить кол-во набранных балов за упражнение.
     *
     * @return mixed
     *
     * @throws CalculationException
     */
    public function getScore()
    {
        if ($this->isRun) {
            throw new CalculationException('Перед получением результата требуется выполнить метод run()');
        }
        return $this->score;
    }

    /**
     * Метод с какой-то логикой проверки ответов на упражнение.
     *
     * @return static
     */
    public function run()
    {
        $this->score     = 1;
        $this->isCorrect = true;
        $this->isRun     = true;

        return $this;
    }
}
