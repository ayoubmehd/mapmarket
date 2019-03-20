<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<
<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
	<div class="container">
		<div class="billing_details">
			<form action="<?php echo base_url('index.php/Listing/Save') ?>" method="post" id="addListing">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 mb-3 pb-3 border-bottom">
						<h2>Billing Details</h2>
						<h3>Generale</h3>
						<div class="form-group">
							<label for="type" class="label">Catégorie :</label>
							<select name="category" id="type" class="from-control">
								<option value="" desabled selected>Choisire la catégorie</option>
							</select>
						</div>
						<div class="form-group">
							<label class="label">Tu vollez :</label>
							<div class="form-group">
								<input type="radio" name="bien" id="bien1">
								<label for="bien1">Vendre</label>
							</div>
							<div class="form-group">
								<input type="radio" name="bien" id="bien2">
								<label for="bien2">Louer</label>
							</div>
						</div>
						<div class="form-group">
							<label for="select-beast">Ville :</label>
							<div class="select-beast" name="ville" id="select-beast">
							</div>
						</div>
						<div class="form-group">
							<label for="adress" class="label">Adress de la :</label>
							<input type="text" name="adress" id="adress" class="form-control" />
						</div>
						<div id="map" class="mapBox"></div>
						<input type="hidden" id="lat" name="lat">
						<input type="hidden" id="lng" name="lng">
					</div>
					<div class="col-md-8 mb-3 pb-3 border-bottom">


						<!-- =================== --->
						<h3>Détails</h3>
						<div class="form-group">
							<label class="col-form-label">Titre du produit :</label>
							<input type="text" class="form-control" id="first" name="title">
						</div>
						<div class="form-group">
							<label class="col-form-label">Désciprion du produit :</label>
							<textarea type="text" class="form-control" id="disc" name="disciption"></textarea>
						</div>
						<div class="from-group">
							<label for="prix">Prix :</label>
							<input type="text" id="prix" name="prix" class="form-control type-float" />
						</div>

					</div>
					<div class="col-md-8 mb-3">

						<!-- Images Galery --->
						<div class="mb-3 section-top-border">
							<h3>Image Gallery</h3>
							<div id="gallery1" class="row gallery-item">
								<div class="input-group mt-4 col-md-4 d-flex ">
									<div class="custom-file border d-flex justify-content-center hover">
										<input multiple title="Choisire une image" name="images[]" data-action="<?php echo base_url('index.php/Listing/SaveImage') ?>" type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon01">
										<div class="row justify-content-center">
											<i class=" fa fa-plus add-img"></i>							
											<div class="col-md-12 input-group-append d-flex justify-content-center">
												<label class="" for="inputGroupFile04">Choisire Image</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col form-group">
							<button class="btn btn-default" type="submit" form="addListing">Lister</button>
						</div>

					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!--================End Checkout Area =================-->
