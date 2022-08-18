<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Productos</h4>
				<hr>
				<table class="table table-sm table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Precio</th>
						</tr>
					</thead>
					<tbody id="products-table">
						<tr>
							<td colspan="3">
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
	$(document).ready(() => load_products());
	const load_products = () => {
		let table = $("#products-table");
		const request = $.get("<?= base_url('productscontroller/load_products') ?>");
		request.done((response) => {
			if (response.length > 0) {
				table.empty();
				$.each(response, (i, val) => {
					table.append(`
						<tr>
							<td>${val.id}</td>
							<td>${val.nombre}</td>
							<td>${val.precio}</td>
						</tr>
					`);
				});
			}
		});
		request.fail((jqxhr) => {

		});
	}
</script>
