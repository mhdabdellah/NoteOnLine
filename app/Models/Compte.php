<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Compte
 * 
 * @property int $id
 * @property int $client_id
 * @property int|null $sold
 * 
 * @property Client $client
 * @property Collection|Contrat[] $contrats
 *
 * @package App\Models
 */
class Compte extends Model
{
	protected $table = 'comptes';
	public $timestamps = false;

	protected $casts = [
		'client_id' => 'int',
		'sold' => 'int'
	];

	protected $fillable = [
		'client_id',
		'sold'
	];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function contrats()
	{
		return $this->hasMany(Contrat::class);
	}
}
