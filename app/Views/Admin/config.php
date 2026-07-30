<?php $this->extend('Admin/includes/page'); ?>

<?php $this->section('title'); ?>
    Configuración
<?php $this->endSection(); ?>

<?php $this->section('description'); ?>
    Ajustes generales del sitio y contacto
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<form id="frmConfig">
    <div class="row g-3">
        <!-- Identidad del sitio -->
        <div class="col-lg-5">
            <div class="panel h-100">
                <h2>Identidad del sitio</h2>
                <div class="desc">El favicon se usa como ícono de pestaña del navegador.</div>

                <div class="favicon-uploader">
                    <div class="favicon-preview" id="faviconPreview">A</div>
                    <div class="flex-fill">
                        <div class="favicon-name" id="faviconName">favicon-actual.png</div>
                        <div class="d-flex gap-2 mt-2">
                            <label class="btn-outline-soft mb-0" for="faviconInput" style="cursor:pointer;">Cambiar</label>
                            <input type="file" id="faviconInput" accept="image/png, image/x-icon, image/svg+xml" hidden>
                            <button type="button" class="btn-outline-soft">Quitar</button>
                        </div>
                        <div class="favicon-hint">PNG, ICO o SVG · recomendado 64×64px</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Datos de contacto -->
        <div class="col-lg-7">
            <div class="panel h-100">
                <h2>Datos de contacto</h2>
                <div class="desc">Esta información se muestra públicamente en el sitio.</div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label">Teléfono de WhatsApp</label>
                        <div class="input-group">
                            <span class="input-group-text prefix-soft">+52</span>
                            <input type="tel" class="form-control" placeholder="81 8181 8181" value="<?= $configuracion['whatsapp']['value'] ?? '81 8181 8181' ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Correo de contacto</label>
                        <input type="email" class="form-control" placeholder="contacto@empresa.com" value="<?= $configuracion['email']['value'] ?? 'contacto@aurea.com' ?>">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" placeholder="Calle, número, colonia, ciudad" value="<?= $configuracion['direccion']['value'] ?? 'Av. Constitución 400, Centro, Monterrey, N.L.' ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- Mensaje de WhatsApp -->
        <div class="col-12">
            <div class="panel">
                <h2>Mensaje predeterminado de WhatsApp</h2>
                <div class="desc">Se enviará automáticamente cuando un visitante haga clic en el botón de WhatsApp del sitio.</div>
                <div class="row g-3">
                    <div class="col-lg-7">
                        <label class="form-label">Mensaje</label>
                        <textarea class="form-control" rows="5" placeholder="Escribe el mensaje..."><?= $configuracion['message_whatsapp']['value'] ?? 'Hola, vengo del sitio web y me gustaría solicitar una cotización.' ?></textarea>
                        <div class="favicon-hint mt-2">Puedes usar variables como <code>{nombre}</code> o <code>{pagina}</code>.</div>
                    </div>
                    <div class="col-lg-5">
                        <label class="form-label">Vista previa</label>
                        <div class="wa-preview">
                            <div class="wa-preview-head">
                                <div class="wa-avatar">A</div>
                                <div>
                                  <div class="wa-name">Aurea</div>
                                  <div class="wa-status">en línea</div>
                                </div>
                            </div>
                            <div class="wa-bubble">
                                <?= $configuracion['message_whatsapp']['value'] ?? 'Hola, vengo del sitio web y me gustaría solicitar una cotización.' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="d-flex justify-content-end gap-2 mt-3">
    <button class="btn-outline-soft">Cancelar</button>
    <button class="btn-gold" id="btnGuardar">Guardar cambios</button>
</div>
<?php $this->endSection(); ?>

<?php $this->section('scripts'); ?>
<script>
    $(document).ready(function() {
        $('#btnGuardar').click(function() {
            var formData = new FormData($('#frmConfig')[0]);
            $.ajax({
                url: '<?= base_url('admin/config/save') ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                
                success: function(response) {
                    alert('Configuración guardada correctamente.');
                },
                error: function(xhr, status, error) {
                    alert('Error al guardar la configuración.');
                }
            });
        });
    });
</script>
<?php $this->endSection(); ?>