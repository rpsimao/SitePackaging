<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /**
     * Initializes the logging on the application
     *
     * We're using 2 ways for logging exceptions:
     * 1. PHP Error log file.
     * 2. Firebug for Development environments only.
     *
     * @return Zend_Log
     */
    protected function _initLogger ()
    {

        // Create the Zend_Log object
        $logger = new Zend_Log();
        // Create the resource for the error log file
        // if you dont want to use the error suppressor "@"
        // you can always use: is_writable
        // http://php.net/manual/function.is-writable.php
        $stream = fopen(ini_get('error_log'), 'a');
        if ($stream) {
            $stdWritter = new Zend_Log_Writer_Stream($stream);
            $stdWritter->addFilter(Zend_Log::DEBUG);
            $stdWritter->addFilter(Zend_Log::INFO);
            $logger->addWriter($stdWritter);
        }
        // Create the Firebug writter - Development only
        if ($this->_application->getEnvironment() != 'production') {
            // Init firebug logging
            $fbWriter = new Zend_Log_Writer_Firebug();
            $logger->addWriter($fbWriter);
        }
        return $logger;
    }
    
  protected function _initTranslate()
  {     

  $locale = null;    
      
  $session = new Zend_Session_Namespace('rps.l10n');
    if ($session->locale) {
      $locale = new Zend_Locale($session->locale);                 
    } 
    
    if ($locale === null) {
     //try {
   //     $locale = new Zend_Locale('browser'); 
    //  } catch (Zend_Locale_Exception $e) {
        $locale = new Zend_Locale('pt_PT');             
     // } 
    }

    
      
    $registry = Zend_Registry::getInstance();
    $registry->set('Zend_Locale', $locale); 
  
      
    $translate = new Zend_Translate('gettext', APPLICATION_PATH . '/languages/pt_PT/default.mo', 'pt_PT');
    $translate->getAdapter()->addTranslation(APPLICATION_PATH . '/languages/es_ES/default.mo', 'es_ES');
    $translate->getAdapter()->setLocale($locale);
    $registry = Zend_Registry::getInstance();
    $registry->set('Zend_Translate', $translate); 
  }

    protected function _initViewHelpers ()
    {

        $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        $view->translate = Zend_Registry::get('Zend_Translate');
        $view->addHelperPath("RPS/View/Helpers", "RPS_View_Helpers");
        $view->doctype("XHTML1_STRICT");
        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html; charset=UTF-8');
        $view->headMeta()->appendHttpEquiv('Content-Language', 'pt-PT');
        $view->headMeta()->appendHttpEquiv('X-UA-Compatible', 'chrome=1');
        $view->headMeta()->appendName('keywords', 'embalagens, packaging, artes gráficas, cartonagens, bag in box, bib, farmaceutica');
        $view->headScript()->appendFile('/js/jquery-1.4.2.min.js');
        $view->headScript()->appendFile('/js/jquery-ui-1.8.custom.min.js');
        //$view->headScript()->appendFile('/js/jquery.tools.min.js');
        $view->headLink()->appendStylesheet('/css/templatemo_style.css');
        $view->headLink()->appendStylesheet('/css/sprite.css');
        $view->headLink(array(
            'rel' => 'favicon' , 
            'href' => '/images/favicon.ico'), 'PREPEND');
        $view->headLink(array(
            'rel' => 'shortcut icon' , 
            'href' => '/images/favicon.ico'), 'PREPEND');
        $view->headMeta()->appendName('Author', 'Ricardo Simao');
        $view->headMeta()->appendName('Email', 'ricardo.simao@fterceiro.pt');
        $view->headMeta()->appendName('Copyright', 'Fernandes e Terceiro, S.A.');
        $view->headMeta()->appendName('Zend Framework', Zend_Version::VERSION);
        $view->headMeta()->appendName('Zend Studio', '8.0');
        $view->headMeta()->appendName('PHP',  phpversion());
        $view->headMeta()->appendName('Version', '@@BuildNumber@@');
        $view->headMeta()->appendName('BuildDate', '@@BuildDate@@');
    }

    protected function _initAutoload ()
    {

        $moduleLoader = new Zend_Application_Module_Autoloader(array(
            'namespace' => '' , 
            'basePath' => APPLICATION_PATH));
        return $moduleLoader;
    }

    /*protected function _initRoutes ()
    {

        $frontController = Zend_Controller_Front::getInstance();
        $router = $frontController->getRouter();
        $router->removeDefaultRoutes();
        $router->addRoute('langmodcontrolleraction', new Zend_Controller_Router_Route('/:lang/:module/:controller/:action', array(
            'lang' => ':lang')));
        $router->addRoute('langcontrolleraction', new Zend_Controller_Router_Route('/:lang/:controller/:action', array(
            'lang' => ':lang')));
        $router->addRoute('langindex', new Zend_Controller_Router_Route('/:lang', array(
            'lang' => 'pt' , 
            'module' => 'default' , 
            'controller' => 'index' , 
            'action' => 'index')));
        $router->addRoute('langcontroller', new Zend_Controller_Router_Route('/:lang/:controller', array(
            'lang' => 'pt' , 
            'module' => 'default' , 
            'controller' => 'index' , 
            'action' => 'index')));
    }*/
    
    
   




  
                
  
}