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

<?php require_once 'inc/header.php'; ?>
<!-- Main -->
<div id="main-wrapper">
	<div class="">
		<div class="row">
			<div class="col-lg-12">
				<div class="card shadow">
					<div class="card-header bg-gradient-success">
						<h2 class="mb-0 text-white text-center">AUTOMATED STAFF NOMINAL ROLL</h2>
					</div>
					<div class="card-body">
						<div class="row">
						<form method="post" action="#">
							<div class="table-responsive">
								<?php
								$query = mysqli_query($con, "SELECT * FROM profile ;");
								$x = 1;
								?>
								<table id="example1" class="table table-striped table-bordered w-100 text-nowrap">
									<thead>
										<th class="wd-5p">S/N</th>
										<th class="wd-5p">RANK S/N</th>
										<th class="wd-10p">SERVICE NO</th>
										<th class="wd-15p">FULL NAMES </th>
										<th class="wd-10p">GENDER</th>
										<th class="wd-5p">RANK</th>
										<th class="wd-10p">GRADE LEVEL</th>
										<th class="wd-10p">STATE OF ORIGIN</th>
										<th class="wd-10p">LOCAL GOVT.</th>
										<th class="wd-10p">HOME TOWN</th>
										<th class="wd-10p">DATE OF BIRTH</th>
										<th class="wd-10p">DOFA</th>
										<th class="wd-10p">DOPA</th>
										<th class="wd-10p">QUALIFICATION</th>
										<th class="wd-10p">FIELD OF STUDY</th>
										<th class="wd-10p">GEO-ZONE</th>
										<th class="wd-10p">DOR</th>
										<th class="wd-5p">...</th>
									</thead>

									<tbody>
										<?php
										while ($r = mysqli_fetch_array($query)) {
										?>
											<tr>
												<td><?php echo $r['id']; ?></td>
												<td><?php echo $r['rank_sn']; ?></td>
												<td><?php echo $r['service_no']; ?></td>
												<td><?php echo $r['fullname']; ?></td>
												<td><?php echo $r['gender']; ?></td>
												<td><?php echo $r['rank']; ?></td>
												<td><?php echo $r['grade_level']; ?></td>
												<td><?php echo $r['state']; ?></td>
												<td><?php echo $r['lga']; ?></td>
												<td><?php echo $r['hometown']; ?></td>
												<td><?php echo $r['dob']; ?></td>
												<td><?php echo $r['dofa']; ?></td>
												<td><?php echo $r['dopa']; ?></td>
												<td><?php echo $r['qualification']; ?></td>
												<td><?php echo $r['study_field']; ?></td>
												<td><?php echo $r['geo_zone']; ?></td>
												<td><?php echo $r['dor']; ?></td>
												<td><input type="checkbox" class="form-check-input form-check-input-primary" name="selectid" value=<?php echo $r['id']; ?> /></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
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