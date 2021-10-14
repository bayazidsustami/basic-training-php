<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["student"]["name"];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data["student"]["nrp"];?></h6>
            <p class="card-text"><?= $data["student"]["jurusan"];?></p>
            <p class="card-text"><?= $data["student"]["email"];?></p>
            <a href="<?=BASE_URL;?>/student" class="card-link">Kembali</a>
        </div>
    </div>
</div>