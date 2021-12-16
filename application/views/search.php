<?php $this->load->view('includes/header');?>

<br />
<br />
<style>
.ml10px{margin-left:10px;}
</style>
<div class="container-fluid">
  <div class="col col-md-12">
    <div class="row">
      <div class="col-sm-3">
        	<div class="row ml10px">
          <form method="post" action="<?php echo site_url();?>">
          			<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">FIND LOCATION</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                    <input id="locLatitude" type="text" class="form-control" name="locLatitude" value="<?php echo $latitude;?>" placeholder="Latitude">
                </div>
                <div class="col-sm-6">
                    <input id="locLongitude" type="text" class="form-control" name="locLongitude" value="<?php echo $longitude;?>" placeholder="Longitude">
                </div>
              </div>
            </div>
            <div class="panel-footer text-center"> <button class="btn btn-sm btn-info btnFind" name="action" value="search">SEARCH</button></div>
          </div>
         		</form>
        </div>
      </div>
      <div class="col-sm-9">
      	<div class="table-responsive">
        	<table class="table table-bordered">
            	<thead>
                	<tr>
                    	<th>ID</th>
                        <th>Name</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Distance</th>
                    </tr>
                </thead>
                <tbody>
                	<?php if($allLocations){?>
						<?php foreach($allLocations as $locInfo){?>
							<tr>
                            	<td><?php echo $locInfo["affiliate_id"];?></td>
                            	<td><?php echo $locInfo["name"];?></td>
                            	<td><?php echo $locInfo["latitude"];?></td>
                            	<td><?php echo $locInfo["longitude"];?></td>
                            	<td><?php echo finddistance($latitude, $longitude, $locInfo["latitude"], $locInfo["longitude"], "K");?> Km</td>
                            </tr>
						<?php }?>
                        
					<?php }else{?>
						<tr>
                        	<td colspan="4">No Data Found</td>
                        </tr>
					<?php }?>
                	
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('includes/footer');?>
