<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <td> <a href="<?= site_url(['dashboard', 'show_all_articles']) ?>" class="btn btn-info" role="button"> < BACK </a> </td>
                <td> <a href="<?= site_url(['dashboard', 'new_section']) ?>" class="btn btn-success" role="button"> + NEW </a> </td>
                <td> <a href="<?= site_url(['dashboard', 'article', 'trash', 'sections']) ?>" class="btn btn-warning" role="button"> TRASHES </a> </td>
            </div>
            <div class="col-lo-12">
                <div >
                           
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Created By</th>
                        <th>Name</th>
                        <th>Prefix</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if($item_data['sections']) foreach ($item_data['sections'] as $section) : ?>
                      <tr id="<?= $section['id'] ?>" >
                        <td><?= $section['id'] ?></td>
                        <td><?= $section['created_by'] ?></td>
                        <td><?= $section['name'] ?></td>
                        <td><?= $section['prefix'] ?></td>
                        <td><?= $section['created_at'] ?></td>
                        <td><?= $section['updated_at'] ?></td>
                        <td> <a href="<?= site_url(['dashboard', 'edit_section', $section['id']]) ?>" class="btn btn-warning" role="button">Edit</a> </td>
                        <td> <a id="<?= $section['id'] ?>" onclick="articleActions(this.id, 'remove', 'sections')" class="btn btn-danger" role="button">Delete</a> </td>
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