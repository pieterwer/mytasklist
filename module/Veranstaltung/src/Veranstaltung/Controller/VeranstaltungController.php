<?php
namespace Veranstaltung\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Veranstaltung\Model\VeranstaltungEntity;
use Veranstaltung\Form\EventForm;

/**
 * VeranstaltungController
 *
 * @author
 *
 * @version
 *
 */
class VeranstaltungController extends AbstractActionController
{

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
        $mapper = $this->getVeranstaltungMapper();
        return new ViewModel(array(
            'veranstaltungen' => $mapper->fetchAll()
        ));
    }
    
    public function showAction(){
        $verid = (int)$this->params('id');
        if (!$verid) {
            return $this->redirect()->toRoute('veranstaltung');
        }
        $events = $this->getEventMapper()->Eventver($verid);
        if (!$events) {
            return $this->redirect()->toRoute('event');
        }
    
//         $event = $this->getEventMapper()->getEvent($id);
//         $date = date_create($event->getDatum());
//         $event->setDatum (date_format($date,'Y-m-d H:i'));
    
        return new ViewModel(array(
            'events' => $events
        ));
    
    }
    
    public function getVeranstaltungMapper()
    {
        $sm = $this->getServiceLocator();
        return $sm->get('VeranstaltungMapper');
    }
    
    public function getEventMapper()
    {
        $sm = $this->getServiceLocator();
        return $sm->get('EventMapper');
    }
}