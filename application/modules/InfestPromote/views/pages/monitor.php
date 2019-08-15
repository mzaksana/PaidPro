<!-- landing monitor -->
<div id="card" class="row justify-content-center">
	<div class="col-lg-12">
		<div class="card bg-secondary shadow border-0">
			
			<div class="card-body px-lg-5 py-lg-5 row">
					<div class="col-lg-10">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-hashtag"></i></span>
							</div>
							<input id="search-in" class="form-control"
								placeholder="HashTag"
								type="text">
						</div>
					</div>
					<div class="button-app-container col-sm-2 input-group mb-3">
						<button type="button" class="button-app btn btn-primary mt-4" onclick="search()">Search</button>
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