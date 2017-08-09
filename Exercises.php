<?php

namespace skyeng;

use Exception;

/**
 * Class Exercises.
 * Класс реализующий механизм обработки ответов на упражнения.
 *
 * @package skyeng
 */
class Exercises
{

    const KEY_EXERCISE_ID = 'exerciseId';
    const KEY_ANSWER      = 'answer';

    /**
     * Список упражнений.
     *
     * @var array
     */
    public $exercises = [];

    /**
     * Список ответов от ученика.
     *
     * @var array
     */
    public $answers = [];

    /**
     * @param array $exercises список упражений.
     * @param array $answers   список ответов от ученика.
     */
    public function __construct(array $exercises, array $answers)
    {
        $this->setExercises($exercises);
        $this->answers = $answers;
    }

    /**
     * Сформировать массив упражнений.
     *
     * @param $exercises
     *
     * @return $this
     */
    protected function setExercises(array $exercises)
    {
        foreach ($exercises as $item) {
            $this->exercises[$item->id] = $item;
        }

        return $this;
    }

    /**
     * Выполнить проверку ответа на упражнение.
     *
     * @param array $item ответ.
     *
     * @return mixed
     */
    protected function runCalculate($item)
    {
        $exercise = $this->getExerciseById($item[static::KEY_EXERCISE_ID]);
        return $exercise->setAnswer($item[static::KEY_ANSWER])->check();
    }

    /**
     * Получить сущность упражнения по его идентификатору.
     *
     * @param mixed $id идентификатор упражнения.
     *
     * @return mixed
     * @throws Exception
     */
    protected function getExerciseById($id)
    {
        if (isset( $this->exercises[$id] )) {
            return $this->exercises[$id];
        }

        throw new Exception('Не указано упражнение с идентификатором ' . $id);
    }

    /**
     * Запустить проверку и получить результаты.
     *
     * @return array
     */
    public function run()
    {
        $result = [];
        foreach ($this->answers as $item) {
            $result[] = $this->runCalculate($item);
        }
        return $result;
    }
}
