<?=$this->extend("layouts/default") ?>

<?=$this->section("titre") ?>Accueil <?=$this->endSection("titre") ?>

<?=$this->section("content") ?>

    <h1>welcome</h1>
    <h2>Tasks</h2>
    <ul>
        <li><a href="<?=base_url('login') ?>">Login</a></li>
    </ul>
<?=$this->endSection("content") ?>
