<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrat
 * 
 * @property int $id
 * @property int $compte_id
 * @property Carbon $date_echeance
 * @property int $montant_mensuel
 * @property int $nbr_versments
 * @property int $sold_initial
 * 
 * @property Compte $compte
 * @property Collection|Credit[] $credits
 * @property Collection|Retardement[] $retardements
 *
 * @package App\Models
 */
class Contrat extends Model
{
	protected $table = 'contrats';
	public $timestamps = false;

	protected $casts = [
		'compte_id' => 'int',
		'montant_mensuel' => 'int',
		'nbr_versments' => 'int',
		'sold_initial' => 'int'
	];

	protected $dates = [
		'date_echeance'
	];

	protected $fillable = [
		'compte_id',
		'date_echeance',
		'montant_mensuel',
		'nbr_versments',
		'sold_initial'
	];

	public function compte()
	{
		return $this->belongsTo(Compte::class);
	}

	public function credits()
	{
		return $this->hasMany(Credit::class);
	}

	public function retardements()
	{
		return $this->hasMany(Retardement::class);
	}
}
