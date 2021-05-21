<?=$this->extend("layouts/default") ?>

<?=$this->section("titre") ?>Create Employer <?=$this->endSection("titre") ?>

<?=$this->section("content") ?>
    <div class="">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                        <a href="<?=base_url('register') ?>" class="btn btn-danger float-right">Register</a>
                    </div>
                    <div class="card-body">
                        <div class="row">   
                            <div class="col-md-12">
                                <form action="<?=base_url('employee-store') ?>" method="post">
                                    
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" id="" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" id="" placeholder="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?=base_url('') ?>">Accueil</a>
        </div>
    </div>

<?=$this->endSection("content") ?>
