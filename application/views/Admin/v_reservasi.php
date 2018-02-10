<!DOCTYPE html>
<html>
<head>
	<title>Lihat Reservasi</title>
</head>
<body>
	<?=$this->session->flashdata('notif')?>
	<div class="table-responsive">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<h1 class="text-center">Daftar Reservasi</h1><br>
				<button class="btn btn-success" onclick="tambah_reser()"><i class="glyphicon glyphicon-plus"></i> Input Data Reservasi</button><br><br>
				<tr>
					<th>ID</th>
					<th>Kode Reservasi</th>
					<th>Reservasi At</th>
					<th>Tanggal Reservasi</th>
					<th>ID Customer</th>
					<th>Kode Tempat Duduk</th>
					<th>ID Rute</th>
					<th>Depart At</th>
					<th>Harga</th>
					<th>ID User</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($show as $reservasi)
				{?>
					<tr>
						<td><?php echo $reservasi->id ?></td>
						<td><?php echo $reservasi->reservation_code ?></td>
						<td><?php echo $reservasi->reservation_at ?></td>
						<td><?php echo $reservasi->reservation_date ?></td>
						<td><?php echo $reservasi->customerid ?></td>
						<td><?php echo $reservasi->seat_code ?></td>
						<td><?php echo $reservasi->ruteid ?></td>
						<td><?php echo $reservasi->depart_at ?></td>
						<td><?php echo $reservasi->price ?></td>
						<td><?php echo $reservasi->userid ?></td>
						<td>
							<button class="btn btn-warning" onclick="ngedit_reser(<?php echo $reservasi->id;?>)">Edit</button>
							<button class="btn btn-danger" onclick="ngapus_reser(<?php echo $reservasi->id;?>)">Hapus</button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
<!-- Bootstrap modal Edit and Add -->
	  <div class="modal fade" id="modal_form" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h3 class="modal-title">Reservasi</h3>
	      </div>
	      <div class="modal-body form">
	        <form action="#" id="form" class="form-horizontal">
	          <input type="hidden" value="" name="id"/>
	          <div class="form-body">
	            <div class="form-group">
	              <label class="control-label col-md-3">Kode Reservasi</label>
	              <div class="col-md-9">
	                <input name="reservation_code" placeholder="Kode Reservasi" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Reservasi At</label>
	              <div class="col-md-9">
	                <input name="reservation_at" placeholder="Reservasi At" class="form-control" type="text" required="true">
	              </div>
	            </div>
				<div class="form-group">
	              <label class="control-label col-md-3">Tanggal Reservasi</label>
	              <div class="col-md-9">
	                <input name="reservation_date" placeholder="Tanggal Reservasi" class="form-control" type="date" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">ID Customer</label>
	              <div class="col-md-9">
	                <input name="customerid" placeholder="ID Customer" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Kode Tempat Duduk</label>
	              <div class="col-md-9">
	                <input name="seat_code" placeholder="Kode Tempat Duduk" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">ID Rute</label>
	              <div class="col-md-9">
	                <input name="ruteid" placeholder="ID Rute" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Depart At</label>
	              <div class="col-md-9">
	                <input name="depart_at" placeholder="Depart At" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Harga</label>
	              <div class="col-md-9">
	                <input name="price" placeholder="Harga" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">ID User</label>
	              <div class="col-md-9">
	                <input name="userid" placeholder="ID User" class="form-control" type="text" required="true">
	              </div>
	            </div>
	          </div>
	        </form>
	          </div>
	          <div class="modal-footer">
	            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
	            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
	          </div>
	        </div><!-- /.modal-content -->
	      </div><!-- /.modal-dialog -->
	    </div><!-- /.modal -->
	  <!-- End Bootstrap modal -->



		<script type="text/javascript">
	  		$(document).ready( function () {
	     	$('#table_id').DataTable();
	  		} );

	    	var save_method; //for save method string
	    	var table;

	    	function tambah_reser()
	    	{
	    		save_method = 'add';
		      	$('#form')[0].reset(); // reset form on modals
		      	$('#modal_form').modal('show'); // show bootstrap modal
		      	$('.modal-title').text('Tambah Reservasi'); // Set Title to Bootstrap modal title
	    	}

	    	function ngedit_reser(id)
	    	{
	      		save_method = 'update';
	      		$('#form')[0].reset(); // reset form on modals

		      	//Ajax Load data from ajax
		      	$.ajax({
			        url : "<?php echo base_url('admin/admin/edit_reser/')?>/" + id,
			        type: "GET",
			        dataType: "JSON",
			        success: function(data)
			        {
			        	$('[name="id"]').val(data.id);
			        	$('[name="reservation_code"]').val(data.reservation_code);
			        	$('[name="reservation_at"]').val(data.reservation_at);	
			            $('[name="reservation_date"]').val(data.reservation_date);
			            $('[name="customerid"]').val(data.customerid);
			            $('[name="seat_code"]').val(data.seat_code);
			            $('[name="ruteid"]').val(data.ruteid);
			            $('[name="depart_at"]').val(data.depart_at);
			            $('[name="price"]').val(data.price);
			            $('[name="userid"]').val(data.userid);

			            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			            $('.modal-title').text('Edit Reservasi'); // Set title to Bootstrap modal title

		        },
	
	    		});
	    	}

	    	function ngapus_resers(id)
		    {
		      if(confirm('Anda yakin akan menghapus data reservasi dengan id ' + id + '?'))
		      {
		        // ajax delete data from database
		          $.ajax({
		            url : "<?php echo base_url('admin/admin/ngapus_reser')?>/"+id,
		            type: "POST",
		            dataType: "JSON",
		            success: function(data)
		            {
		               location.reload();
		            },
		            error: function (jqXHR, textStatus, errorThrown)
		            {
		                alert('Error pada saat menghapus data!');
		            }
		        });

		      }
		    }

		    function save()
		    {
		    	var url;
		      	if (save_method == 'update')
		      	{
		       		url = "<?php echo base_url('admin/admin/update_reser')?>";
		      	}
		      	else if (save_method == 'add') 
		      	{
		      		url = "<?php echo base_url('admin/admin/tambah_reser') ?>"
		      	}

		       // ajax adding data to database
		          $.ajax({
		            url : url,
		            type: "POST",
		            data: $('#form').serialize(),
		            dataType: "JSON",
		            success: function(data)
		            {
		               //if success close modal and reload ajax table
		               $('#modal_form').modal('hide');
		              location.reload();// for reload a page
		            },
		            error: function (jqXHR, textStatus, errorThrown)
		            {
		                alert('Terjadi kesalahan!');
		            }
		        });
		    }
		</script>
</html>