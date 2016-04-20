<?php
require_once ('Zend/View/Helper/Abstract.php');

class RPS_View_Helpers_Footer extends Zend_View_Helper_Abstract
{

    public function Footer ()
    {
        
        
        $html = '
         <div id="templatemo_footer_wrapper">

	<div id="templatemo_footer">
    	
        <p><a href="http://validator.w3.org/check?uri=referer">
           <img src="http://static.fterceiro.pt/assets/public/images/valid-xhtml10-blue.png"
		        alt="Valid XHTML 1.0 Transitional" height="31" width="88"
			    style="border: none; text-decoration: none;" /></a> 
			<a href="http://framework.zend.com/">
			<img src="http://static.fterceiro.pt/assets/public/images/PoweredBy_ZF_4DarkBG.png" style="border:bone;" alt="ZF Logo" /></a>
	   </p>
        
        <div class="margin_bottom_20"></div>
       <p> Copyright &copy; '.date('Y').' <a href="http://www.fterceiro.pt">Fernandes &amp; Terceiro, S.A.</a> | Designed by <a href="http://www.templatemo.com">Free CSS Templates</a></p>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
    <!--  Free CSS Templates by TemplateMo.com  -->
</div> <!-- end of footer -->
';
        
        return $html;
    }
}
?>