<?php

class HasilKuisionerAlumni extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=30, nullable=false)
     */
    public $id_hasil_kuisioner_alumni;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $pertanyaan_jawaban;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $format_jawaban;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $tanggal_menjawab;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tracer-study");
        $this->setSource("hasil_kuisioner_alumni");
        $this->belongsTo('id_user', '\User', 'id_user', ['alias' => 'User']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'hasil_kuisioner_alumni';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return HasilKuisionerAlumni[]|HasilKuisionerAlumni|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return HasilKuisionerAlumni|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
