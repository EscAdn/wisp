<div class="shadow-sm p-3 mb-2 bg-body rounded">
	<h4>Planes</h4>
</div>

<div class="row p-3 m-1 w-100">
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<form class="card text-center p-4" action="">
				<h5 class="card-header bg-white">
					<span class="h3 fw-bold">Registrar Plan</span>
				</h5>
				<div class="card-body">
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="Nombre Completo">
						<label for="floatingInput">Nombre</label>
					</div>
					<div class="form-floating mb-3">
						<input autofocus type="number" step="0.1" value="0" class="form-control" id="floatingInput" placeholder="Máx. Subida">
						<label for="floatingInput">Máx. Subida</label>
					</div>
					<div class="form-floating mb-3">
						<input autofocus type="number" step="0.1" value="0" class="form-control" id="floatingInput" placeholder="Máx. Bajada">
						<label for="floatingInput">Máx. Bajada</label>
					</div>
					<div class="row col-sm-12 mt-4 justify-content-center">
						<a class="btn col-auto btn-wisp fw-bold text-center">
							<i class="fa fa-broom"></i>&nbsp;Limpiar
						</a>
						&nbsp;
						<button class="fw-bold col-auto text-center btn btn-wisp">
							<i class="fas fa-save"></i>&nbsp;Registrar
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="card col-sm-12 col-md-8 p-3">
			<!-- Filtrar -->
			<div class="row d-flex">
				<form class="row col-sm-12">
					<label for="inputSearch" class="col-2 col-form-label fw-bold">Buscar</label>
					<div class="col-10">
						<input autofocus class="form-control" type="text" placeholder="Nombre clientes, Dirección IP, Nombre del plan">
					</div>
				</form>
			</div>
			<div class="mt-4 col-12 p-2 h-max scroll overflow-auto">
				<!-- Table -->
				<table class="table table-responsive table-hover shadow p-3 mb-5 bg-body">
					<thead>
						<tr class="bg-personalizado">
							<th scope="col">#</th>
							<th scope="col">Nombre</th>
							<th scope="col">Máx Subida</th>
							<th scope="col">Máx Bajada</th>
							<th scope="col">Mensualidad</th>
							<th scope="col">Instalación</th>
							<th scope="col">Registro</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody id="planesList">
						<tr>
							<td>1</td>
							<td>Plan Económico</td>
							<td>2 MG</td>
							<td>5 MG</td>
							<td>$ 300.00</td>
							<td>$ 800</td>
							<td>22/10/2021</td>
							<td>
								<button id="ver_plan" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar_plan" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>