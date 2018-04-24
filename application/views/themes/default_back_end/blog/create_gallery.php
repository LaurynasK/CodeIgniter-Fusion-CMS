<div id="page-wrapper">

    <div class="container-fluid">
        <div class="col-lg-12">
                <div class="form-group">
                    <label>Gallery Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="Gallery Name" placeholder="Gallery Name" 
                        value='<?= isset($gallery['name']) ? $gallery['name'] : "" ?>'>
                        
                    <input type="hidden" name="id" value="<?php if(isset($gallery['id'])){ echo $gallery['id']; } else { echo "new"; } ?>">
                </div>
        </div>
        <div class="col-lg-12">
            <label>Pick Pictures</label>
        <select id="imageSelect" multiple="multiple" class="image-picker show-html">
            <?php foreach ($files_list as $file): ?>
                <?php if(is_string($file)): ?>
               <option data-img-src="<?= base_url("uploads/files/thumbnail/". $file ) ?>" value="<?= $file ?>" >$file</option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        </div>    
            
            <div class="row">
            <div class="col-lg-9">
               <!-- <button type="button" id="save" class="btn btn-success btn-sm btn-block"> SAVE or [ctrl] + [s] </button> -->
                
                <button type="button" 
                        id="<?php if(isset($gallery['id'])){ echo $gallery['id']; } else { echo "new"; } ?>" 
                        onclick="saveGallery()"  
                        class="btn btn-success btn-sm btn-block"> 
                        <h5>SAVE</h5>     
                </button>
            </div>
            
            <div class="col-lg-3">
                <a href="<?= site_url(['dashboard', 'show_all_articles']) ?>">
                    <button type="button" id="candel" class="btn btn-danger btn-sm btn-block"> CANCEL  </button>
                </a>
            </div>
        </div>
    </div>
    
</div>
    