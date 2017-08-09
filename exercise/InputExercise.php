<?php

namespace skyeng\exercise;

/**
 * Class InputExercise.
 * Класс упражнения для указания правильного ответа.
 *
 * @package skyeng\exercise
 */
class InputExercise extends ExerciseAbstract
{
    /**
     * @param mixed $id            идентификатор упражнения.
     * @param mixed $correctAnswer правильный ответ.
     */
    public function __construct($id, $correctAnswer)
    {
        $this->id            = $id;
        $this->correctAnswer = $correctAnswer;
    }
}
