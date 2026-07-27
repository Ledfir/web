<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <style>
            :root{
                --ink:#0e1b18;
                --deep:#0f2a24;
                --emerald:#1c4b3f;
                --gold:#c9a463;
                --gold-soft:#e2c98a;
                --mist:#f4f2ec;
                --line:rgba(244,242,236,0.14);
            }

            *{box-sizing:border-box;}

            body{
                margin:0;
                min-height:100vh;
                font-family:'Inter', sans-serif;
                background:
                radial-gradient(circle at 15% 20%, rgba(201,164,99,0.10), transparent 45%),
                radial-gradient(circle at 85% 80%, rgba(28,75,63,0.35), transparent 50%),
                linear-gradient(160deg, var(--ink) 0%, var(--deep) 55%, #0a1512 100%);
                display:flex;
                align-items:center;
                justify-content:center;
                padding:24px;
                position:relative;
                overflow:hidden;
            }

            /* fine grid texture, signature element */
            body::before{
                content:"";
                position:absolute;
                inset:0;
                background-image:
                linear-gradient(var(--line) 1px, transparent 1px),
                linear-gradient(90deg, var(--line) 1px, transparent 1px);
                background-size:64px 64px;
                mask-image:radial-gradient(circle at 50% 40%, black 0%, transparent 75%);
                opacity:.5;
                pointer-events:none;
            }

            .scene{
                position:relative;
                width:100%;
                max-width:900px;
                display:grid;
                grid-template-columns:1.1fr 1fr;
                background:rgba(244,242,236,0.03);
                border:1px solid var(--line);
                border-radius:22px;
                overflow:hidden;
                backdrop-filter:blur(18px);
                box-shadow:0 40px 80px -30px rgba(0,0,0,0.6);
            }

            .panel-brand{
                padding:56px 48px;
                display:flex;
                flex-direction:column;
                justify-content:space-between;
                background:linear-gradient(155deg, rgba(28,75,63,0.55), rgba(14,27,24,0.2));
                border-right:1px solid var(--line);
                position:relative;
            }

            .mark{
                width:42px;
                height:42px;
                border-radius:10px;
                background:linear-gradient(135deg, var(--gold-soft), var(--gold));
                display:flex;
                align-items:center;
                justify-content:center;
                font-family:'Fraunces', serif;
                font-weight:600;
                color:var(--ink);
                font-size:20px;
            }

            .brand-copy{margin-top:40px;}

            .brand-copy .eyebrow{
                text-transform:uppercase;
                letter-spacing:.18em;
                font-size:11px;
                color:var(--gold-soft);
                font-weight:600;
                margin-bottom:18px;
            }

            .brand-copy h1{
                font-family:'Fraunces', serif;
                font-weight:500;
                font-size:2.4rem;
                line-height:1.15;
                color:var(--mist);
                margin-bottom:16px;
            }

            .brand-copy p{
                color:rgba(244,242,236,0.6);
                font-size:.95rem;
                line-height:1.6;
                max-width:32ch;
            }

            .brand-foot{
                display:flex;
                gap:28px;
                color:rgba(244,242,236,0.45);
                font-size:.8rem;
                border-top:1px solid var(--line);
                padding-top:20px;
                margin-top:40px;
            }

            .panel-form{
                padding:56px 48px;
                display:flex;
                flex-direction:column;
                justify-content:center;
            }

            .panel-form h2{
                font-family:'Fraunces', serif;
                font-weight:500;
                color:var(--mist);
                font-size:1.6rem;
                margin-bottom:6px;
            }

            .panel-form .sub{
                color:rgba(244,242,236,0.5);
                font-size:.88rem;
                margin-bottom:32px;
            }

            .form-label{
                color:rgba(244,242,236,0.75);
                font-size:.8rem;
                font-weight:500;
                letter-spacing:.02em;
                margin-bottom:6px;
            }

            .form-control{
                background:rgba(244,242,236,0.04);
                border:1px solid var(--line);
                color:var(--mist);
                padding:12px 14px;
                border-radius:10px;
                font-size:.92rem;
            }

            .form-control::placeholder{color:rgba(244,242,236,0.28);}

            .form-control:focus{
                background:rgba(244,242,236,0.06);
                border-color:var(--gold);
                box-shadow:0 0 0 3px rgba(201,164,99,0.15);
                color:var(--mist);
            }

            .input-group .btn-ghost{
                background:rgba(244,242,236,0.04);
                border:1px solid var(--line);
                border-left:none;
                color:rgba(244,242,236,0.55);
                border-radius:0 10px 10px 0;
            }
            .input-group .form-control{border-radius:10px 0 0 10px;}
            .input-group .btn-ghost:hover{color:var(--gold-soft);}

            .form-check-input{
                background-color:rgba(244,242,236,0.06);
                border:1px solid var(--line);
            }
            .form-check-input:checked{
                background-color:var(--gold);
                border-color:var(--gold);
            }
            .form-check-label{color:rgba(244,242,236,0.6); font-size:.85rem;}

            .link-gold{
                color:var(--gold-soft);
                text-decoration:none;
                font-size:.85rem;
            }
            .link-gold:hover{color:var(--gold); text-decoration:underline;}

            .btn-gold{
                background:linear-gradient(135deg, var(--gold-soft), var(--gold));
                border:none;
                color:var(--ink);
                font-weight:600;
                padding:12px;
                border-radius:10px;
                letter-spacing:.01em;
                transition:transform .15s ease, box-shadow .15s ease;
            }
            .btn-gold:hover{
                transform:translateY(-1px);
                box-shadow:0 12px 24px -10px rgba(201,164,99,0.5);
                color:var(--ink);
            }

            .divider{
                display:flex;
                align-items:center;
                gap:12px;
                color:rgba(244,242,236,0.35);
                font-size:.78rem;
                margin:22px 0;
            }
            .divider::before, .divider::after{
                content:"";
                flex:1;
                height:1px;
                background:var(--line);
            }

            .btn-outline-soft{
                background:transparent;
                border:1px solid var(--line);
                color:rgba(244,242,236,0.75);
                border-radius:10px;
                padding:10px;
                font-size:.88rem;
                display:flex;
                align-items:center;
                justify-content:center;
                gap:8px;
                transition:border-color .15s ease, background .15s ease;
            }
            .btn-outline-soft:hover{
                border-color:var(--gold);
                background:rgba(244,242,236,0.03);
                color:var(--mist);
            }

            .foot-note{
                text-align:center;
                color:rgba(244,242,236,0.4);
                font-size:.85rem;
                margin-top:26px;
            }

            @media (max-width:820px){
                .scene{grid-template-columns:1fr;}
                .panel-brand{display:none;}
                .panel-form{padding:44px 30px;}
            }
            #secc-message{
                position:fixed;
                top:20px;
                z-index:9999;
            }
        </style>
        
    </head>
    <body>
        <?php if (session()->getFlashdata('error')): ?>
            <div id="secc-message">
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="scene">
            <!-- Panel de marca -->
            <div class="panel-brand">
                <div class="mark">A</div>
                <div class="brand-copy">
                    <div class="eyebrow">Acceso privado</div>
                    <h1>Tu trabajo, en un solo lugar tranquilo.</h1>
                    <p>Inicia sesión para retomar exactamente donde lo dejaste. Sin ruido, sin distracciones.</p>
                </div>
                <div class="brand-foot">
                    <span>Cifrado extremo a extremo</span>
                    <span>Soporte 24/7</span>
                </div>
            </div>
            <!-- Panel de formulario -->
            <div class="panel-form">
                <h2>Bienvenido de nuevo</h2>
                <p class="sub">Ingresa tus datos para continuar.</p>
                <form novalidate method="post" action="<?= base_url(route_to('admin.login.post')) ?>">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="tu@correo.com" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                            <button class="btn btn-ghost" type="button" id="togglePass">Ver</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-4">
                        <a href="#" class="link-gold">¿Olvidaste tu contraseña?</a>
                    </div>
                    <button type="submit" class="btn btn-gold w-100">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        document.getElementById('togglePass').addEventListener('click', function(){
            const input = document.getElementById('password');
            const isPass = input.type === 'password';
            input.type = isPass ? 'text' : 'password';
            this.textContent = isPass ? 'Ocultar' : 'Ver';
        });

    </script>
</html>