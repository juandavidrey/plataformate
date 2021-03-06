<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['representante1','representante2','rol_rep_1',
      'rol_rep_2','correo_rep_1','correo_rep_2','telefono_rep_1',
      'telefono_rep_2', 'acta','decreto', 'resolucion'];
    //retorno el nombre del grupo
    public function getRouteKeyName()
    {
    	return 'name';
    }

    //retorna los post asosciados al municipio
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    //retorna los post asosciados a la organizacion
    public function organizaciones()
    {
        return $this->hasMany(Organizaciones::class);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
