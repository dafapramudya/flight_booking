<!DOCTYPE html>
<html>
<head>
	<title>Lihat Transportasi</title>
</head>
<body>
	<?=$this->session->flashdata('notif')?>
	<div class="table-responsive">
		<table id="table_id" class="table table-bordered table-striped table-hover">
			<thead>
				<h1 class="text-center">Daftar Transportasi</h1><br>
				<button class="btn btn-success" onclick="tambah_transport()"><i class="glyphicon glyphicon-plus"></i> Input Data Transportasi</button><br><br>
				<tr>
					<th>ID</th>
					<th>Kode Transportasi</th>
					<th>Deskripsi</th>
					<th>Jumlah Tempat Duduk</th>
					<th>ID Transportasi Tipe</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($show as $transport)
				{?>
					<tr>
						<td><?php echo $transport->id ?></td>
						<td><?php echo $transport->code ?></td>
						<td><?php echo $transport->description ?></td>
						<td><?php echo $transport->seat_qty ?></td>
						<td><?php echo $transport->transportation_typeid ?></td>
						<td>
							<button class="btn btn-warning" onclick="ngedit_trans(<?php echo $transport->id;?>)">Edit</button>
							<button class="btn btn-danger" onclick="ngapus_trans(<?php echo $transport->id;?>)">Hapus</button>
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
	        <h3 class="modal-title">Transportasi</h3>
	      </div>
	      <div class="modal-body form">
	        <form action="#" id="form" class="form-horizontal">
	          <input type="hidden" value="" name="id"/>
	          <div class="form-body">
	            <div class="form-group">
	              <label class="control-label col-md-3">Kode Transportasi</label>
	              <div class="col-md-9">
	                <input name="transport_code" placeholder="Kode Transportasi" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Deskripsi</label>
	              <div class="col-md-9">
	                <input name="description" placeholder="Deskripsi" class="form-control" type="text" required="true">
	              </div>
	            </div>
				<div class="form-group">
	              <label class="control-label col-md-3">Jumlah Tempat Duduk</label>
	              <div class="col-md-9">
	                <input name="seat_qty" placeholder="Jumlah Tempat Duduk" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">ID Transportasi Tipe</label>
	              <div class="col-md-9">
	                <input name="transportation_typeid" placeholder="ID Transportasi Tipe" class="form-control" type="text" required="true">
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

	    	function tambah_transport()
	    	{
	    		save_method = 'add';
		      	$('#form')[0].reset(); // reset form on modals
		      	$('#modal_form').modal('show'); // show bootstrap modal
		      	$('.modal-title').text('Tambah Pesawat'); // Set Title to Bootstrap modal title
	    	}

	    	function ngedit_trans(id)
	    	{
	      		save_method = 'update';
	      		$('#form')[0].reset(); // reset form on modals

		      	//Ajax Load data from ajax
		      	$.ajax({
			        url : "<?php echo base_url('admin/admin/edit_trans/')?>/" + id,
			        type: "GET",
			        dataType: "JSON",
			        success: function(data)
			        {
			        	$('[name="id"]').val(data.id);
			        	$('[name="transport_code"]').val(data.code);
			        	$('[name="description"]').val(data.description);	
			            $('[name="seat_qty"]').val(data.seat_qty);
			            $('[name="transportation_typeid"]').val(data.transportation_typeid);

			            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			            $('.modal-title').text('Edit Transportasi'); // Set title to Bootstrap modal title

		        },
	
	    		});
	    	}

	    	function ngapus_trans(id)
		    {
		      if(confirm('Anda yakin akan menghapus data pesawat dengan id ' + id + '?'))
		      {
		        // ajax delete data from database
		          $.ajax({
		            url : "<?php echo base_url('admin/admin/ngapus_transport')?>/"+id,
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
		       		url = "<?php echo base_url('admin/admin/update_transport')?>";
		      	}
		      	else if (save_method == 'add') 
		      	{
		      		url = "<?php echo base_url('admin/admin/tambah_transport') ?>"
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