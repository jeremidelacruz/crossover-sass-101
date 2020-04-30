<?php include('header.php'); ?>

<section class="bg-gray pt-100 pb-100">
	<div class="container">
		<!-- MENSAJE -->
		<div class="row mb-md-5">
			<div class="d-flex align-items-center mb-md-5">
				<div class="col-auto">
					<div class="cir-120px border-979797-1px bg-img" style="background-image: url('img/bg-referidos1.png');"></div>
				</div>
				<div class="col-auto">
					<p class="c-blue txt36 is-bold">Abre tu cuenta</p>
				</div>
			</div>
			<div class="col-12">
				<p class="c-dark-blue">La siguiente información es necesaria para abrir tu cuenta y recopilada por tu seguridad, algunos datos son requeridos paor la Comisión Nacional Bancaria y de Valores.</p>
			</div>
		</div>

		<!-- NAVEGACIÓN -->
		<div class="nav-pills bg-white border-50px d-inline-block mb-5">
			<div class="d-flex">
				<div class="pill active c-white border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">1</span> Registro
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">2</span> Tus Datos
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">3</span> Actividad
				</div>
				<div class="pill disabled border-50px is-bold p-2 txt24">
					<span class="cir-30x30 bg-dark-blue c-white mr-2">4</span> Beneficiarios
				</div>
			</div>
		</div>

		<!-- FORMULARIO -->
		<form class="form-row">
			<div class="col-12 mb-4">
				<p class="c-dark-blue txt36 is-bold">Actividad Económica</p>
			</div>
			<div class="form-group col-12 form-row">
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Nombres(s)</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Ciudad">
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Apellido paterno*</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Apellido Paterno *">
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Apellido materno*</p>
					<input class="form-control txt18 has-gray-placeholder" type="text" name="" placeholder="Apellido Materno *">
				</div>
			</div>
			<div class="form-group col-12 form-row">
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Teléfono Celular</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="number" name="" placeholder="81 0000 0000">
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mb-3 position-relative">RFC</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">Metodología usada mes a mes para el cáulculo de la tasa de interés.</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder text-left" type="text" name="" placeholder="XXXX-010101-000">
				</div>
			</div>
			<div class="form-group col-12 form-row">
				<div class="col-md-4 mb-lg-3 mb-4">
					<div class="position-relative">
						<p class="c-black mb-3 position-relative">Correo Electrónico</p>
						<div class="i-btn-sm has-tooltip-top">i
							<div class="tooltip-box bg-dark-blue txt18">Metodología usada mes a mes para el cáulculo de la tasa de interés.</div>
						</div>
					</div>
					<input class="form-control txt18 has-gray-placeholder text-left" type="text" name="" placeholder="Correo Electrónico">
				</div>
				<div class="col-md-4 mb-lg-3 mb-4">
					<p class="c-black mb-3">Crea una contraseña</p>
					<input class="form-control txt18 has-gray-placeholder text-left" type="password" name="" placeholder="●●●●●●●●">
				</div>
			</div>
			<div class="form-group col-12">
				<button class="has-btn has-lg-btn min-w-220 bg-blue c-white m-auto">Siguiente</button>
			</div>
		</form>
	</div>
</section>

<?php include('footer.php'); ?>
