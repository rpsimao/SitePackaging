<?php
/**
 * Description of LangSelector
 *
 * @author jon
 */
class RPS_Controller_Plugin_LangSelector
    extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
	/*$lang = $request->getParam('lang','');
	
	if ($lang !== 'pt' && $lang !== 'es')
	    $request->setParam('lang','pt');
	
	$lang = $request->getParam('lang');
	if ($lang == 'pt')
	    $locale = 'pt_PT';
	else
	    $locale = 'es_ES';

	$zl = new Zend_Locale();
	$zl->setLocale($locale);
	Zend_Registry::set('Zend_Locale', $zl);
	
	$translate = new Zend_Translate('csv', APPLICATION_PATH . '/languages/'. $lang . '.csv' , $lang);
	Zend_Registry::set('Zend_Translate', $translate);*/
        
    }

}