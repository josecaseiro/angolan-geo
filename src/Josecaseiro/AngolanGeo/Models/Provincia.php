<?php

// app/Models/Provincia.php

namespace Josecaseiro\AngolanGeo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    protected $fillable = ['name'];

    /**
     * Get all of the municipios for the Province
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipios(): HasMany
    {
        return $this->hasMany(Municipio::class);
    }
}
