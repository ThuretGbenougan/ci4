<?=$this->extend("layouts/default") ?>

<?=$this->section("titre") ?>Edit Employer <?=$this->endSection("titre") ?>

<?=$this->section("content") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editer </h4>
                        <a href="<?=base_url('employes') ?>" class="btn btn-danger float-right">Annuler</a>
                    </div>
                    <div class="card-body">
                        <div class="row">   
                            <div class="col-md-12">
                                <form action="<?=base_url('employee/update/'.$employee['id']) ?>" method="post">
                                <input type="hidden" name="_method" value="PUT">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="">FirstName</label>
                                        <input type="text" name="first_name" value="<?= $employee['first_name'] ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="">LastName</label>
                                        <input type="text" name="last_name" value="<?= $employee['last_name'] ?>"  class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" name="email" value="<?= $employee['email'] ?>" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="">Phone</label>
                                        <input type="tel" name="phone" value="<?= $employee['phone'] ?>"  class="form-control" id="inputEmail4" placeholder="Phone">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Designation</label>
                                        <input type="text" name="designation" value="<?= $employee['designation'] ?>"  class="form-control" id="" placeholder="Designation">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <a href="<?=base_url('') ?>">Accueil</a>
<?=$this->endSection("content") ?>
