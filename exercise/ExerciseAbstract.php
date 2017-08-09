<?php

namespace skyeng\exercise;

use Exception;
use skyeng\calculation\CalculationTrait;
use skyeng\storage\StorageTrait;

/**
 * Class ExerciseAbstract.
 * Базовые методы класса упражнения.
 */
abstract class ExerciseAbstract implements ExerciseInterface
{
    use CalculationTrait, StorageTrait;

    protected $answer;

    /**
     * Идентификатор упражнения.
     *
     * @var string
     */
    public $id;

    /**
     * Правильный ответ.
     *
     * @var mixed
     */
    public $correctAnswer;

    /**
     * Указать ответ на упражнение.
     *
     * @param mixed $value ответ на упражнение.
     *
     * @return mixed
     */
    public function setAnswer($value)
    {
        if (! $this->saveToStorage($value)) {
            return false;
        }
        $this->answer = $value;
        return $this;
    }

    /**
     * Получить указанный ответ на упражнение.
     *
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Расчет результата ответа на упражнение.
     *
     * @return array
     *
     * @throws Exception
     */
    public function check()
    {
        if (null === $this->getAnswer()) {
            throw new ExerciseException('Не указан ответ на упражнение.');
        }
        $calculation = $this->getCalculation();
        $calculation->setAnswer($this->getAnswer())->setCorrectAnswer($this->correctAnswer)->run();
        return [
            'isCorrect' => $calculation->getIsCorreect(),
            'score'     => $calculation->getScore(),
        ];
    }
}
