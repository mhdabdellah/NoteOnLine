<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Credit
 * 
 * @property int $id
 * @property int $contrat_id
 * @property int $date_credit
 * 
 * @property Contrat $contrat
 *
 * @package App\Models
 */
class Credit extends Model
{
	protected $table = 'credits';
	public $timestamps = false;

	protected $casts = [
		'contrat_id' => 'int',
		'date_credit' => 'int'
	];

	protected $fillable = [
		'contrat_id',
		'date_credit'
	];

	public function contrat()
	{
		return $this->belongsTo(Contrat::class);
	}
}
