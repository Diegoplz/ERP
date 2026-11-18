<!doctype html>
<html lang="es">
<!--begin::Head-->
<?php include("head.php") ?>
<!--end::Head-->
<!--begin::Body-->
<body class="login-page bg-body-secondary">
<main class="login-box">
    <h1 class="login-logo">
    <a href="#"><b>Bolsa</b> Empleo</a>
    </h1>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
                <p class="login-box-msg">Introduce tu usuario y contraseña</p>

            <form action="verificar.php" method="POST">
                <label class="visually-hidden" for="loginEmail">Usuario</label>
                    <div class="input-group mb-3">
                        <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Usuario" required />
                            <div class="input-group-text">
                                <span class="bi bi-person-fill"></span>
                            </div>
                    </div>
                <label class="visually-hidden" for="loginPassword">Contraseña</label>
                    <div class="input-group mb-3">
                        <input  id="password" name="password" type="password" class="form-control" placeholder="Contraseña" required />
                            <div class="input-group-text">
                                <span class="bi bi-lock-fill"></span>
                            </div>
                    </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
</main>
<!-- /.login-box -->

<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
    src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.16.0/browser/overlayscrollbars.browser.es6.min.js"
    crossorigin="anonymous"
></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    crossorigin="anonymous"
></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="../js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)-->
<!--begin::OverlayScrollbars Configure-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function () {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

    // Disable OverlayScrollbars on mobile devices to prevent touch interference
    const isMobile = window.innerWidth <= 992;

    if (
        sidebarWrapper &&
        globalThis.OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
        !isMobile
    ) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
        },
        });
    }
    });
</script>
<!--end::OverlayScrollbars Configure-->

<!--begin::Color Mode Toggle-->
<!-- The light/dark/auto switcher ships in adminlte.js as the ColorMode
    module (since 4.1) — no page script needed. Only the no-flash snippet
    in <head> stays inline, because it must run before first paint. -->
<!--end::Color Mode Toggle-->

<!--end::Script-->
</body>
<!--end::Body-->
</html>
