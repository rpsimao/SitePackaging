<?php
require_once ('Zend/View/Helper/Abstract.php');

class RPS_View_Helpers_PT extends Zend_View_Helper_Abstract
{

    public function PT ()
    {
        $html = '<ul><li><a href="';
        $html.= $this->view->url(array('controller' => 'locale', 'action'=>'index', 'locale' => 'pt_PT', 'default', TRUE));
        $html.= '" class="current">&nbsp;&nbsp;Português</a></li><li><a href="';
		$html.= $this->view->url(array('controller' => 'locale', 'action'=>'index', 'locale' => 'es_ES', 'default', TRUE));
		$html.= '">Español</a></li><li><a href="http://contactos.fterceiro.pt" class="last">';
		$html.= $this->view->translate->_('Contactos');
		$html.= '</a></li></ul>';
		
		return $html;
    }
}
?>