<?php

class Tabbable {
	
	// Array de Tab-pane
	private $tab_pane;
	private $tab_header;
	private $data;
	
	function __construct(array $header) {
		$this->tab_pane = array();
		$this->tab_header = $header;
		//$this->data = $data;
	}
	
	function add_Tab_pane($tab_pane){
		
		array_push($this->tab_pane, $tab_pane);
		
	}
	
	function generate() {
		echo '<div class="tabbable">
            <ul class="nav nav-tabs">
			<li class="active"><a href="#tab1" data-toggle="tab">'.$this->tab_header[0].'</a></li>';
		for ($i = 1; $i <= count($this->tab_header)-1; $i++) {
				
			$y = $i+1;
		
			echo '<li><a href="#tab'.$y.'" data-toggle="tab">'.$this->tab_header[$i].'</a></li>';
				
		}
		
		echo '</ul>';
		echo '
                <div class="tab-content">
                  <div class="tab-pane active" id="tab1">';
			
		//		 $Data;
		
		echo '</div>';
		
		
		for ($i = 1; $i <= count($this->tab_header)-1; $i++) {
				
			$y = $i+1;
				
			echo '<div class="tab-pane" id="tab'.$y.'">';
		
			 $this->tab_pane[$i];
				
			echo '</div>';
			
			echo '</div>';
		}
		
		
	}
	
}// fin de Classe