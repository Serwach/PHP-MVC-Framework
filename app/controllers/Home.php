<?php

class Home extends Controller
{
    public function __construct($controller, $action)
    {
	parent::__construct($controller, $action);
    }
	
    public function indexAction()
    {
        $db = DB::getInstance();
        $contacts = $db->findFirst('contacts', [
            'conditions' => "fname = 'test2'",
            'bind' => []
        ]);
        debug($contacts);        
	$this->view->render('home/index');
    }
}