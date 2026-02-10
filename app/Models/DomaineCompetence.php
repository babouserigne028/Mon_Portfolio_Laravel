<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DomaineCompetence extends Model
{
    public $incrementing = false;
    protected $keyType   = 'string';

    protected $fillable = [
        'id', 'nom', 'description', 'icone', 'couleur',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }

    public function technologies()
{
    return $this->belongsToMany(Technologie::class, 'technologie_domaine_competence', 'domaine_competence_id', 'technologie_id');
}
}
