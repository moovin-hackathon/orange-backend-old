<?php

namespace App\Entity;

/**
 * @todo Document class Subject.
 *
 * @author Thiago Hofmeister <thiago.souza@moovin.com.br>
 */
class History extends AbstractEntity
{
    /**
     * @ORM\CurrentDate
     * @ORM\Column(type="date")
     *
     * @var date $currentDate
     */
    protected $currentDate;

    /**
     * Retorna a propriedade {@see History::$currentDate}.
     *
     * @return date
     */
    public function getCurrentDate(): date
    {
        return $this->currentDate;
    }

    /**
     * Define a propriedade {@see History::$currentDate}.
     *
     * @param string $currentDate
     *
     * @return History
     */
    public function setCurrentDate($currentDate)
    {
        $this->currentDate = $currentDate;
        return $this;
    }

    /**
     * Converte a entidade para um array esperado pelo documento.
     *
     * @return array
     */
    public function toArray(): array
    {
        /**
         * @todo Implement method toArray.
         */
    }

    /**
     * Cria uma entidade a partir dos dados do documento.
     *
     * @param array $array
     *
     * @return static|AbstractEntity
     */
    public static function fromArray(array $array)
    {
        /**
         * @todo Implement method fromArray.
         */
    }
}
