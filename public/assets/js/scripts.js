// const titles = {
//     home: { title: 'Home', sub: 'Resumen general de tu actividad' },
//     cotizaciones: { title: 'Cotizaciones', sub: 'Gestiona y da seguimiento a tus cotizaciones' },
//     usuarios: { title: 'Usuarios', sub: 'Administra los accesos de tu equipo' },
//     configuracion: { title: 'Configuración', sub: 'Ajustes generales del sitio y contacto' }
// };

//   document.querySelectorAll('.nav-item').forEach(item => {
//     item.addEventListener('click', () => {
//       const target = item.dataset.target;

//       document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
//       item.classList.add('active');

//       document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
//       document.getElementById(target).classList.add('active');

//       document.getElementById('pageTitle').textContent = titles[target].title;
//       document.getElementById('pageSub').textContent = titles[target].sub;

//       // cerrar el offcanvas móvil al elegir una opción
//       closeSidebar();
//     });
//   });

  // Offcanvas del sidebar (móvil)
const sidebarEl = document.getElementById('sidebar');
const backdropEl = document.getElementById('sidebarBackdrop');
const openBtn = document.getElementById('menuOpenBtn');
const closeBtn = document.getElementById('menuCloseBtn');

function openSidebar(){
    sidebarEl.classList.add('open');
    backdropEl.classList.add('show');
}
function closeSidebar(){
    sidebarEl.classList.remove('open');
    backdropEl.classList.remove('show');
}

if (openBtn) openBtn.addEventListener('click', openSidebar);
if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
if (backdropEl) backdropEl.addEventListener('click', closeSidebar);

// Vista previa del favicon subido
const faviconInput = document.getElementById('faviconInput');
if (faviconInput) {
    faviconInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (!file) return;
        const url = URL.createObjectURL(file);
        document.getElementById('faviconPreview').innerHTML = `<img src="${url}" alt="favicon">`;
        document.getElementById('faviconName').textContent = file.name;
    });
}

// Vista previa en vivo del mensaje de WhatsApp
const waTextarea = document.querySelector('#configuracion textarea');
const waBubble = document.querySelector('.wa-bubble');
if (waTextarea && waBubble) {
    waTextarea.addEventListener('input', () => {
        waBubble.textContent = waTextarea.value || 'Hola, vengo del sitio web y me gustaría solicitar una cotización.';
    });
}