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
     * @ORM\Year
     * @ORM\Column(type="string" length="10")
     *
     * @var string $year
     */
    protected $year;

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
     * @var User[] $users
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
     * Retorna a propriedade {@see Question::$year}.
     *
     * @return string
     */
    public function getYear(): string
    {
        return $this->year;
    }

    /**
     * Define a propriedade {@see Question::$year}.
     *
     * @param string $year
     *
     * @return Question
     */
    public function setYear(string $year)
    {
        $this->year = $year;
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
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Define a propriedade {@see Question::$users}.
     *
     * @param User[] $users
     *
     * @return static|Question
     */
    public function setUsers($users)
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
     * @inheritDoc
     */
    public function toArray(): array
    {
        $answers = [];
        foreach ($this->getAnswers() as $answer) {

            $answers[] = $answer->toArray();
        }

        $users = [];
        foreach ($this->getUsers() as $user) {

            $users[] = $user->toArray();
        }

        return [
            'description' => $this->getDescription(),
            'subject' => $this->getSubject(),
            'answers' => $answers,
            'users' => $users
        ];
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $array)
    {
        $answers = [];
        foreach ($array['answers'] as $answer) {

            $answers[] = Answer::fromArray($answer);
        }

        $users = [];
        foreach ($array['users'] as $user) {

            $users[] = User::fromArray($user);
        }

        return (new static)
            ->setDescription($array['description'])
            ->setSubject($array['subject'])
            ->setAnswers($answers)
            ->setUsers($users);
    }
}
