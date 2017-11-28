<?php
//this is the shap of dispatching class custom price events but in this case its not use 
namespace Inchoo\Helloworld\Controller\Dispatch;
use Magento\Framework\Event\ObserverInterface;
class CustomPrice{
  /**
  * @var EventManager
  */
  private $eventManager;

  public function __construct(\Magento\Framework\Event\Manager $eventManager){
    $this->eventManager = $eventManager;
  }

  public function something(){
    $eventData = null;
    // Code...
  //  $this->eventManager->dispatch('helloworld_event_before');
    // More code that sets $eventData...
    $this->eventManager->dispatch('helloworld_event_after',['myEventData'=>$eventData]);
  }
}
