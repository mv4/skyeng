<?php

namespace skyeng\exercise;

/**
 * Class SelectExercise.
 * Класс упражнения с возможностью выбора правильного ответа.
 *
 * @package skyeng\exercise
 */
class SelectExercise extends ExerciseAbstract
{
    /**
     * Список возможых ответов.
     *
     * @var array
     */
    public $listAnswer;

    /**
     * @param mixed $id            идентификатор упражнения.
     * @param array $listAnswer    список возможных ответов.
     * @param mixed $correctAnswer правильный ответ.
     */
    public function __construct($id, array $listAnswer, $correctAnswer)
    {
        $this->id            = $id;
        $this->listAnswer    = $listAnswer;
        $this->correctAnswer = $correctAnswer;
    }
}
