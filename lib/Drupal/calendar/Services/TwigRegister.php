<?php

/**
 * @file
 * Definition of Drupal\calendar\Service\TwigRegister
 *
 */

namespace Drupal\calendar\Service;

use CalendR\Extension\Twig\CalendRExtension;
use CalendR\Calendar;

/**
 * Twig register extension
 */
class TwigRegister {

  /**
   * register extension
   * @param  \Twig_Enviroment $twig twig service
   */
	public function __construc(\Twig_Enviroment $twig, Calendar $factory){
		$twig->addExtension(new CalendarRExtension($factory));
	}

}
