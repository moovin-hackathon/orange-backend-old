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
     * @ORM\Description
     * @ORM\Column(type="text")
     *
     * @var string $description
     */
    protected $description;

    /**
     * @ORM\Correct
     * @ORM\Column(type="boolean")
     *
     * @var bool $correct
     */
    protected $correct;

    /**
     * Retorna a propriedade {@see Answer::$description}.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Define a propriedade {@see Answer::$description}.
     *
     * @param string $description
     *
     * @return Answer
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Answer::$correct}.
     *
     * @return bool
     */
    public function isCorrect(): bool
    {
        return $this->correct;
    }

    /**
     * Define a propriedade {@see Answer::$correct}.
     *
     * @param bool $correct
     *
     * @return Answer
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;
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
