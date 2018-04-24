<div id="page-wrapper">

    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" aria-describedby="Section Name" placeholder="Section Name" 
                        value='<?= isset($section['name']) ? $section['name'] : "" ?>'>
                        
                        <input type="hidden" name="id" value="<?php if(isset($section['id'])){ echo $section['id']; } else { echo "new"; } ?>">
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="prefix" aria-describedby="Section Prefix" placeholder="Section Prefix" 
                        value='<?= isset($section['prefix']) ? $section['prefix'] : "" ?>'>
                </div>
            </div>
        </div>
        
         <div class="row">
            <div class="col-lg-9">

                <button type="button" 
                        id="<?php if(isset($section['id'])){ echo $section['id']; } else { echo "new"; } ?>" 
                        onclick="saveArticleSection(this.id, 'sections')"  
                        class="btn btn-success btn-sm btn-block"> 
                            SAVE 
                </button>
            </div>
            
            <div class="col-lg-3">
                <a href="<?= site_url(['dashboard', 'show_all_sections']) ?>">
                    <button type="button" id="candel" class="btn btn-danger btn-sm btn-block"> CANCEL  </button>
                </a>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<script>
    var base_url = "<?= base_url() ?>" + "index.php" ; 
</script>