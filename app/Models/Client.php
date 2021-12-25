<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $nom
 * @property string $tel
 * 
 * @property Collection|Compte[] $comptes
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'clients';
	public $timestamps = false;

	protected $fillable = [
		'nom',
		'tel',
		'prenom',
		'adresse'
	];

	public function comptes()
	{
		return $this->hasMany(Compte::class);
	}
}
