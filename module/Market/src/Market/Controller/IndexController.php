<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Market\Controller;

/**
 * Description of IndexController
 *
 * @author Gabriel Cabral
 */
use \Zend\Mvc\Controller\AbstractActionController;
use \Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {
    
    use \Market\Controller\ListingsTableTrait;
    
    public function indexAction() 
    {
        $messages = array();
        if($this->flashMessenger()->hasMessages()){
            $messages = $this->flashMessenger()->getMessages();
        }
        
        $itemRecent = $this->listingsTable->getLatestListing();
        
        return new ViewModel(array('messages' => $messages, 'item' => $itemRecent));
    }
    
    public function fooAction() 
    {
        return new ViewModel();
    }
}
