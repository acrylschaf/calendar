<?php
/**
 * Copyright (c) 2014 Georg Ehrke <oc.list@georgehrke.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */
namespace OCA\Calendar\Utility;

class ObjectUtility extends Utility{

	/**
	 * @brief generate a random uri
	 * @return string random uri
	 */
	public static function randomURI() {
		$random = rand().time().rand();
		$md5 = md5($random);
		$substr = substr($md5, rand(0,11),20);

		return $substr;
	}

}