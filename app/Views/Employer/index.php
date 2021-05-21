<?=$this->extend("layouts/default") ?>

<?=$this->section("titre") ?>Employer <?=$this->endSection("titre") ?>

<?=$this->section("content") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <?php 
                    if (session()->getFlashdata('status')) {
                        echo "<h4>".session()->getFlashdata('status')."</h4>";
                    }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des employees</h4>
                        <a href="<?=base_url('employee-add') ?>" class="btn btn-primary float-right">Ajouter un employe</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First_name</th>
                                <th scope="col">Last_name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employee as $row): ?>
                                    <tr>
                                        <th scope="row"><?= $row['id'] ?></th>
                                        <td><?= $row['first_name'] ?></td>
                                        <td><?= $row['last_name'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['designation'] ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td>
                                            <a href="<?=base_url('employee/edit/'.$row['id']) ?>" class="btn btn-success">Edit</a>
                                            <a href="<?=base_url('employee/delete/'.$row['id']) ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="<?=base_url('') ?>">Accueil</a>
<?=$this->endSection("content") ?>
