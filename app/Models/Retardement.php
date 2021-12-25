<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Retardement
 * 
 * @property int $id
 * @property int $contrat_id
 * @property int $date_retardement
 * 
 * @property Contrat $contrat
 *
 * @package App\Models
 */
class Retardement extends Model
{
	protected $table = 'retardements';
	public $timestamps = false;

	protected $casts = [
		'contrat_id' => 'int',
		'date_retardement' => 'int'
	];

	protected $fillable = [
		'contrat_id',
		'date_retardement'
	];

	public function contrat()
	{
		return $this->belongsTo(Contrat::class);
	}
}
