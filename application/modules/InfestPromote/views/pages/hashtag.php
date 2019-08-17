<div id="card" class="row justify-content-center">
    <div class="col-lg-12">
        <div id="hashtag" class="btn-wrapper text-center">

            <a id="add" href="#"
               class="btn btn-neutral btn-icon list-tag" data-toggle="modal" data-target="#modal-default">
                <span class="btn-inner--text"><i class="fas fa-plus"></i></span>
            </a>
            <?php
            if(isset($hashtag)){
                foreach ($hashtag as $tag){
                    echo '<a href="#" class="btn btn-neutral btn-icon list-tag">';
	                echo '<span class="btn-inner--text">'.$tag["name"].'</span>';
                    echo '</a>';
                }
            }
            ?>
            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
                 aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="newHashtag" placeholder="informatics_festival_2019">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="addHashtag(this)">Add</button>
                            <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

