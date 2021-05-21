<?=$this->extend("layouts/default") ?>

<?=$this->section("titre") ?>Create Employer <?=$this->endSection("titre") ?>

<?=$this->section("content") ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                        <a href="<?=base_url('login') ?>" class="btn btn-danger float-right">Login</a>
                    </div>
                    <div class="card-body">
                        <div class="row">   
                            <div class="col-md-12">
                                <form action="<?=base_url('employee-store') ?>" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" id="" placeholder="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="">phone</label>
                                        <input type="tel" name="phone" class="form-control" id="" placeholder="phone">
                                        </div>
                                    </div>                                 
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="designation" class="form-control" id="" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">password</label>
                                        <input type="password" name="password" class="form-control" id="" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="">password</label>
                                        <input type="password" name="password_confirm" class="form-control" id="" placeholder="confirm password">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Register</button>
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
