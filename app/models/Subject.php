<?php

class Subject extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=5, nullable=false)
     */
    public $subjectID;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    public $subjectCode;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subjectName;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subProfres;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subtime;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subDate;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subDes;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subjectNameThai;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subSchoolOf;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $subUnit;

    /**
     *
     * @var string
     * @Column(type="string", length=2, nullable=false)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subDegree;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $subGroup;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $subRoom;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $subFinalExam;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("findsubject");
        $this->setSource("subject");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'subject';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Subject[]|Subject|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Subject|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
