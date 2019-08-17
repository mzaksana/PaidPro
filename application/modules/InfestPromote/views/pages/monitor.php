<!-- landing monitor -->
<div id="card" class="row justify-content-center">
	<div class="col-lg-12">
		<div class="card bg-secondary shadow border-0">
			<div class="card-body px-lg-5 py-lg-5 row">
                <div class="col-lg-12">
                    <div class="autocomplete input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                        </div>

                        <input id="search-in" class="form-control"
                            placeholder="HashTag"
                            type="text" autocomplete="off">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="hashtag" class="btn-wrapper text-center">
                        <a id="addTarget" href="#" class="btn btn-neutral btn-icon list-tag" data-toggle="modal" data-target="#modal-default">
                            <span class="btn-inner--text"><i class="fas fa-plus"></i></span>
                        </a>
                        <button class="btn btn-primary btn-icon button-app btn btn-primary mt-4 list-tag" onclick="search()">Search</button>
                    </div>
                </div>
			</div>

		</div>
	</div>
</div>
<!--  table -->
<div id="list" class="row mt-5"
	hidden>
	<div class="col">
		<div class="card bg-default shadow">
			<div class="card-header bg-transparent border-0">
				<h3 class="text-white mb-0">Card tables</h3>
			</div>
			<div class="table-responsive">
				<table class="table align-items-center table-dark table-flush">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Instagram UID</th>
							<th scope="col">Username</th>
							<th scope="col">Status</th>
							<th scope="col">Waktu Posting</th>
							<th scope="col">Link</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- TODO autocomplate add list target-->
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
     aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="card" class="row justify-content-center">
                    <div class="col-lg-12">
                        <div id="hashtag-list" class="btn-wrapper text-center">
				            <?php
				            if(isset($target)){
					            foreach ($target as $line){
						            echo '<a id="target_id-'.$line["_id"].'" class="list-target btn btn-neutral btn-icon list-tag" data-val="0" onclick="updateVal(this)" data-pos="'.$line['_id'].'">';
						            echo '<span class="btn-inner--text">'.$line["name"].'</span>';
						            echo '</a>';
					            }
				            }
				            ?>
                        </div>

                    </div>
                    <div class="col-lg-12 text-center">
                        <button onclick="applyTarget()" type="button" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    autocomplete(document.getElementById("search-in"), hashtag);
</script>