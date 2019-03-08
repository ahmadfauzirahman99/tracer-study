<?php

class Perusahaan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_perusahaan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=150, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $alamat;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tracer-study");
        $this->setSource("perusahaan");
        $this->belongsTo('id_user', '\User', 'id_user', ['alias' => 'User']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'perusahaan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Perusahaan[]|Perusahaan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Perusahaan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
