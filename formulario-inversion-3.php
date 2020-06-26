<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100">
	<div class="container">
		<!-- MENSAJE -->
		<div class="row mb-md-5">
			<div class="d-md-flex align-items-center mb-md-5">
				<div class="d-inline-block pl-3 pb-md-0 pb-4">
					<div class="cir-120px border-979797-1px bg-img" style="background-image: url('img/bg-referidos1.png');"></div>
				</div>
				<div class="d-inline-block pl-md-5 pl-3 pb-md-0 pb-4">
					<p class="txt36 c-blue is-bold">Abre tu cuenta</p>
				</div>
			</div>
			<div class="col-12">
				<p class="c-dark-blue max-w-760">La siguiente información es necesaria para abrir tu cuenta y recopilada por tu seguridad, algunos datos son requeridos paor la Comisión Nacional Bancaria y de Valores.</p>
			</div>
		</div>

		<!-- NAVEGACIÓN -->
		<div class="nav-pills bg-white border-50px d-inline-block mb-5">
			<div class="d-flex">
				<div class="pill visited border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">1</span> Registro
				</div>
				<div class="pill visited border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">2</span> Tus Datos
				</div>
				<div class="pill active border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">3</span> Actividad
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">4</span> Beneficiarios
				</div>
			</div>
		</div>

		<!-- FORMULARIO -->
		<form class="form-row">
			<!-- ACTIVIDAD ECONÓMICA -->
			<div class="col-12 mb-4">
				<p class="c-dark-blue txt36 is-bold">Actividad Económica</p>
			</div>
			<div class="form-group d-flex align-items-end col-12 form-row">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Profesión</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Ocupación</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Actividad Económica</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
			</div>
			<div class="form-group d-flex align-items-end col-12 form-row no-gutters">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Origen de los recursos a invertir</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Destino de los recursos</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">¿Los recursos a depositar son propios?</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
			</div>
			<div class="form-group col-12 form-row">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">¿Es usted una persona políticamente expuesta?</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
			</div>

			<!-- DATOS FINANCIEROS -->
			<div class="col-12 mb-md-5 mb-4 mt-mb-5 mt-3">
				<p class="c-dark-blue txt36 is-bold mb-3">Datos Financieros</p>
				<p class="c-dark-blue max-w-760">Por favor llena los datos de cuenta bancaria (CLABE o número de tarjeta de débito) a la que se regresarán tus recursos una vez que lo solicite; esta cuenta debe estar a tu mismo nombre. También te pedimos un estimado del monto y número de operaciones que realizarás.</p>
			</div>
			<div class="form-group d-flex align-items-end col-12 form-row">
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Nombre de la institución bancaria</p>
					<select class="form-control txt18 has-gray-placeholder" name="">
						<option value="a-la-vista">Selecciona</option>
					</select>
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Número de cuenta CLABE (18 dígitos)</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="000000000000000000">
				</div>
			</div>
			<div class="form-group d-flex align-items-end col-12 form-row no-gutters">
				<div class="col-md-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mr-3 mb-3 position-relative">Número máximo de movimientos en un sólo mes</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">20 movimientos son suficientes para la mayoría de nuestros clientes</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder text-left" type="number" name="" placeholder="$">
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Cantidad máxima a invertir en un sólo mes</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="$">
				</div>
				<div class="col-lg-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Límite de transferencias electrónicas</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="$">
				</div>
			</div>
			<div class="form-group col-12 mt-3">
				<button class="has-btn has-lg-btn min-w-220 bg-blue c-white m-auto">Siguiente</button>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>
