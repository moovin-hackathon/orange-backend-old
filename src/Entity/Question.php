<?php

namespace App\Entity;

/**
 * @todo Document class Subject.
 *
 * @author Thiago Hofmeister <thiago.souza@moovin.com.br>
 */
class Question extends AbstractEntity
{
    /**
     * @ORM\Description
     * @ORM\Column(type="text")
     *
     * @var string $description
     */
    protected $description;

    /**
     * @ORM\ManyToOne(targetEntity="Subject")
     * @ORM\JoinColumn(name="subjectId", referencedColumnName="id")
     *
     * @var Subject $subject
     */
    protected $subject;

    /**
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="answers")
     *
     * @var Answer[] $answers
     */
    protected $answers;

    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="questions")
     * @ORM\JoinTable(name="histories",
     *      joinColumns={@ORM\JoinColumn(name="questionId", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="userId", referencedColumnName="id")}
     *      )
     *
     * @var User $users
     */
    protected $users;

    /**
     * Retorna a propriedade {@see Question::$description}.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Define a propriedade {@see Question::$description}.
     *
     * @param string $description
     *
     * @return Question
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Question::$subject}.
     *
     * @return Subject
     */
    public function getSubject(): Subject
    {
        return $this->subject;
    }

    /**
     * Define a propriedade {@see Question::$subject}.
     *
     * @param Subject $subject
     *
     * @return static|Question
     */
    public function setSubject(Subject $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Question::$answers}.
     *
     * @return Answer[]
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Define a propriedade {@see Question::$answers}.
     *
     * @param Answer[] $answers
     *
     * @return static|Question
     */
    public function setAnswers($answers)
    {
        $this->answers = $answers;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Question::$users}.
     *
     * @return User
     */
    public function getUsers(): User
    {
        return $this->users;
    }

    /**
     * Define a propriedade {@see Question::$users}.
     *
     * @param User $users
     *
     * @return static|Question
     */
    public function setUsers(User $users)
    {
        $this->users = $users;
        $this->users->addQuestion($this);
        return $this;
    }

    /**
     * Adiciona uma pergunta na propriedade $questions.
     *
     * @param User $user
     *
     * @return $this
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
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
