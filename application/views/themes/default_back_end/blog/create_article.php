<div id="page-wrapper">

    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="title for blog article" placeholder="Title name" 
                           value='<?= isset($article['title']) ? $article['title'] : "" ?>'>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Publish Date</label>
                    <input type="text"  class="form-control" id="publishDate" placeholder="Pick a publish date" size="30" 
                    value="<?= isset($article['publish_date']) ? $article['publish_date'] : "" ?>">
                </div>
            </div>
        </div>
        <?php if (isset($sections)): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Section</label>
                    <select class="form-control" id="article-section">
                        <?php foreach($sections as $section): ?>
                            <option id = <?= $section['id'] ?> > <?= $section['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
        <?php endif ?>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Main Text</label>
                    <input type="hidden" name="id" value="<?php if(isset($article['id'])){ echo $article['id']; } else { echo "new"; } ?>">
                    <textarea id="text-container">
                        <?php if(!isset($article['article_text'])): ?>
                            <p>Please remove this before your edit</p>
                        <?php else: ?>
                            <?= $article['article_text'] ?>
                        <?php endif; ?> 
                    </textarea>
                    
                </div>
            </div>
        </div>
        
        <?php if (isset($galleries)): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Gallery</label>
                    <select class="form-control" id="article-gallery">
                        <option id=0 > [none] </option>
                        <?php foreach($galleries as $gallery): ?>
                            <option id = <?= $gallery['id'] ?> data=<?= $gallery['pic_list'] ?> > <?= $gallery['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>
        <?php endif ?>
        
        <script>
            var tags = <?= isset($article['keywords']) ? $article['keywords'] : "[]" ?> ;
            var publishDate = '<?= isset($article['publish_date'] ) ? $article['publish_date'] : "today" ?>';
            var sectionID = <?= isset($article['section_id'] ) ? $article['section_id'] : "''"; ?>;
            var galleryID = <?= isset($article['article_gallery']) ? $article['article_gallery'] : "''" ?>;
        </script>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label>KeyWords</label>
                     <textarea id="keywords" name='tags' placeholder='write some tags'>
                        <?php if (isset($article['keywords_list'])){ 
                                foreach ($article['keywords_list'] as $keyWord){
                                    echo $keyWord . ", ";
                                }
                            } else { 
                                    echo ""; 
                                } 
                        ?>   
                    </textarea>

                </div>
            </div>
        </div>
        
         <div class="row">
            <div class="col-lg-9">
               <button type="button" 
                        id="<?php if(isset($article['id'])){ echo $article['id']; } else { echo "new"; } ?>" 
                        onclick="saveArticle(this.id, 'articles')"  
                        class="btn btn-success btn-sm btn-block"> 
                            SAVE  
                </button>
            </div>
            
            <div class="col-lg-3">
                <a href="<?= site_url(['dashboard', 'show_all_articles']) ?>">
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