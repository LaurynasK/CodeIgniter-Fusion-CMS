<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
              <h1> Blogs </h1>
                <td> <a href="<?= site_url(['dashboard', 'new_article']) ?>" class="btn btn-info" role="button"> + NEW </a> </td>
                <td> <a href="<?= site_url(['dashboard', 'new_gallery']) ?>" class="btn btn-primary" role="button"> + NEW GALLERY </a> </td>
                <td> <a href="<?= site_url(['dashboard', 'show_all_sections']) ?>" class="btn btn-success" role="button"> SECTIONS </a> </td>
                <td> <a href="<?= site_url(['dashboard', 'article', 'trash', 'articles']) ?>" class="btn btn-warning" role="button"> TRASHES </a> </td>
            </div>
            <div class="col-lo-12">
                <div>
                           
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Created By</th>
                        <th>Section Id</th>
                        <th>Title</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Publish Date</th>
                        <th>Keywords</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if($item_data['articles']) foreach ($item_data['articles'] as $article) : ?>
                      <tr id="<?= $article['id'] ?>" >
                        <td><?= $article['id'] ?></td>
                        <td><?= $article['created_by'] ?></td>
                        <td><?= $article['section_id'] ?></td>
                        <td><?= $article['title'] ?></td>
                        <td><?= $article['created_at'] ?></td>
                        <td><?= $article['updated_at'] ?></td>
                        <td><?= $article['publish_date'] ?></td>
                        <td><?= $article['keywords'] ?></td>
                        <td> <a href="<?= site_url(['dashboard', 'edit_article', $article['id']]) ?>" class="btn btn-warning" role="button">Edit</a> </td>
                        <td> <a id="<?= $article['id'] ?>" onclick="articleActions(this.id, 'remove', 'articles')" class="btn btn-danger" role="button">Delete</a> </td>
                      </tr>
                        <?php endforeach; ?>
                    </tbody>
                  </table>
                  <ul class="pagination">
                    <?= $item_data['all_pages']; ?>
                  </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var base_url = "<?= base_url() ?>" + "index.php" ; 
</script>