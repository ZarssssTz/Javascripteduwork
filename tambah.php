<!DOCTYPE html>
<html>

<head>
    <title>TAMBAH DATA</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
    <script type="text/javascript" src="jquery.validate.pack.js"></script>
    <script>
    $(document).ready(function() {
	$("#alumniForm").validate({
		messages: {
			email: {
				required: "E-mail harus diisi",
				email: "Masukkan E-mail yang valid"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent("td"));
		}
	});
})
</script>
<style type="text/css">
input { 
    padding: 3px; border: 1px solid #999; 
}
input.error, select.error {
     border: 1px solid red;
     }
label.error {
     color:red; margin-left: 10px; 
    }
td { padding: 20px; }
</style>
</head>
<body>
<form action="proses_tambah.php" id="alumniForm"  method="post">
    <div class="container">
    <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="text-center">Tambah Data</h1>
	<table>
			<td>First Name</td>
			<td>
				<input name="first_name" class="required" title="Nama depan Harus Diisi" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>
				<input name="last_name" class="required" title="Nama Belakang Harus diisi" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>
				<input name="email" id="email" class="email required" size="40" type="text" />
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>
				<input name="phone" class="required" title="No Handphone harus diisi" size="40" type="text" />
			</td>
		</tr>
        <tr>
			<td>Address</td>
			<td>
				<input name="address" class="required" title="Alamat harus diisi" size="40" type="text" />
			</td>
		</tr>
        <tr>
		<div class="d-flex justify-content-between mb-3">
                <a href="index.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i> Kembali</a>
                    <input type="submit" name="Submit" value="+ Tambah Data" class="btn btn-primary btn-sm">
                </div>
</tr>
	</table>
    </div>
    </div>
</form>
</body>
</html>