<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btnAdd" data-bs-toggle="modal" data-bs-target="#formModal">
                Add Student
            </button>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASE_URL;?>/student/search" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" autocomplete="off" name="keyword" id="keyword" placeholder="Search student" aria-label="Search student" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" id="btnSearch">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data["student"] as $student) :?>
                    <li class="list-group-item ">
                        <?=$student["name"];?>
                        <a class="badge bg-danger float-end me-1" 
                            href="<?=BASE_URL?>/student/delete/<?=$student["id"];?>"
                            onclick="return confirm('Are you sure?');">
                            delete
                        </a>
                        <a class="badge bg-success float-end me-1 showModalEdit" 
                            data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$student["id"];?>"
                            href="<?=BASE_URL?>/student/update/<?=$student["id"];?>">
                            update
                        </a>
                        <a class="badge bg-primary float-end me-1" 
                            href="<?=BASE_URL?>/student/detail/<?=$student["id"];?>">
                            detail
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form action="<?=BASE_URL;?>/student/add" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="name"name="name">
            </div>
            <div class="form-group">
                <label for="brp" class="form-label">NRP</label>
                <input type="number" class="form-control" id="nrp"name="nrp">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email"name="email">
            </div>

            <div class="form-group">
                <label for="jurusan">Select Major</label>
                <select class="form-control" id="jurusan" name="jurusan" aria-label="Default select example">
                    <option selected>select your major</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                    <option value="Teknik Elektro">Teknik Teknik Elektro</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Geologi">Teknik Geologi</option>
                </select>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>