<?php namespace Rorichster\WhatsNew\Models;

use Eloquent;

class WhatsNew extends Eloquent
{
	/**
	 * Table in use by model
	 * @var string
	 */
	protected $table = 'whats_new';

	protected $guarded = ['id'];
}