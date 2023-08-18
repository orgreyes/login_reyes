<h2 class="text-center mb-4 text-primary">Inicio de Sesión</h2>
<div class="row justify-content-center" >
        <form class="col-lg-4 border rounded p-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="usu_catalogo" class="form-label">Catálogo</label>
                    <input type="number" class="form-control" id="usu_catalogo" name="usu_catalogo">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="usu_password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="usu_password" name="usu_password">
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
        </form>
    </div class="mt-3">
    <p class="mb-0 text-center">¿No tienes una cuenta?<a href="/login_reyes/registro" class="text-primary fw-bold ms-2">Registrate</a></p> 
    <script src="<?= asset('./build/js/login/index.js') ?>"></script>
    </div>
</div>
