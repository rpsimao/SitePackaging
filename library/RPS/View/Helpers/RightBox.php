<?php
require_once ('Zend/View/Helper/Abstract.php');

class RPS_View_Helpers_RightBox extends Zend_View_Helper_Abstract
{

    public function RightBox ()
    {
        
        
        $html = '
         <div id="column_w300">
        
        	<div class="header_03">'.$this->view->translate->_('Cartonagens:').'</div>
            
            <div class="column_w300_section_01">
            	<div class="news_image_wrapper">
                	<img src="/images/templatemo_image_02.jpg" alt="image" />
                </div>
                
                <div class="news_content">
					<div class="header_04"><a href="/bib" rel="div.overlay:eq(0)">Bag-in-box</a></div>
                    <p>'.$this->view->translate->_('bib_texto_entrada').'</p>
				</div>
                                
                <div class="cleaner"></div>
            </div>
            
            <div class="column_w300_section_01 even_color">
            	<div class="news_image_wrapper">
                	<img src="/images/templatemo_image_03.jpg" alt="image" />
                </div>
                
                <div class="news_content">
                <div class="header_04"><a href="/pharma">'.$this->view->translate->_('farmaceutica').'</a></div>
                    <p>'.$this->view->translate->_('pharma_texto_entrada').'</p>
				</div>
                                
                <div class="cleaner"></div>
            </div>
            
            <div class="column_w300_section_01">
            	<div class="news_image_wrapper">
                	<img src="/images/templatemo_image_04.jpg" alt="image" />
                </div>
                
                <div class="news_content">
                	<div class="header_04"><a href="/promo">'.$this->view->translate->_('Promocionais').'</a></div>
                    <p>'.$this->view->translate->_('promo_texto_entrada').'</p>
				</div>
                                
                <div class="cleaner"></div>
            </div>

			<div class="column_w300_section_01 even_color">
            	<div class="news_image_wrapper">
                	<img src="/images/templatemo_image_06.jpg" alt="image" />
                </div>
                
                <div class="news_content">
                	<div class="header_04"><a href="/expo">'.$this->view->translate->_('Expositores').'</a></div>
                    <p>'.$this->view->translate->_('expo_texto_entrada').'</p>
				</div>
                                
                <div class="cleaner"></div>
            </div>
			<div class="column_w300_section_01">
            	<div class="news_image_wrapper">
                	<img src="/images/templatemo_image_05.jpg" alt="image" />
                </div>
                
                <div class="news_content">
                	<div class="header_04"><a href="/custom">'.$this->view->translate->_('Custom').'</a></div>
                    <p>'.$this->view->translate->_('custom_texto_entrada').'</p>
				</div>
                                
                <div class="cleaner"></div>
            </div>
           
            <div class="cleaner"></div>
            </div>
             ';
        
        return $html;
    }
}
?>