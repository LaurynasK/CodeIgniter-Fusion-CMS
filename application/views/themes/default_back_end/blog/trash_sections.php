<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <td> <a href="<?= site_url(['dashboard', 'show_all_sections']) ?>" class="btn btn-info" role="button"> < BACK </a> </td>
            </div>
            <div class="col-lo-12">
                <div class="container">
                           
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Created By</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if($trash_items) foreach ($trash_items as $section) : ?>
                      <tr id="<?= $section['id'] ?>" >
                        <td><?= $section['id'] ?></td>
                        <td><?= $section['created_by'] ?></td>
                        <td><?= $section['name'] ?></td>
                        <td><?= $section['created_at'] ?></td>
                        <td><?= $section['updated_at'] ?></td>
                        <td> <a id="<?= $section['id'] ?>" onclick="articleActions(this.id, 'restore_from_trash', 'sections')" class="btn btn-warning" role="button">Restore</a> </td>
                        <td> <a id="<?= $section['id'] ?>" onclick="articleActions(this.id, 'remove', 'sections')" class="btn btn-danger" role="button">Completley Delete</a> </td>
                      </tr>
                        <?php endforeach; ?>
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