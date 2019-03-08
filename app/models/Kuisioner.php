<?php

class Kuisioner extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_kuisioner;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_title;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $pertanyaan;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $format_pertanyaan;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $jawaban;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tujuan;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tracer-study");
        $this->setSource("kuisioner");
        $this->hasMany('id_kuisioner', 'HasilKuisioner', 'id_kuisioner', ['alias' => 'HasilKuisioner']);
        $this->belongsTo('id_title', '\Title', 'id_title', ['alias' => 'Title']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'kuisioner';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kuisioner[]|Kuisioner|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Kuisioner|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
