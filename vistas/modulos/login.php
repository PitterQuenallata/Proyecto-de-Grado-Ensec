<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">¡Bienvenido!</h1>
							<p class="lead">
								Inicia sesión en tu cuenta para continuar
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form>
										<div class="mb-3">
											<label class="form-label">Código</label>
											<input class="form-control form-control-lg" type="" name="ingUsuario" placeholder="Codigo de Registro" require/>
										</div>
										<div class="mb-3">
											<label class="form-label">Contraseña</label>
											<input class="form-control form-control-lg" type="password" name="ingPassword" placeholder=" Ingrese su Contraseña"required />
										</div>
										<div>
											<div class="form-check align-items-center">
												<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
												<label class="form-check-label text-small" for="customControlInline">Recuerdame</label>
											</div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Iniciar Sesion</button>	
											<!-- <a href="" class="btn btn-lg btn-primary">Iniciar Sesión</a> -->
										</div>
                                        <?php 
   
                                            $login =  new ControladorUsuarios();
                                            $login -> ctrIngresoUsuario();

                                        ?>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							¿No Recuerda su contraseña? <a href="pages-sign-up.html">Inscribirse</a>
						</div>
					</div>
				</div>
			</div>
		</div>