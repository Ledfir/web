<?php $this->extend('Admin/includes/page'); ?>

<?php $this->section('title'); ?>
    Home
<?php $this->endSection(); ?>

<?php $this->section('description'); ?>
    Resumen general de tu actividad
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-lg-3">
        <div class="stat-card">
            <div class="accent-strip"></div>
            <div class="lbl">Cotizaciones activas</div>
            <div class="val">128</div>
            <div class="delta up">▲ 12% este mes</div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="stat-card">
            <div class="accent-strip"></div>
            <div class="lbl">Monto cotizado</div>
            <div class="val">$482K</div>
            <div class="delta up">▲ 8% este mes</div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="stat-card">
            <div class="accent-strip"></div>
            <div class="lbl">Usuarios activos</div>
            <div class="val">36</div>
            <div class="delta down">▼ 2% este mes</div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="stat-card">
            <div class="accent-strip"></div>
            <div class="lbl">Tasa de aprobación</div>
            <div class="val">74%</div>
            <div class="delta up">▲ 5% este mes</div>
        </div>
    </div>
</div>
<div class="panel">
    <h2>Actividad reciente</h2>
    <div class="desc">Últimos movimientos en tu cuenta.</div>
    <table class="table">
        <thead>
            <tr><th>Evento</th><th>Detalle</th><th>Usuario</th><th>Fecha</th></tr>
        </thead>
        <tbody>
            <tr><td>Cotización creada</td><td>#COT-1042 — Cliente Norvia</td><td>Carla Medina</td><td>Hoy, 10:24</td></tr>
            <tr><td>Usuario invitado</td><td>diego.ramos@correo.com</td><td>Carla Medina</td><td>Ayer, 18:02</td></tr>
            <tr><td>Cotización aprobada</td><td>#COT-1038 — Cliente Bluepine</td><td>Javier Ortiz</td><td>Ayer, 14:11</td></tr>
            <tr><td>Cotización rechazada</td><td>#COT-1035 — Cliente Rutas MX</td><td>Sofía León</td><td>Lun, 09:47</td></tr>
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>