<?php

class Home extends Controller
{
    public function __construct($controller, $action)
    {
	parent::__construct($controller, $action);
    }
	
    public function indexAction()
    {
//	$user = Users::currentUser();
//	$user->fname = 'Test';
//	$user->save();
	$this->view->render('home/index');
    }
}