<div class="shadow-sm p-3 mb-2 bg-body rounded">
	<h4>Datos Generales</h4>
</div>

<div class="row p-3">
	<div class="col-sm-12 col-md-3">
		<div class="shadow p-4 mb-2 bg-body rounded">
			<i class="fas fa-microchip fa-3x"></i>&nbsp;CPU
		</div>
	</div>
	<div class="col-sm-12 col-md-3">
		<div class="shadow p-4 mb-2 bg-body rounded">
			<i class="fas fa-memory fa-3x"></i>&nbsp;Memory
		</div>
	</div>
	<div class="col-sm-12 col-md-3">
		<div class="shadow p-4 mb-2 bg-body rounded">
			<i class="fas fa-calendar-alt fa-3x"></i>&nbsp;Date
		</div>
	</div>
	<div class="col-sm-12 col-md-3">
		<div class="shadow p-4 mb-2 bg-body rounded">
			<i class="fas fa-clock fa-3x"></i>&nbsp;Time
		</div>
	</div>
</div>

<!-- Grafica y Tabla -->
<div class="row p-3">
	<div class="col-sm-12 col-md-6">
		<div class="card">
			<h5 class="card-header bg-white">
				<span class="h4 fw-bold">Consumo Actual</span>
			</h5>
			<div class="card-body h-max overflow-auto scroll">
				<canvas id="myChart"></canvas>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 rounded">
		<div class="card">
			<h5 class="card-header bg-white">
				<div class="row">
					<span class="col-6 h4 fw-bold">Facturas del Día</span>
					<span class="col-6 d-flex justify-content-end">
						<button type="button" class="btn btn-outline-wisp btn-sm"><i class="fas fa-print"></i></button>
						&nbsp;
						<button type="button" class="btn btn-outline-wisp btn-sm"><i class="fas fa-file-pdf"></i></button>
					</span>
				</div>
			</h5>
			<div class="card-body h-max overflow-auto scroll">
				<table class="table table-responsive table-hover shadow p-3 mb-5 bg-body">
					<thead>
						<tr class="bg-personalizado">
							<th scope="col">#</th>
							<th scope="col">Nombre</th>
							<th scope="col">Fecha</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Greicy Cristel Hernández</td>
							<td>14/02/2022</td>
							<td>$350</td>
							<td>
								<button type="button" class="btn btn-wisp btn-sm"><i class="fas fa-dollar-sign"></i></button>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Alejandra del Carmen Sánchez Colorado</td>
							<td>14/02/2022</td>
							<td>$300</td>
							<td>
								<button type="button" class="btn btn-wisp btn-sm"><i class="fas fa-dollar-sign"></i></button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>