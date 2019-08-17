<div id="target" class="row">
    <div class="col-xl-3 col-lg-6 list-target">
        <div class="card card-stats mb-4 mb-xl-0 shadow card-target">
            <div class="btn card-body" data-toggle="modal" data-target="#modal-default">
	            <div class="middle-div">
		            <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow">
			            <i class="fa fa-plus-circle"></i>
		            </div>
	            </div>
	        </div>
        </div>
    </div>

<?php if (!empty($target)) {
	foreach ($target as $line) {?>
        <div class="col-xl-3 col-lg-6 list-target">
            <div class="card card-stats mb-4 mb-xl-0 shadow card-target" data-pos="<?php echo $line["_id"]?>" onclick="openTarget(this)">
                <div class="btn card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0"><?php echo $line["name"]?></h5>
                            <span class="h2 font-weight-bold mb-0">350,897</span>
                        </div>
                        <div class="col-auto middle-h">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Added <?php echo date("Y-m-d",$line['time'])?></span>
                    </p>
                </div>
            </div>
        </div>

    <?php
        // end foreach
    }
} ?>

<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
     aria-hidden="true">
	<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="col-md-12">
					<div class="form-group">
						<input type="email" class="form-control" id="newTarget" placeholder="Group Name">
					</div>
				</div>
				<div class="col-md-12">
					<button type="button" class="btn btn-primary" onclick="addTarget(this)">Add</button>
					<button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>