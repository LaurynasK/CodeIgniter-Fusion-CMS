<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <td> <a href="<?= site_url(['dashboard', 'show_all_articles']) ?>" class="btn btn-info" role="button"> < BACK </a> </td>
            </div>
            <div class="col-lo-12">
                <div class="container">
                           
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Created By</th>
                        <th>Section Id</th>
                        <th>Title</th>
                        <th>Article Text</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Publish Date</th>
                        <th>Keywords</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if($trash_items): 
                            foreach ($trash_items as $article) : ?>
                                <tr id="<?= $article['id'] ?>" >
                                    <td><?= $article['id'] ?></td>
                                    <td><?= $article['created_by'] ?></td>
                                    <td><?= $article['section_id'] ?></td>
                                    <td><?= $article['title'] ?></td>
                                    <td><?= substr($article['article_text'], 0, 20); ?></td>
                                    <td><?= $article['created_at'] ?></td>
                                    <td><?= $article['updated_at'] ?></td>
                                    <td><?= $article['publish_date'] ?></td>
                                    <td><?= $article['keywords'] ?></td>
                                    <td> <a id="<?= $article['id'] ?>" onclick="articleActions(this.id, 'restore_from_trash', 'articles')" class="btn btn-warning" role="button">Restore</a> </td>
                                    <td> <a id="<?= $article['id'] ?>" onclick="articleActions(this.id, 'remove', 'articles')" class="btn btn-danger" role="button">Completley remove</a> </td>
                                </tr>
                            <?php endforeach; 
                        endif; ?>
                    </tbody>
                  </table>
                  

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = "<?= base_url() ?>" + "index.php" ; 
</script>