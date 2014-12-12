<?php

/**
 * This file is part of the Nextras\ORM library.
 *
 * @license    MIT
 * @link       https://github.com/nextras/orm
 * @author     Jan Skrasek
 */

namespace Nextras\Orm\Entity;


interface IPropertyHasRawValue
{

	/**
	 * Returns raw value.
	 * @return mixed
	 */
	public function getRawValue();

}
