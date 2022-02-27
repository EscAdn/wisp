<div class="shadow-sm p-3 mb-2 bg-body rounded">
	<h4>Contratos</h4>
</div>

<div class="row p-3 m-1 w-100">
	<!-- <div class="dropdown">
		<button onclick="myFunction()" class="dropbtn dropdown-toggle">Dropdown</button>
		<div id="myDropdown" class="dropdown-content">
			<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
			<a href="#about">About</a>
			<a href="#base">Base</a>
			<a href="#blog">Blog</a>
			<a href="#contact">Contact</a>
			<a href="#custom">Custom</a>
			<a href="#support">Support</a>
			<a href="#tools">Tools</a>
		</div>
	</div> -->
	<div class="row">
		<div class="col-sm-12 col-md-4">
			<form action="" id="client-data" class="card text-center p-4">
				<h5 class="card-header bg-white">
					<span class="h3 fw-bold">Registrar Contrato</span>
				</h5>
				<div class="card-body">
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="Nombre Completo">
						<label for="floatingInput">Cliente</label>
					</div>
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="IP">
						<label for="floatingInput">IP</label>
					</div>
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="MAC">
						<label for="floatingInput">MAC</label>
					</div>
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="IP">
						<label for="floatingInput">IP</label>
					</div>
					<div class="form-floating mb-3">
						<input autofocus type="text" class="form-control" id="floatingInput" placeholder="No Serie">
						<label for="floatingInput">No Serie</label>
					</div>
					<div class="form-floating">
						<select class="form-select" id="floatingSelect" aria-label="Floating label select example">
							<option selected>Seleccione una plan...</option>
							<option value="3">Plan 1</option>
							<option value="2">Plan 2</option>
							<option value="1">Plan 3</option>
						</select>
						<label for="floatingSelect">Plan</label>
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
							<th scope="col">Tipo</th>
							<th scope="col">Nombre</th>
							<th scope="col">Dirección</th>
							<th scope="col">IP</th>
							<th scope="col">MAC</th>
							<th scope="col">Plan</th>
							<th scope="col">Estado</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody id="contratosList">
						<tr>
							<td class="text-center">
								<i class="fas fa-wifi"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Económico</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
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
							<td class="text-center">
								<i class="fas fa-ethernet"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-ethernet"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-wifi"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-wifi"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-wifi"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-ethernet"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-wifi"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-wifi"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
							<td>
								<button id="ver" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-eye"></i>
								</button>
								<button id="editar" class="btn btn-sm btn-outline-wisp">
									<i class="fas fa-edit"></i>
								</button>
							</td>
						</tr><tr>
							<td class="text-center">
								<i class="fas fa-ethernet"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
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
							<td class="text-center">
								<i class="fas fa-wifi"></i>
							</td>
							<td>Mark Dogglas Nikoley</td>
							<td>Calzada</td>
							<td>192.168.6.123</td>
							<td>90:17:3F:F5:01:4D</td>
							<td>Plan Fast</td>
							<td>
								<h1 class="badge bg-success">
									Activo
								</h1>
							</td>
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