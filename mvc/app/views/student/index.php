<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach($data["student"] as $student) :?>
                <ul>
                    <li><?=$student["name"];?></li>
                    <li><?=$student["nrp"];?></li>
                    <li><?=$student["email"];?></li>
                    <li><?=$student["jurusan"];?></li>
                </ul>
            <?php endforeach;?>
        </div>
    </div>
</div>