<?php

class Title extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_title;

    /**
     *
     * @var string
     * @Column(type="string", length=250, nullable=false)
     */
    public $title;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tracer-study");
        $this->setSource("title");
        $this->hasMany('id_title', 'KuisionerAlumni', 'id_title', ['alias' => 'KuisionerAlumni']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'title';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Title[]|Title|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Title|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
