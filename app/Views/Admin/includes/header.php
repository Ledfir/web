<div class="topbar">
    <div>
        <h1 id="pageTitle"><?= $title ?? '' ?></h1>
        <div class="sub" id="pageSub"><?= $description ?? '' ?></div>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="search-box">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
            <input type="text" placeholder="Buscar...">
        </div>
        <button class="btn-gold">+ Nuevo</button>
    </div>
</div>