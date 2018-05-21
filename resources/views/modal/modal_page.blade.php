
		 <div class="row">
			<div class="cards mb-6 box-shadow square">
                <img class="card-img-top"  src="<?php echo asset('images/'.$id.'.jpg'); ?>" alt="Card image cap">
                
              </div>
			<div class="col-md-6">
				<div class="card-body">
                  <h4 class="card-text"><?php echo $productInfo->name; ?></h4>
				  <p class="card-text">Price : <strong>R <?php echo $productInfo->price; ?></strong></p>
				   <small class="card-text"><strong>Description:</strong><br><?php echo $productInfo->description; ?></small>
                  <div class="d-flex justify-content-between align-items-center">
					
                   
                  </div>
                </div>
			</div> 			
		 </div>
		 <br><br><br>
		 <div class="row">
			<div class="col-md-12">
				<div style="display:none" class=" errors alert alert-danger">Invalid email<div>
			</div>
		 </div>
		 <div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped table-sm">
					  <tbody>
						<tr>
						  <td>Highest bid</td>
						  <td>Avarage bid</td>
						  <td>
						 <?php if(!is_null($bidSubmitted) && !$bidSubmitted ||  ! $isLoggedIn){ ?>
							  &nbsp;
						 <?php }else{ ?>
							  My bid
						 <?php } ?>
						  </td>
						</tr>
						<tr>
						  <td><strong class="d-inline-block mb-2 text-primary">R <?php echo $highestBid; ?></strong></td>
						  <td><strong class="d-inline-block mb-2 text-primary">R <?php echo $avarageBid; ?><br></strong></td>
						  <td>
						 <?php if(! $bidSubmitted ||  ! $isLoggedIn){ ?>
							  <button class="btn-sm btn btn-block btn-success bid-now">Bid now</button>
						 <?php }else{ ?>
							  <strong class="d-inline-block mb-2 text-primary">R <?php echo $yourBid; ?></strong>
						 <?php } ?>
						  </td>
						</tr>
					  </tbody>
					</table>
				</div> 
			</div> 
		 </div> 
		 <form id="bid-now"></form>
		