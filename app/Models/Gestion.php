<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'gestions';

    protected $fillable = [
        'idUsuario',
        'DescripcionCliente',
        'EstadoFisico',
        'Conclusiones',
        'Modelo',
        'Imagenes',
        'fecha_mantenimiento', // Agrega el nuevo campo aquí
    ];

    protected $casts = [
        'Imagenes' => 'array',
        'fecha_mantenimiento' => 'date', // Asegúrate de que Laravel lo trate como una fecha
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'idUsuario');
    }
}
