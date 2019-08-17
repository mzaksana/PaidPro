<div id="targetList" class="row" data-pos="<?php if (!empty($target['_id'])) {
	echo $target['_id'];
} ?>">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">User Target</h3>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">UserUID</th>
                        <th scope="col">Stats</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $tmp=0;if(isset($target['user'])){foreach ($target['user'] as $line){?>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <!--								<a href="#" class="avatar rounded-circle mr-3">-->
                                    <!--									<img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">-->
                                    <!--								</a>-->
                                    <div class="media-body">
                                        <span class="mb-0 text-sm"><?php if(isset($target['data'][$tmp]['username'])){
		                                        echo $target['data'][$tmp]['username'];}else{echo $line;}?></span>

                                    </div>
                                </div>
                            </th>
                            <td>
                                <?php if (isset($target['data'][$tmp]['name'])){echo $target['data'][$tmp]['name'];}else{
	                                echo "-";}?>
                            </td>
                            <td>
                                <?php if(isset($target['data'][$tmp]['uid'])){
                                    echo $target['data'][$tmp]['uid'];
                                }else{?>
                              <span class="badge badge-dot mr-4">
                                    <i class="bg-warning"></i> pending
                              </span>
                                <?php }?>
                            </td>
                            <td>
	                            <?php if(isset($target['data'][$tmp]['stats'])) {
		                            if ($target['data'][$tmp]['stats'] == "private") {
			                            echo '<span class="badge badge-dot mr-4">';
			                            echo '<i class="bg-warning"></i> private';
			                            echo '</span>';
		                            } else {
			                            echo '<span class="badge badge-dot mr-4">';
			                            echo '<i class="bg-primary"></i> open';
			                            echo '</span>';
		                            }
	                            }else {
		                            echo '<span class="badge badge-dot mr-4">';
		                            echo '<i class="bg-default"></i> pending';
		                            echo '</span>';
	                            }?>
                            </td>
                        </tr>
                    <?php $tmp++;}}?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer py-4">
                <nav aria-label="...">
                    <button class="btn btn-icon btn-2 btn-primary" type="button" data-toggle="modal" data-target="#modal-default">
                        <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                    </button>
                    <button class="btn btn-icon btn-2 btn-primary" type="button" onclick="scrap()">
                        <span class="btn-inner--icon"><i class="fa fa-atom"></i></span>
                    </button>
                </nav>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
         aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="newUserTarget" class="target-add form-control" rows='1' placeholder='UserOne,User.Two User_3' onkeydown="autosize(this)"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" onclick="addUserTarget()">Add</button>
                        <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>