<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=150, nullable=true)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $hak_akses;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tracer-study");
        $this->setSource("user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
