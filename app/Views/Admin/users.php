<?php $this->extend('Admin/includes/page'); ?>

<?php $this->section('title'); ?>
    Usuarios
<?php $this->endSection(); ?>

<?php $this->section('description'); ?>
    Administra los accesos de tu equipo
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<div class="panel">
    <div class="d-flex justify-content-between align-items-start mb-1">
        <div>
            <h2>Usuarios</h2>
            <div class="desc">Administra los accesos de tu equipo.</div>
        </div>
        <button class="btn-gold" data-bs-toggle="modal" data-bs-target="#modalUsuario">+ Invitar usuario</button>
    </div>
    <table class="table">
        <thead>
            <tr><th>Usuario</th><th>Correo</th><th>Rol</th><th>Estado</th><th></th></tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="user-cell">
                    <div class="user-avatar">CM</div>
                    Carla Medina
                    </div>
                </td>
                <td>carla.medina@correo.com</td>
                <td><span class="badge-role">Administradora</span></td>
                <td><span class="badge-status aprobada">Activo</span></td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
            <tr>
                <td>
                    <div class="user-cell">
                    <div class="user-avatar">JO</div>
                    Javier Ortiz
                    </div>
                </td>
                <td>javier.ortiz@correo.com</td>
                <td><span class="badge-role">Ventas</span></td>
                <td><span class="badge-status aprobada">Activo</span></td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
            <tr>
                <td>
                    <div class="user-cell">
                    <div class="user-avatar">SL</div>
                    Sofía León
                    </div>
                </td>
                <td>sofia.leon@correo.com</td>
                <td><span class="badge-role">Ventas</span></td>
                <td><span class="badge-status pendiente">Invitado</span></td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
            <tr>
                <td>
                    <div class="user-cell">
                    <div class="user-avatar">DR</div>
                    Diego Ramos
                    </div>
                </td>
                <td>diego.ramos@correo.com</td>
                <td><span class="badge-role">Soporte</span></td>
                <td><span class="badge-status rechazada">Inactivo</span></td>
                <td><button class="icon-btn">⋯</button></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-elegant">
            <div class="modal-header">
                <div>
                    <h2>Crear usuario</h2>
                    <div class="desc">Se enviará un correo con las credenciales de acceso al panel.</div>
                </div>
                <button type="button" class="icon-btn" data-bs-dismiss="modal" aria-label="Cerrar">✕</button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="row g-3 mb-1">
                        <div class="col-sm-6">
                            <label for="uNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="uNombre" placeholder="Ej. Diego Ramos">
                        </div>
                        <div class="col-sm-6">
                            <label for="uCorreo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="uCorreo" placeholder="nombre@correo.com">
                        </div>
                    </div>
                    <div class="mb-1 mt-3">
                        <label class="form-label d-block">Rol</label>
                        <div class="role-options">
                            <label class="role-pill">
                                <input type="radio" name="rol" value="administradora" checked>
                                <span>Administradora</span>
                            </label>
                            <label class="role-pill">
                                <input type="radio" name="rol" value="ventas">
                                <span>Ventas</span>
                            </label>
                            <label class="role-pill">
                                <input type="radio" name="rol" value="soporte">
                                <span>Soporte</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Permisos</label>
                        <div class="perm-row">
                            <div>
                                <div class="perm-title">Ver cotizaciones</div>
                                <div class="perm-sub">Puede consultar el listado y su detalle</div>
                            </div>
                                <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>
                        <div class="perm-row">
                            <div>
                                <div class="perm-title">Crear y editar cotizaciones</div>
                                <div class="perm-sub">Puede generar nuevas cotizaciones</div>
                            </div>
                                <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>
                        <div class="perm-row">
                            <div>
                                <div class="perm-title">Gestionar usuarios</div>
                                <div class="perm-sub">Puede invitar o desactivar cuentas</div>
                            </div>
                                <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-outline-soft" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn-gold">Crear usuario</button>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>