<?php
namespace Veranstaltung\Model;

class VeranstaltungEntity
{

    protected $id;

    protected $name;

    protected $vorgaenger_id;
    
    protected $veranstalter_id;
    
    

	public function __construct()
    {
    }
	/**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	/**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @return the $vorgaenger_id
     */
    public function getVorgaenger_id()
    {
        return $this->vorgaenger_id;
    }

	/**
     * @param field_type $vorgaenger_id
     */
    public function setVorgaenger_id($vorgaenger_id)
    {
        $this->vorgaenger_id = $vorgaenger_id;
    }

	/**
     * @return the $veranstalter_id
     */
    public function getVeranstalter_id()
    {
        return $this->veranstalter_id;
    }

	/**
     * @param field_type $veranstalter_id
     */
    public function setVeranstalter_id($veranstalter_id)
    {
        $this->veranstalter_id = $veranstalter_id;
    }



}