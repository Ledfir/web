<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel de control | <?= $this->renderSection('title') ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
        </head>
    <body>
        <div class="shell">
            <!-- ===== Sidebar ===== -->
            <?= view('Admin/includes/sidebar') ?>
            <!-- ===== Main ===== -->
            <main class="main">
                <?= view('Admin/includes/header', ['title' => $this->renderSection('title'), 'description' => $this->renderSection('description')]) ?>
                <!-- ---------- HOME ---------- -->
                <section id="home" class="section active">
                    <?= $this->renderSection('content') ?>
                </section>
                <?= view('Admin/includes/footer') ?>
            </main>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>