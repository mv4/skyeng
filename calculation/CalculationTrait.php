<?php

namespace skyeng\calculation;

use Exception;

/**
 * Class CalculationTrait.
 * Набор методов реализующий работу с классом расчета результата ответа на упражнение.
 *
 * @package skyeng\calculation
 */
trait CalculationTrait
{
    /**
     * Имя класса реализующее проверку результата.
     *
     * @var string
     */
    protected $calculation = DefaultCalculation::class;

    /**
     * Получить инициализированный объект расчета результата ответа.
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function getCalculation()
    {
        if (! $this->calculation instanceof CalculationInterface) {
            throw new Exception('Класс объекта расчёта должен быть реализован от интерфейса ' . CalculationInterface::class);
        }
        return new $this->calculation();
    }

    /**
     * Указать название класса для расчета отличного от дефолтного.
     *
     * @param string $value название класса.
     *
     * @return static
     *
     * @throws Exception
     */
    public function setCalculation($value)
    {
        if (! $value instanceof CalculationInterface) {
            throw new Exception('Класс объекта расчёта должен быть реализован от интерфейса ' . CalculationInterface::class);
        }
        $this->calculation = $value;

        return $this;
    }
}
