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
     * @var \DateTime $currentDate
     */
    protected $currentDate;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="questions")
     *
     * @var Question[] $questions
     */
    protected $questions;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="users")
     *
     * @var User[] $users
     */
    protected $users;

    /**
     * Retorna a propriedade {@see History::$currentDate}.
     *
     * @return \DateTime
     */
    public function getCurrentDate(): \DateTime
    {
        return $this->currentDate;
    }

    /**
     * Define a propriedade {@see History::$currentDate}.
     *
     * @param \DateTime $currentDate
     *
     * @return History
     */
    public function setCurrentDate(\DateTime $currentDate)
    {
        $this->currentDate = $currentDate;
        return $this;
    }

    /**
     * Retorna a propriedade {@see History::$questions}.
     *
     * @return Question[]
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Define a propriedade {@see History::$questions}.
     *
     * @param Question[] $questions
     *
     * @return static|History
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
        return $this;
    }

    /**
     * Retorna a propriedade {@see History::$users}.
     *
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Define a propriedade {@see History::$users}.
     *
     * @param User[] $users
     *
     * @return static|History
     */
    public function setUsers( $users)
    {
        $this->users = $users;
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
