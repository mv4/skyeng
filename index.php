<?php

use skyeng\exercise\InputExercise;
use skyeng\exercise\SelectExercise;
use skyeng\Exercises;

$answers = [
    [
        'exerciseId' => 'select1',
        'answer'     => 0,
    ],
    [
        'exerciseId' => 'input1',
        'answer'     => 'despicable',
    ],
];

$exercises = [
    new SelectExercise('select1', [
        'Apple',
        'Banana',
    ], 0),
    new InputExercise('input1', 'holy'),
];

$class = new Exercises($exercises, $answers);

$result = $class->run();
