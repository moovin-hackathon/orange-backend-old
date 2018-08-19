<?php

namespace App\Entity;

/**
 * @todo Document class Subject.
 *
 * @author Thiago Hofmeister <thiago.souza@moovin.com.br>
 */
class Answer extends AbstractEntity
{
    /**
     * @ORM\Column(type="text", length=255)
     *
     * @var string $description
     */
    protected $description;

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