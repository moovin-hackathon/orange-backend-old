<?php

namespace App\Entity;

/**
 * @todo Document class Subject.
 *
 * @author Thiago Hofmeister <thiago.souza@moovin.com.br>
 */
class User extends AbstractEntity
{
    /**
     * @ORM\Name
     * @ORM\Column(type="string" length="100")
     *
     * @var string $name
     */
    protected $name;

    /**
     * @ORM\LastName
     * @ORM\Column(type="string" length="100")
     *
     * @var string $lastName
     */
    protected $lastName;

    /**
     * @ORM\Email
     * @ORM\Column(type="string" length="100")
     *
     * @var string $email
     */
    protected $email;

    /**
     * @ORM\Schooling
     * @ORM\Column(type="string" length="30")
     *
     * @var string $schooling
     */
    protected $schooling;

    /**
     * @ORM\Photo
     * @ORM\Column(type="string" length="32")
     *
     * @var string $photo
     */
    protected $photo;

    /**
     * @ORM\Password
     * @ORM\Column(type="string" length="32")
     *
     * @var string $password
     */
    protected $password;

    /**
     * Retorna a propriedade {@see User::$name}.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Define a propriedade {@see User::$name}.
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Retorna a propriedade {@see User::$lastName}.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Define a propriedade {@see User::$lastName}.
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Retorna a propriedade {@see User::$email}.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Define a propriedade {@see User::$email}.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Retorna a propriedade {@see User::$schooling}.
     *
     * @return string
     */
    public function getSchooling(): string
    {
        return $this->schooling;
    }

    /**
     * Define a propriedade {@see User::$schooling}.
     *
     * @param string $schooling
     *
     * @return User
     */
    public function setSchooling($schooling)
    {
        $this->schooling = $schooling;
        return $this;
    }

    /**
     * Retorna a propriedade {@see User::$photo}.
     *
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * Define a propriedade {@see User::$photo}.
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
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
