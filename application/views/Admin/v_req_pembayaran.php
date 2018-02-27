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
				<h1 class="text-center">Request Konfirmasi Pembayaran</h1><br>
				<tr>
					<th>ID</th>
					<th>Kode Reservasi</th>
					<th>ID Customer</th>
					<th>Gambar Bukti</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($show as $req)
				{?>
					<tr>
						<td><?php echo $req->id ?></td>
						<td><?php echo $req->reser_code ?></td>
						<td><?php echo $req->customer_id ?></td>
						<td><img src="<?php echo base_url(''); $req->gambar_bukti ?>"></td>
						<td><?php echo $req->status ?></td>
						<td>
							<button class="btn btn-warning" onclick="ngedit_reser(<?php echo $req->id;?>)">Edit</button>
							<button class="btn btn-danger" onclick="ngapus_reser(<?php echo $req->id;?>)">Hapus</button>
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
	              <label class="control-label col-md-3">ID Customer</label>
	              <div class="col-md-9">
	                <input name="customerid" placeholder="ID Customer" class="form-control" type="text" required="true">
	              </div>
	            </div>
	            <div class="form-group">
	              <label class="control-label col-md-3">Status</label>
	              <div class="col-md-9">
	                <input name="status" placeholder="Status" class="form-control" type="text" required="true">
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

	    	function ngedit_reser(id)
	    	{
	      		save_method = 'update';
	      		$('#form')[0].reset(); // reset form on modals

		      	//Ajax Load data from ajax
		      	$.ajax({
			        url : "<?php echo base_url('admin/admin/edit_konfirm/')?>/" + id,
			        type: "GET",
			        dataType: "JSON",
			        success: function(data)
			        {
			        	$('[name="id"]').val(data.id);
			        	$('[name="reservation_code"]').val(data.reser_code);
			        	$('[name="customerid"]').val(data.customer_id);	
			            $('[name="status"]').val(data.status);

			            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			            $('.modal-title').text('Edit Konfirmasi'); // Set title to Bootstrap modal title

		        },
	
	    		});
	    	}

	    	function ngapus_resers(id)
		    {
		      if(confirm('Anda yakin akan menghapus data konfirmasi reservasi pembayaran dengan id ' + id + '?'))
		      {
		        // ajax delete data from database
		          $.ajax({
		            url : "<?php echo base_url('admin/admin/ngapus_konfirm')?>/"+id,
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
		       		url = "<?php echo base_url('admin/admin/update_konfirm')?>";
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