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
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="questions")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     *
     * @var Question $question
     */
    protected $question;

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
     * Retorna a propriedade {@see Answer::$question}.
     *
     * @return Question
     */
    public function getQuestion(): Question
    {
        return $this->question;
    }

    /**
     * Define a propriedade {@see Answer::$question}.
     *
     * @param Question $question
     *
     * @return static|Answer
     */
    public function setQuestion(Question $question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            'description' => $this->getDescription(),
            'correct' => $this->isCorrect(),
            'question' => $this->getQuestion()
        ];
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $array)
    {
        return (new static)
            ->setDescription($array['description'])
            ->setCorrect($array['correct'])
            ->setQuestion($array['question']);
    }
}
