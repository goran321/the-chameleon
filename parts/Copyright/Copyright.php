<?php

namespace TheChameleon{	
	use TheChameleon;
	/**
	 * 	Copyright  
	 *
	 * @author Goran Petrovic
	 * @since 1.0
	 *
	 **/

	class Copyright extends Part{
	
	
		public $view 	 = 'copyright';
		public $template = 'copyright';
		public $path 	 = '/parts/Copyright/';		
		public $config ;

		function __construct( ){

			$this->config = Config::getInstance();

		}


		/**
		 * 	Add options in customize setting
		 *
		 * @author Goran Petrovic
		 * @since 1.0
		 *
		 **/
		function customize(){
		
			$fields[] = array(
						'name'	  => 'copyright_wrap',
						'type'	  => 'select',
						'title'	  => __('Wrap', 'the-chameleon'), 
						'desc'	  => __('Choice wrap', 'the-chameleon'),
						'choices' => $this->config->wraps,
						'default' => 'normal',
					 );
								
			$fields[] = array(
						'name'	  => 'copyright_col',
						'type'	  => 'select',
						'title'	  => __('Columns', 'the-chameleon'), 
						'desc'	  => __('Choice number of columns for widgets in copyright section.', 'the-chameleon'),
						'choices' => $this->config->columns,
						'default' => 'col-1',
					 );
				
			$fields[] = array(
						'name'	  => 'copyright_animate',
						'type'	  => 'select',
						'title'	  => __('Animate', 'the-chameleon'),
						'desc' 	  => __('Choice animate effect for widgets.', 'the-chameleon'),
						'choices' => $this->config->animates,
						'default' => '',
					 );


			$fields[] = array(
						'name'	  => 'copyright_duration',
						'type'	  => 'select',
						'title'	  => __('Duration', 'the-chameleon'),
						'desc' 	  => __('Choice duration for animate effect.', 'the-chameleon'),
						'choices' => $this->config->animate_durations,
						'default' => '',
					 );

			$fields[] = array(
						'name'	  => 'copyright_delay',
						'type'	  => 'select',
						'title'	  => __('Delay', 'the-chameleon'),
						'desc' 	  => __('Choice delay for animate effect.', 'the-chameleon'),
						'choices' => $this->config->animate_delays,
						'default' => '',
					 );	
		
			return $this->customize = 
					array(
						$this->config->slug =>
									array(
										'title'	   => __('Theme Options', 'the-chameleon'),					
										'sections' => array(
														array(
															'title'	 	=> __('Copyright', 'the-chameleon'),
															'desc'	 	=> __('Use this options to set up copyright section.', 'the-chameleon'),  
															'priority'	=> 14,
															'fileds' 	=> $fields,
															),
														   )

										), //panel

						);


			
			
			
			
		
		}
		

		
		
		

		
	}	
	
	
}
?>