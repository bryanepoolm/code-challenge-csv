<link rel="stylesheet" href="<?= base_url('public/css/custom.css') ?>">
<div class="row">
	<div class="col-8 mx-auto">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Importar datos</h3>
				<hr>
				<div class="wrapper">
					<form enctype="multipart/form-data" id="form-import-csv">
						<input class="file-input" type="file" name="file-xls" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" hidden>
						<i class="fas fa-cloud-upload-alt"></i>
						<p>Seleccionar archivo CSV</p>
					</form>
					<section class="progress-area"></section>
					<section class="uploaded-area"></section>
				</div>
				<div class="d-grid gap-2">
					<button type="submit" id="btn-upload" class="btn btn-primary" disabled>Importar datos</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var name = "";
	const form = document.querySelector("form"),
		fileInput = document.querySelector(".file-input"),
		progressArea = document.querySelector(".progress-area"),
		uploadedArea = document.querySelector(".uploaded-area");

	form.addEventListener("click", () => {
		fileInput.click();
	});

	fileInput.onchange = ({
		target
	}) => {
		let file = target.files[0];
		if (file) {
			let fileName = file.name;
			if (fileName.length >= 12) {
				let splitName = fileName.split('.');
				fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
			}
			//uploadFile(fileName);
			progressArea.innerHTML = "";
			let uploadedHTML = `<li class="row-custom">
                            <div class="content upload">
                              <i class="fas fa-file-alt"></i>
                              <div class="details">
                                <span class="name">${fileName} • Uploaded</span>
                              </div>
                            </div>
                            <i class="fas fa-check"></i>
                          </li>`;
			uploadedArea.classList.remove("onprogress");
			uploadedArea.innerHTML = uploadedHTML;
			document.getElementById("btn-upload").disabled = false;
			name = fileName;
		}
	}

	$("#form-import-csv").submit(function(e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "<?= base_url('settingscontroller/upload_file') ?>",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: () => {

			},
			success: (response) => {

			},
			error: (jqxhr) => {

			}
		});
	});
</script>
