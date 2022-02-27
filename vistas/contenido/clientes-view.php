<div class="shadow-sm p-3 mb-2 bg-body rounded">
	<h4>Clientes</h4>
</div>

<div class="row p-3 m-1 w-100">
	
	<!-- Formulario -->
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<form action="" id="client-data" class="card text-center p-4">
				<h5 class="card-header bg-white">
					<span class="h3 fw-bold">Registro</span>
				</h5>
				<div class="card-body">
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="Nombre Completo">
						<label for="floatingInput">Nombre Completo</label>
					</div>
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="Teléfono">
						<label for="floatingInput">Teléfono</label>
					</div>
					<div class="form-floating">
						<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
							<option selected>Seleccione una opción...</option>
							<option value="3">2da del 11</option>
							<option value="3">5 de Mayo</option>
							<option value="2">Calzada</option>
							<option value="1">Mantilla</option>
						</select>
						<label for="floatingSelect">Dirección</label>
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
						<input autofocus class="form-control" type="text" placeholder="Nombre clientes, Dirección">
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
							<th scope="col">Teléfono</th>
							<th scope="col">Direccíon</th>
							<th scope="col">Corte</th>
							<th scope="col">Registro</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody>
						<tr id="clientesList">
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr>
						<tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td>123</td>
							<td>Mark Dogglas Nikoley</td>
							<td>9141398454</td>
							<td>Calzada</td>
							<td>15</td>
							<td>12/10/2021</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
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