	<!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
	
    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
	
	<!-- Datatables -->
	<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- moment.js -->
	<script src="vendors/moment/moment.js"></script>
	
	<!-- DateRangePicker -->
	<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- Select2 -->
	<script src="vendors/select2/dist/js/select2.min.js"></script>
	
	<?php
	/* if (((isset($_GET['p'])) and ($_GET['p'] == 'dashboard' or $_GET['p'] == 'sewa_data')) or (!isset($_GET['p']))) {
		include_once 'objects/tb_admin.php';
		include_once 'objects/tb_buku.php';

		$admin = new Admin($db);
		$buku = new Buku($db);

		$admin->id_admin = $_SESSION['id_admin'];

		$data_adm = $admin->detailAdmin();
		
		$foto = $admin->img_admin;
		$dir = 'assets/img/admin/'. $foto .'';
		
		if ((!empty($foto)) and (file_exists($dir))) {
			$foto_admin = 'assets/img/admin/'. $foto;
		} else {
			$foto_admin = 'assets/img/ui-sam.jpg';
		}
		
		$buku->status_sewa = 'telat';
		$num = $buku->dataBukuSewa();
		$j_telat = $num->rowCount();
		?>
		
		<script type="text/javascript">
			$(document).ready(function () {
			var unique_id = $.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'Notifikasi Persewaan Buku!',
				// (string | mandatory) the text inside the notification
				text: 'Data Persewaan Buku yang belum dikembalikan adalah <font style="color:#ffd777"><?php echo $j_telat; ?></font> Buku',
				// (string | optional) the image to display on the left
				image: '<?php echo $foto_admin; ?>',
				// (bool | optional) if you want it to fade out on its own or just sit there
				sticky: true,
				// (int | optional) the time you want it to be alive for before fading out
				time: '',
				// (string | optional) the class name you want to apply to that specific message
				class_name: 'my-sticky-class'
			});

			return false;
			});
		</script>
	
	<?php
	} */
	?>
	
	<!-- DataTables -->
	<script>
		$('#dataTable').dataTable({
			"ordering" : false,
			"language" : {
				"lengthMenu" : "Tampilkan _MENU_ data",
				"zeroRecords" : "Maaf tidak ada data yang ditampilkan",
				"info" : "Menampilkan halaman _PAGE_ dari _PAGES_ halaman",
				"infoEmpty" : "Tidak ada data yang ditampilkan",
				"search" : "Cari :",
				"paginate": {
					"first":      '<span class="glyphicon glyphicon-fast-backward"></span>',
					"last":       '<span class="glyphicon glyphicon-fast-forward"></span>',
					"next":       '<span class="glyphicon glyphicon-forward"></span>',
					"previous":   '<span class="glyphicon glyphicon-backward"></span>'
				}
			}
		});
		var table = $('#dataTableServer').DataTable({
			"processing": true,
			"serverSide": true,
			"ordering" : false,
			"language" : {
				"lengthMenu" : "Tampilkan _MENU_ data",
				"zeroRecords" : "Maaf tidak ada data yang ditampilkan",
				"info" : "Menampilkan halaman _PAGE_ dari _PAGES_ halaman",
				"infoEmpty" : "Tidak ada data yang ditampilkan",
				"search" : "Cari :",
				"paginate": {
					"first":      '<span class="glyphicon glyphicon-fast-backward"></span>',
					"last":       '<span class="glyphicon glyphicon-fast-forward"></span>',
					"next":       '<span class="glyphicon glyphicon-forward"></span>',
					"previous":   '<span class="glyphicon glyphicon-backward"></span>'
				}
			},
			"ajax": "config/ssp_script.php",
			"columnDefs": [{
				"targets": -1,
				"data": null,
				"defaultContent": '<div class="btn-group"> \
										<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"> \
											Opsi <span class="caret"></span> \
										</button> \
										<ul class="dropdown-menu" role="menu"> \
											<li><a id="detail" href="#"><i class="fa fa-book"></i> Detail</a></li> \
											<li class="divider"></li> \
											<li><a id="edit" href="#"><i class="fa fa-pencil"></i> Edit</a></li> \
											<li><a id="delete" href="#"><i class="fa fa-times"></i> Delete</a></li> \
										</ul> \
									</div>'
			}, {
				"targets": 6,
				"data": null,
				"defaultContent": '<img src="assets/img/no-cover.jpg" width="100px" height="150px">'
			}]
		});
		
		$('#dataTableServer tbody').on( 'click', '#detail', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "?p=buku_data&v=buku_detail&id="+ data[0];
		});
		$('#dataTableServer tbody').on( 'click', '#edit', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "?p=buku_data&v=buku_edit&id="+ data[0];
		});
		$('#dataTableServer tbody').on( 'click', '#delete', function () {
			var data = table.row( $(this).parents('tr') ).data();
			window.location.href = "?p=buku_data&v=buku_delete&id="+ data[0];
		});
	</script>
	<!-- DataTables -->
	
	<!-- DateRangePicker -->
	<script type="text/javascript">
		$(function() {
			$('#dateRangePicker').daterangepicker({
				locale: {
				  format: 'DD-MM-YYYY'
				},
				singleDatePicker: true,
				showDropdowns: true
			});
			
			//Memanggil fungsi dari select2
			$(".select2").select2();
		});

	</script>
	<!-- DateRangePicker -->

	</body>
</html>