<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Ordenes</h4>
				<hr>
				<table class="table table-sm table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Cliente</th>
							<th>Producto</th>
							<th>Piezas</th>
							<th>Vendedor</th>
							<th>Direccion de vendedor</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody id="orders-table">
						<tr>
							<td colspan="7">
								<center>Sin datos</center>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(() => load_orders());
	const load_orders = () => {
		let table = $("#orders-table");
		const request = $.get("<?= base_url('orderscontroller/load_orders') ?>");
		request.done((response) => {
			if (response.length > 0) {
				table.empty();
				$.each(response, (i, val) => {
					table.append(`
						<tr>
							<td>${val.id}</td>
							<td>${val.cliente}</td>
							<td>${val.producto}</td>
							<td>${val.cantidad}</td>
							<td>${val.vendedor}</td>
							<td>${val.direccion}</td>
							<td>$${val.total}</td>
						</tr>
					`);
				});
			}
		});
		request.fail((jqxhr) => {

		});
	}
</script>
