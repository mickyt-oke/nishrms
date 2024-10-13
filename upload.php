<?php require_once 'core/init.php';
		require_once 'core/init2.php';
		session_start();
		if(!(isset($_SESSION["profile"]))) {
			$error[] = "Session Timeout. Please reauthenticate to continue";
			header("Location:index.php?session_expired");
		} else{
			$profile = $_SESSION["profile"];
		}
		?>

<?php if(isset($_POST['upload'])) {
		if($_FILES['csv_file']['name']) {
		$filename = explode("." , $_FILES['csv_file']['name']);
		if(end($filename) == "csv"){
			$handle = fopen($_FILES['csv_file']['tmp_name'], "r");
			while ($data = fgetcsv($handle)) {
				$id = mysqli_real_escape_string($con, $data[0]);
				$rank_sn = mysqli_real_escape_string($con, $data[1]);
				$service_no = mysqli_real_escape_string($con, $data[2]);
				$fullname = mysqli_real_escape_string($con, $data[3]);
				$gender = mysqli_real_escape_string($con, $data[4]);
				$rank = mysqli_real_escape_string($con, $data[5]);
				$grade_level = mysqli_real_escape_string($con, $data[6]);
				$geo_zone = mysqli_real_escape_string($con, $data[7]);
				$state = mysqli_real_escape_string($con, $data[8]);
				$lga = mysqli_real_escape_string($con, $data[9]);
				$dob = mysqli_real_escape_string($con, $data[10]);
				$dofa = mysqli_real_escape_string($con, $data[11]);
				$dopa = mysqli_real_escape_string($con, $data[12]);
				$dor = mysqli_real_escape_string($con, $data[13]);
				$study_field = mysqli_real_escape_string($con, $data[14]);
				$qualification = mysqli_real_escape_string($con, $data[15]);
				$hometown = mysqli_real_escape_string($con, $data[17]);
			$query = "UPDATE profile SET
				rank_sn = '$rank_sn',
				service_no = '$service_no',
				rank = '$rank',
				grade_level = '$grade_level',
				dopa = '$dopa',
				qualification = '$qualification'
				WHERE service_no = '$service_no'
				";
			mysqli_query($con, $query);
			}
			fclose($handle);
			header("location: upload.php");
		} else {
			$message = '<label class="text-danger"> Please select CSV File Only</label>';
		}
	}
		else {
			$message = '<label class="text-danger">Please Select File</label>';
		}
	}
	if(isset($_GET["upload"])) {
		$message = '<label class="text-success">File uploaded successfully</label>';
	}
?>

<?php require_once 'inc/header.php'; ?>
<!-- Main -->
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card shadow">
					<div class="card-header bg-gradient-success">
						<h2 class="mb-0 text-white text-center">UPDATE STAFF NOMINAL ROLL</h2>
					</div>
					<div class="card-body">
						<div class="row">
							<form method="post" enctype="multipart/form-data">
								<div class="mb-3">
									<input type="file" name="csv_file"
										data-file-ext="csv"
										data-file-max-size-kb-per-file="3000"
										data-file-ext-err-msg="Allowed:"
										data-file-size-err-item-msg="File too large!"
										data-file-size-err-total-msg="Total allowed size exceeded!"
										data-file-toast-position="bottom-center"
										data-file-preview-container=".js-file-input-preview-single-container2"
										data-file-preview-img-height="auto"
										data-file-preview-show-info="false"
										data-file-btn-clear="a.js-file-upload-clear2"
										class="form-control">
								</div>

								<div class="js-file-input-preview-single-container2 ms--n6 me--n6 mt-4 hide-empty"></div>

								<div class="js-file-input-container__reveal_example2 position-relative clearfix hide-empty mt-3"></div>
								<div class="mt-3">
									<input type="submit" class="js-file-btn-submit__reveal_example2 hide btn btn-primary" name="upload" value="Upload Files">
										<i class="fi fi-check"></i>
									<a href="#" class="js-input-clear__reveal_example2 hide btn btn-light">
										<i class="fi fi-close"></i>
										Cancel
									</a>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'inc/footer.php'; ?>