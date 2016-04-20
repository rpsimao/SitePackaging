<?php
require_once ('Zend/View/Helper/Abstract.php');

class RPS_View_Helpers_ES extends Zend_View_Helper_Abstract
{

    public function ES ()
    {
        $html = '<ul><li><a href="';
        $html.= $this->view->url(array('controller' => 'locale', 'action'=>'index', 'locale' => 'pt_PT', 'default', TRUE));
        $html.= '">&nbsp;&nbsp;Português</a></li><li><a href="';
		$html.= $this->view->url(array('controller' => 'locale', 'action'=>'index', 'locale' => 'es_ES', 'default', TRUE));
		$html.= '" class="current">Español</a></li><li><a href="http://contactos.fterceiro.pt" class="last">';
		$html.= $this->view->translate->_('Contactos');
		$html.= '</a></li></ul>';
		
		return $html;
    }
}
?>   	