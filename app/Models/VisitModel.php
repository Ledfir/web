<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitModel extends Model
{
    protected $table      = 'visits';
    protected $primaryKey = 'id';
    protected $allowedFields = ['visit_date', 'count'];
    protected $useTimestamps = true;
    protected $returnType = 'array';

    /**
     * Incrementa el contador de visitas del día actual.
     * Si no existe registro para hoy, lo crea con count=1.
     */
    public function incrementToday()
    {
        $today = date('Y-m-d');
        $record = $this->where('visit_date', $today)->first();

        if ($record) {
            // Actualizar incrementando count
            $this->update($record['id'], ['count' => $record['count'] + 1]);
        } else {
            // Crear nuevo registro con count=1
            $this->insert(['visit_date' => $today, 'count' => 1]);
        }
    }

    /**
     * Obtiene el total de visitas de hoy.
     */
    public function getTodayCount()
    {
        $today = date('Y-m-d');
        $record = $this->where('visit_date', $today)->first();
        return $record ? $record['count'] : 0;
    }

    /**
     * Obtiene el total de visitas de todos los días (opcional).
     */
    public function getTotalCount()
    {
        return $this->selectSum('count')->get()->getRow()->count ?? 0;
    }
}