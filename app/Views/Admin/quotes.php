<?php $this->extend('Admin/includes/page'); ?>

<?php $this->section('title'); ?>
    Cotizaciones
<?php $this->endSection(); ?>

<?php $this->section('description'); ?>
    Gestiona y da seguimiento a tus cotizaciones.
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<div class="panel">
    <div class="d-flex justify-content-between align-items-start mb-1">
        <div>
            <h2>Cotizaciones</h2>
            <div class="desc">Gestiona y da seguimiento a tus cotizaciones.</div>
        </div>
        <button class="btn-outline-soft">Exportar</button>
    </div>
    <table class="table">
        <thead>
            <tr><th>Folio</th><th>Cliente</th><th>Monto</th><th>Estado</th><th>Fecha</th><th></th></tr>
        </thead>
        <tbody>
            <tr>
                <td>#COT-1042</td><td>Norvia S.A.</td><td>$12,400</td>
                <td><span class="badge-status pendiente">Pendiente</span></td>
                <td>23 jul 2026</td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
            <tr>
                <td>#COT-1041</td><td>Grupo Alara</td><td>$8,950</td>
                <td><span class="badge-status aprobada">Aprobada</span></td>
                <td>22 jul 2026</td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
            <tr>
                <td>#COT-1040</td><td>Bluepine Corp.</td><td>$21,200</td>
                <td><span class="badge-status aprobada">Aprobada</span></td>
                <td>21 jul 2026</td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
            <tr>
                <td>#COT-1039</td><td>Rutas MX</td><td>$5,300</td>
                <td><span class="badge-status rechazada">Rechazada</span></td>
                <td>20 jul 2026</td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
            <tr>
                <td>#COT-1038</td><td>Cedro Textil</td><td>$16,780</td>
                <td><span class="badge-status pendiente">Pendiente</span></td>
                <td>19 jul 2026</td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>