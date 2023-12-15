<?php echo !defined("ADMIN") ? die(	go(ADMIN_URL.'index.php?sayfa=404')) : null;?>

<div class="content-header row">
</div>
<div class="content-body">
	<!-- Dashboard Analytics Start -->
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-left mb-0">Site Analiz</h2>
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Anasayfa</a>
								</li>
								<li class="breadcrumb-item active">Site Analiz
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="content-body">
			<!-- Statistics card section start -->
			<section id="statistics-card">
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-12">
						<div class="card">
							<div class="card-header d-flex flex-column align-items-start pb-0" style="margin-bottom: 25px;">
								<div class="avatar bg-rgba-primary p-50 m-0">
									<div class="avatar-content">
										<i class="feather icon-users text-primary font-medium-5"></i>
									</div>
									</div><?php
									$sorgu = $db->prepare("SELECT COUNT(*) FROM iletisim");
									$sorgu->execute();
									$say = $sorgu->fetchColumn();

									?>
									<h2 class="text-bold-700 mt-1"><?php echo $say;?></h2>
									<p class="mb-0">Toplam Mesaj Sayısı</p>
								</div>

							</div>
						</div>

						<div class="col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header d-flex flex-column align-items-start pb-0" style="margin-bottom: 25px;">
									<div class="avatar bg-rgba-danger p-50 m-0">
										<div class="avatar-content">
											<i class="fa fa-pencil-square-o text-danger font-medium-5"></i>
										</div>
									</div>
									<?php
									$sorguM = $db->prepare("SELECT COUNT(*) FROM iletisim WHERE iletisim_durum=0");
									$sorguM->execute();
									$sayO = $sorguM->fetchColumn();

									?>
									<h2 class="text-bold-700 mt-1"><?php echo $sayO;?> </h2>
									<p class="mb-0">Cevaplanmayan Mesaj Sayısı</p>
								</div>

							</div>
						</div>

						<?php
						$sorguMK = $db->prepare("SELECT COUNT(*) FROM iletisim WHERE iletisim_durum=1");
						$sorguMK->execute();
						$sayO1 = $sorguMK->fetchColumn();

						?>
						<div class="col-lg-4 col-sm-6 col-12">
							<div class="card">
								<div class="card-header d-flex flex-column align-items-start pb-0" style="margin-bottom: 25px;">
									<div class="avatar bg-rgba-warning p-50 m-0">
										<div class="avatar-content">
											<i class="fa fa-book text-warning font-medium-5"></i>
										</div>
									</div>
									<h2 class="text-bold-700 mt-1"><?php echo $sayO1;?> </h2>
									<p class="mb-0">Cevaplanan Mesaj Sayısı</p>
								</div>

							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="mb-0">Son 10 Gelen İletiler</h4>
								</div>
								<div class="card-content">
									<div class="table-responsive mt-1">
										<table class="table table-hover-animation mb-0">
											<thead>
												<tr><th></th>
													<th>İD</th>

													<th>Gönderen</th>
													<th>E-posta</th>
													<th>Telefon</th>
													<th>Mesajın Konusu</th>
													<th>Gönderim Tarihi</th>
													<th>Durum</th>
													<th>İşlemler</th>
												</tr>
											</thead>
											<tbody>


												<?php
												$kquery = $db->query("SELECT * FROM iletisim  ORDER BY iletisim_id DESC LIMIT 10 ");
												if($kquery->rowCount()){
													foreach($kquery as $kRow){          

														?>
														<tr>
															<td></td>
															<td><?php echo $kRow["iletisim_id"];?></td>


															<td><?php echo $kRow["iletisim_isim"];?></td>
															<td><?php echo $kRow["iletisim_eposta"];?></td>
															<td><?php echo $kRow["iletisim_tel"];?></td>
															<td><?php echo $kRow["iletisim_konu"];?></td>
															<td><?php echo tarih($kRow["iletisim_tarih"]);?></td>

															<td>    <?php
															if($kRow["iletisim_durum"]==1){ ?>
																<div class="chip chip-success">
																	<div class="chip-body">
																		<div class="chip-text">Okundu</div>
																	</div>
																	</div> <?php }else {?>
																		<div class="chip chip-danger">
																			<div class="chip-body">
																				<div class="chip-text">Okunmadı</div>
																			</div>
																		</div>
																	<?php }?>
																</td>
																<td > <div class="dropdown dropright">

																	<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		İşlemler
																	</button>
																	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

																		<?php
																		if($kRow["iletisim_durum"]==1){ ?>
																			<a class="dropdown-item" href="index.php?sayfa=mesaj_oku&id=<?php echo $kRow["iletisim_id"];?>">Görüntüle / Oku</a>
																		<?php }else {?>
																			<a class="dropdown-item" href="index.php?sayfa=mesaj_cevap&id=<?php echo $kRow["iletisim_id"];?>">Görüntüle / Oku</a>
																		<?php }?>

                                                <!--<a class="dropdown-item" href="javascript:;" onclick="durumDegis(<?php echo $kRow["iletisim_id"];?>);">
                                                    <?php if($kRow["iletisim_durum"]==1){echo  "Okunmadı Yap";}else{echo "Okundu Yap";}?>
                                                </a>-->
                                                <a class="dropdown-item"  onclick="TekSil(<?php echo $kRow["iletisim_id"];?>);" >Mesajı Sil</a>
                                            </div>
                                        </div>   


                                    </td>
                                </tr>

                            <?php  }} ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- // Statistics Card section end-->

</div>
</div>
</div>
<!-- Dashboard Analytics end -->


<script>
	$(document).ready(function() {
		$('.datatable').dataTable({
			"bSort":false
		});
	});
	function TekSil(catId){
		$.post('ajax.php?p=mesajsil', {id: catId}, function (data) {
			if(data=="basarili"){
				sweetAlert({
					title	: "Başarılı",
					text 	: "Mesaj başarılı bir şekilde silinmiştir.",
					type	: "success"
				},
				function(){
					window.location.reload(true);
				});
				return false;
			}else if(data=="basarisiz"){
				swal("Başarısız","Silinemedi","error");
				return false;
			}
		});
	}


</script>
