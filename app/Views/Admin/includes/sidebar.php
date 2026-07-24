<aside class="sidebar">
    <div class="brand">
        <div class="mark">A</div>
        <div class="brand-text">
            <div class="name">Aurea</div>
            <div class="tag">Panel de control</div>
        </div>
    </div>
    <div class="nav-label">Menú</div>
    <nav>
        <a class="nav-item <?= (uri_string() === 'admin') ? 'active' : '' ?>" data-target="home" href="<?= base_url(route_to('admin.dashboard')) ?>">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 11.5 12 4l9 7.5"/><path d="M5 10v9a1 1 0 0 0 1 1h4v-6h4v6h4a1 1 0 0 0 1-1v-9"/></svg>
            Home
        </a>
        <a class="nav-item <?= (uri_string() === 'admin/quotes') ? 'active' : '' ?>" data-target="cotizaciones" href="<?= base_url(route_to('admin.quotes')) ?>">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M7 3h8l4 4v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/><path d="M14 3v5h5"/><path d="M9 13h6M9 17h6M9 9h2"/></svg>
            Cotizaciones
        </a>
        <a class="nav-item <?= (uri_string() === 'admin/users') ? 'active' : '' ?>" data-target="usuarios" href="<?= base_url(route_to('admin.users')) ?>">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="3.2"/><path d="M3.5 20c.7-3.4 3-5.4 5.5-5.4s4.8 2 5.5 5.4"/><circle cx="17.5" cy="8.5" r="2.5"/><path d="M15.8 14.9c2.1.4 3.7 2.1 4.2 4.5"/></svg>
            Usuarios
        </a>
    </nav>
    <div class="nav-label mt-3">Sistema</div>
    <nav>
        <a class="nav-item <?= (uri_string() === 'admin/config') ? 'active' : '' ?>" data-target="configuracion" href="<?= base_url(route_to('admin.config')) ?>">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="3"/><path d="M19.4 13.5a1.7 1.7 0 0 0 .35 1.9l.05.05a2 2 0 1 1-2.9 2.9l-.05-.05a1.7 1.7 0 0 0-1.9-.35 1.7 1.7 0 0 0-1 1.55V19.6a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1.1-1.55 1.7 1.7 0 0 0-1.9.35l-.05.05a2 2 0 1 1-2.9-2.9l.05-.05a1.7 1.7 0 0 0 .35-1.9 1.7 1.7 0 0 0-1.55-1H4.4a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.55-1.1 1.7 1.7 0 0 0-.35-1.9l-.05-.05a2 2 0 1 1 2.9-2.9l.05.05a1.7 1.7 0 0 0 1.9.35H10.5a1.7 1.7 0 0 0 1-1.55V4.4a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.55 1.7 1.7 0 0 0 1.9-.35l.05-.05a2 2 0 1 1 2.9 2.9l-.05.05a1.7 1.7 0 0 0-.35 1.9V10.5a1.7 1.7 0 0 0 1.55 1H19.6a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.55 1Z"/></svg>
            Configuración
        </a>
    </nav>
    <div class="sidebar-foot">
        <div class="avatar-sm">CM</div>
        <div class="who">
            <div class="n">Carla Medina</div>
            <div class="r">Administradora</div>
        </div>
    </div>
</aside>