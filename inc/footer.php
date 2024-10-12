<!-- Footer -->
<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy;2024 NIGERIA IMMIGRATION SERVICE</li><li>All Rights are Reserved.</li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
	
	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Custom scroll bar Js-->
	<script src="assets/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js"></script>

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<!-- Ansta JS -->
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/dashboard-sales.js"></script>
    <!-- Data tables -->
	<script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
    <!-- Date Picker-->
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<!-- Echarts JS -->
	<script src="assets/plugins/chart-echarts/echarts.js"></script>
    <!-- Form Validation -->
    <script src="assets/js/validate.js"></script>
		<!-- peitychart -->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
	<script src="assets/plugins/peitychart/peitychart.init.js"></script>
	<!-- Vector Plugin -->
	<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/gdp-data.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
	<script src="assets/js/dashboard2map.js"></script>
    <!-- file uploads js -->
    <script src="assets/plugins/fileuploads/js/dropify.min.js"></script>
    <!-- Optional JS -->
	<script src="assets/plugins/chart.js/dist/Chart.min.js"></script>
	<script src="assets/plugins/chart.js/dist/Chart.extension.js"></script>
    <script>
		$('.dropify').dropify({
			messages: {
				'default': 'Drag and drop a file here or click',
				'replace': 'Drag and drop or click to replace',
				'remove': 'Remove',
				'error': 'Ooops, something wrong appended.'
			},
			error: {
				'fileSize': 'The file size is too big (2M max).'
			}
		});
	</script>

    <script>
		$('.datepicker').datepicker({
		 showOtherMonths: true,
		 selectOtherMonths: true
	   });
	</script>
<script>
		$(function(e) {
			$('#example').DataTable();

			var table = $('#example1').DataTable();
			$('').click( function() {
				var data = table.$('input, select').serialize();
				alert(
					"The following data would have been submitted to the server: \n\n"+
					data.substr( 0, 120 )+'...'
				);
				return false;
			});
			$('#example2').DataTable( {
				"scrollY":        "200px",
				"scrollCollapse": true,
				"paging":         false
			});
		} );
        </script>
		<!-- upload modal body 
		<div class="modal fade" id="openbox" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCenteredLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalCenteredLabel">Nominal File Upload</h5>

				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="POST" action="" id="form" onsubmit="return validateForm()">
					<label class="btn btn-primary cursor-pointer position-relative">

						<input multiple type="file" name="file_input_name[]"
							data-file-ext="mp3, jpg, png, gif, csv"
							data-file-max-size-kb-per-file="0"
							data-file-max-size-kb-total="0"
							data-file-max-total-files="5"
							data-file-ext-err-msg="Allowed:"
							data-file-exist-err-msg="File already exists:"
							data-file-size-err-item-msg="File too large!"
							data-file-size-err-total-msg="Total allowed size exceeded!"
							data-file-size-err-max-msg="Maximum allowed files:"
							data-file-toast-position="bottom-center"
							data-file-preview-container=".js-file-input-container__reveal_example2"
							data-file-preview-img-height="60"
							data-file-preview-show-info="true"
							data-file-btn-clear="a.js-input-clear__reveal_example2"
							data-file-btn-submit="button.js-file-btn-submit__reveal_example2"
							data-file-preview-img-cover="false"
							data-file-preview-list-type="list"
							class="custom-file-input absolute-full">

						<i class="fi fi-arrow-upload"></i>
						<span>Select Files</span>

					</label>

					<div class="js-file-input-container__reveal_example2 position-relative clearfix hide-empty mt-3"></div>
					<div class="mt-3">
						<button type="submit" class="js-file-btn-submit__reveal_example2 hide btn btn-primary">
							<i class="fi fi-check"></i>
							Upload Files
						</button>


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
	-->
	<script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/vendor_bundle.min.js"></script>

    <!-- this documentation only -->
    <script src="assets/js/theme.docs.js"></script>
    <div id="page_js_files">

      <script>
        docAnchor(); docNavSelected();
      </script>
	</body>
</html>