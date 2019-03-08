<?php

class RelasiAlumniPerusahaan extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_relasi;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_perusahaan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_alumni;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tracer-study");
        $this->setSource("relasi_alumni_perusahaan");
        $this->belongsTo('id_perusahaan', '\Perusahaan', 'id_perusahaan', ['alias' => 'Perusahaan']);
        $this->belongsTo('id_alumni', '\Alumni', 'id_alumni', ['alias' => 'Alumni']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'relasi_alumni_perusahaan';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RelasiAlumniPerusahaan[]|RelasiAlumniPerusahaan|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RelasiAlumniPerusahaan|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
