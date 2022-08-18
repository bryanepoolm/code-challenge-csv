<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Vendedores</h4>
				<hr>
				<table class="table table-sm table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Direccion</th>
						</tr>
					</thead>
					<tbody id="sellers-table">
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
	$(document).ready(() => load_sellers());
	const load_sellers = () => {
		let table = $("#sellers-table");
		const request = $.get("<?= base_url('sellerscontroller/load_sellers') ?>");
		request.done((response) => {
			if (response.length > 0) {
				table.empty();
				$.each(response, (i, val) => {
					table.append(`
					<tr>
						<td>${val.id}</td>
						<td>${val.nombre}</td>
						<td>${val.direccion}</td>
					</tr>
				`);
				});
			}
		});
		request.fail((jqxhr) => {

		});
	}
</script>
