<?php foreach ($hotel as $data) {
						?>

						<div class="col-lg-4">
							
							<div class="single-destinations">
								<div class="thumb">
									<img src="<?php echo base_url()."assets_upload/hotel_gambar/"; ?><?php echo $data['gambar_hotel']; ?>" alt="">
								</div>
								<div class="details">
									<h4><?php echo $data['nama_hotel']; ?></h4>
									<p>
										<?php echo $data['daerah_hotel']; ?>
									</p>
									<ul class="package-list">
										<?php 
										$data2 = $this->Hotel_model->ambil_semua_kamar($data['id_hotel']); 
										$data3 = $this->Hotel_model->ambil_semua_kamar($data['id_hotel']);?>

										<?php foreach ($data2 as $data2) {?>
											<li class="d-flex justify-content-between align-items-center">



												<span><?php echo $data2['nama_tkamar']; ?></span>
												<span><?php echo $data2['harga_tkamar']; ?><br></span>

											</li>
										<?php } ?>		
									</ul>
								</div>
							</div>
						</div>			
					<?php } ?>
					<script type="text/javascript">
	$(document).ready(function(){
		$('#kategori').change(function(){
			var id=$(this).val();
			$.ajax({
				url : "<?php echo base_url();?>Hotel/index_subdaerah",
				method : "POST",
				data : {id: id},
				async : false,
		        dataType : 'json',
				success: function(data){
					var html = '';
		            var i;
		            if (id == "semua") {
		            	setTimeout(function(){// wait for 5 secs(2)
           location.reload();
		        }, 10);
		    }else{
		        	for(i=0; i<data.length; i++){
		        		var value = data[i].id_hotel;
		        		document.cookie = "id"+i+"="+data[i].id_hotel;
		        		document.cookie = "long="+data.length;
		                html += 
					"<div class = col-lg-4>"+
					"<div class='single-destinations'>"+
					"<div class=thumb>"+
					"<img src=<?php echo base_url()."assets_upload/hotel_gambar/"; ?>"+data[i].gambar_hotel+">"+
					"</div>"+
					"<div class=details>"+
					"<h4>"+data[i].nama_hotel+"</h4>"+
					"<p>"+data[i].daerah_hotel+"</p>"+
					"<ul class=package-list>"+
					"<?php
					echo $_COOKIE["long"];
					echo ",";
					
					$x++;
					echo $_SESSION["id"];
					$long = $_COOKIE["long"];
					$data2 = $this->Hotel_model->ambil_semua_kamar($_COOKIE["id0"]); 
					$data3 = $this->Hotel_model->ambil_semua_kamar($_COOKIE["id0"]);?>"+
					"<?php foreach ($data2 as $data2) {?>"+
					"<li class='d-flex justify-content-between align-items-center'>"+
					"<span><?php echo $data2['nama_tkamar']; ?></span>"+
					"<span><?php echo $data2['harga_tkamar']; ?><br></span>"+
					"</li>"+
					"<?php } ?>"+
					"</ul>"+
					"</div>"+
					"</div>"+
					"</div>";
		            }
		        }
		            $('.subkategori').html(html);
		        
					
				}
			});
		});
	});
</script>