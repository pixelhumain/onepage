<?php
/**
 * CoController.php
 *
 * Cocontroller always works with the PH base 
 *
 * @author: Alpha Tango <tango@communecter.org>
 * Date: 14/03/2014
 */
class CoController extends CommunecterController {


    protected function beforeAction($action) {
        //parent::initPage();
		return parent::beforeAction($action);
  	}

  	public function actions()
	{
	    return array(
	        'index'  => 'onepage.controllers.actions.IndexAction',
	        'custom'  => 'onepage.controllers.actions.CustomAction',
	    );
	}

}
