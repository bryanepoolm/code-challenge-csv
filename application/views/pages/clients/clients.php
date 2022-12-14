<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Clientes</h4>
				<hr>
				<table class="table table-sm table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody id="clients-table">
						<tr>
							<td colspan="2">
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
	$(document).ready(() => load_clients());
	const load_clients = () => {
		let table = $("#clients-table");
		const request = $.get("<?= base_url('clientscontroller/load_clients') ?>");
		request.done((response) => {
			if (response.length > 0) {
				table.empty();
				$.each(response, (i, val) => {
					table.append(`
					<tr>
						<td>${val.id}</td>
						<td>${val.nombre}</td>
					</tr>
				`);
				});
			}
		});
		request.fail((jqxhr) => {

		});
	}
</script>
