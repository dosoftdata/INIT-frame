<?php
namespace SITE\Pages;
class Pages{
	
	public  $pagesLocation,
	        $pagesTpl,
	        $pagesContent = array(); 
	private $loader, $twig, $template;
	
	public function __construct(){
		$this->pagesLocation;
		$this->pagesTpl;
		$this->pagesContent;
	}
	public function Lpages(array $pContent = null,$TLoader,$oTEnv, 
			                    $pLocation = 'pages', 
			                    $pTpl ='default.tmpl') {
		try {			
		$this->loader = new $TLoader($this->setPageLocation($pLocation));
		$this->twig = new $oTEnv($this->loader);
		// load template
		$this->template = $this->twig->loadTemplate($this->setPageTpl($pTpl));
		return $this->template->render($this->setPageContent($pContent));
		} catch ( \Zend\Console\Exception\RuntimeException $e) {
			die ('ERROR: ' . $e->getMessage());
		}
	}
	
	public function setPageLocation($pLoc){
	   $this->pagesLocation = $pLoc;
	}
	public function getPageLocation(){
	  return $this->pagesLocation;
	}
	public function setPageTpl($pTpl){
		$this->pagesTpl = $pTpl;
	}
	public function getPageTpl(){
		return $this->pagesTpl;
	}
	public function setPageContent(array $pageContent){
		if( isset($pageContent) && is_array($pageContent)):
		return $this->pagesContent = $pageContent;
		else :
		return false;
		endif;
		return true;
	}
	public function getPageContent(){
		return $this->pagesContent;
	}
	
}