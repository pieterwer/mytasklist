<?php
namespace Veranstaltung\Model;

class EventEntity
{

    protected $id;

    protected $name;

    protected $ort;

    protected $vorid;
    
    protected $jahrgang;
    
    protected $geschlecht;
    
    protected $meisterschaft;
    
    protected $preis;
    
    protected $tlimit;
    
    protected $verid;
    
    protected $altmin;
    
    protected $altmax;
    
    protected $lizenz;
    
    protected $hausnummer;
    
    protected $plz;
    
    protected $strasse;
    
    protected $beschreibung;
    
    protected $datum;
    
    
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

	/**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @return the $ort
     */
    public function getOrt()
    {
        return $this->ort;
    }


	/**
     * @return the $jahrgang
     */
    public function getJahrgang()
    {
        return $this->jahrgang;
    }

	/**
     * @return the $geschlecht
     */
    public function getGeschlecht()
    {
        return $this->geschlecht;
    }

	/**
     * @return the $meisterschaft
     */
    public function getMeisterschaft()
    {
        return $this->meisterschaft;
    }

	/**
     * @return the $preis
     */
    public function getPreis()
    {
        return $this->preis;
    }

	/**
     * @return the $tlimit
     */
    public function getTlimit()
    {
        return $this->tlimit;
    }

	/**
     * @param field_type $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

	/**
     * @param field_type $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @param field_type $ort
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }


	/**
     * @param field_type $jahrgang
     */
    public function setJahrgang($jahrgang)
    {
        $this->jahrgang = $jahrgang;
    }

	/**
     * @return the $vorid
     */
    public function getVorid()
    {
        return $this->vorid;
    }

	/**
     * @return the $verid
     */
    public function getVerid()
    {
        return $this->verid;
    }

	/**
     * @return the $altmin
     */
    public function getAltmin()
    {
        return $this->altmin;
    }

	/**
     * @return the $altmax
     */
    public function getAltmax()
    {
        return $this->altmax;
    }

	/**
     * @return the $lizenz
     */
    public function getLizenz()
    {
        return $this->lizenz;
    }

	/**
     * @return the $hausnummer
     */
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

	/**
     * @return the $plz
     */
    public function getPlz()
    {
        return $this->plz;
    }

	/**
     * @return the $strasse
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

	/**
     * @return the $beschreibung
     */
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

	/**
     * @return the $datum
     */
    public function getDatum()
    {
        return $this->datum;
    }

	/**
     * @param field_type $vorid
     */
    public function setVorid($vorid)
    {
        $this->vorid = $vorid;
    }

	/**
     * @param field_type $verid
     */
    public function setVerid($verid)
    {
        $this->verid = $verid;
    }

	/**
     * @param field_type $altmin
     */
    public function setAltmin($altmin)
    {
        $this->altmin = $altmin;
    }

	/**
     * @param field_type $altmax
     */
    public function setAltmax($altmax)
    {
        $this->altmax = $altmax;
    }

	/**
     * @param field_type $lizenz
     */
    public function setLizenz($lizenz)
    {
        $this->lizenz = $lizenz;
    }

	/**
     * @param field_type $hausnummer
     */
    public function setHausnummer($hausnummer)
    {
        $this->hausnummer = $hausnummer;
    }

	/**
     * @param field_type $plz
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
    }

	/**
     * @param field_type $strasse
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
    }

	/**
     * @param field_type $beschreibung
     */
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }

	/**
     * @param field_type $datum
     */
    public function setDatum($datum)
    {
//         $date = date_create($datum);
        $this->datum = $datum;
    }

	/**
     * @param field_type $geschlecht
     */
    public function setGeschlecht($geschlecht)
    {
        $this->geschlecht = $geschlecht;
    }

	/**
     * @param field_type $meisterschaft
     */
    public function setMeisterschaft($meisterschaft)
    {
        $this->meisterschaft = $meisterschaft;
    }

	/**
     * @param field_type $preis
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;
    }

	/**
     * @param field_type $tlimit
     */
    public function setTlimit($tlimit)
    {
        $this->tlimit = $tlimit;
    }

	public function __construct()
    {
    }


}