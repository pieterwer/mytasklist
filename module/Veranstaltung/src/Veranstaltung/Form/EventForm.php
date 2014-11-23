<?php
namespace Veranstaltung\Form;

use Zend\Form\Form;
use Zend\Stdlib\Hydrator\ClassMethods;

class EventForm extends Form
{
    public function __construct($name = null, $options = array())
    {
        parent::__construct('event');

        $this->setAttribute('method', 'post');
        $this->setInputFilter(new EventFilter());
        $this->setHydrator(new ClassMethods());

        $this->add(array(
            'name' => 'id',
            'type' => 'hidden',
        ));
        
        $this->add(array(
            'name' => 'vorid',
            'type' => 'hidden',
            'options' => array(
                'label' => 'vorid',
            ),
            'attributes' => array(
                'id' => 'vorid',
                'maxlength' => 100,
            )
        ));
        
        $this->add(array(
            'name' => 'verid',
            'type' => 'hidden',
            'options' => array(
                'label' => 'verid',
            ),
            'attributes' => array(
                'id' => 'verid',
                'maxlength' => 100,
            )
        ));

        $this->add(array(
            'name' => 'preis',
            'type' => 'text',
            'options' => array(
                'label' => 'Preis:',
            ),
            'attributes' => array(
                'id' => 'preis',
                'maxlength' => 100,
            )
        ));
        
        $this->add(array(
            'name' => 'name',
            'type' => 'text',
            'options' => array(
                'label' => 'Name:',
            ),
            'attributes' => array(
                'id' => 'name',
                'maxlength' => 100,
            )
        ));

        $this->add(array(
            'name' => 'ort',
            'type' => 'text',
            'options' => array(
                'label' => 'Ort: ',
            ),
            'attributes' => array(
                'id' => 'ort',
                'maxlength' => 100,
            )
        ));
        
        $this->add(array(
            'name' => 'plz',
            'type' => 'text',
            'options' => array(
                'label' => 'PLZ: ',
            ),
            'attributes' => array(
                'id' => 'plz',
                'maxlength' => 5,
            )
        ));
        
        $this->add(array(
            'name' => 'strasse',
            'type' => 'text',
            'options' => array(
                'label' => 'Strasse: ',
            ),
            'attributes' => array(
                'id' => 'strasse',
                'maxlength' => 50,
            )
        ));
        
        $this->add(array(
            'name' => 'hausnummer',
            'type' => 'text',
            'options' => array(
                'label' => 'Nr.: ',
            ),
            'attributes' => array(
                'id' => 'hausnummer',
                'maxlength' => 5,
            )
        ));

        
        $this->add(array(
            'name' => 'beschreibung',
            'type' => 'textarea',
            'options' => array(
                'label' => 'Beschreibung: ',
            ),
            'attributes' => array(
                'id' => 'beschreibung',
                'maxlength' => 1000,
            )
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'geschlecht',
            'options' => array(
                'label' => 'Geschlecht: ',
                'value_options' => array(
                    'NULL' => 'Waehle das Geschlecht aus',
                    'W' => 'Weiblich',
                    'M' => 'Maennlich'
                ),
            ),
            'attributes' => array(
                'value' => '1' //set selected to '1'
            )
        ));
        
        $this->add(array(
            'type' => 'Zend\Form\Element\DateTime',
            'name' => 'datum',
            'options' => array(
                'label' => 'Datum: ',
                'format' => 'Y-m-d H:i'
            ),
            'attributes' => array(
                'min' => date('Y-m-d H:i'),
                'step' => '1', // minutes; default step interval is 1 min
            )
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'class' => 'btn btn-primary',
            ),
        ));
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'class' => 'btn btn-primary',
            ),
        ));
    }
}