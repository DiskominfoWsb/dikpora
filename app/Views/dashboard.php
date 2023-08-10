<div class="container">

    <h3>Dashboard</h3>
    <?php if(session()->alert): ?>
    <div class="alert alert-<?php echo session()->alert['type']; ?>">
        <?php echo session()->alert['message']; ?>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mt-2 mb-2 justify-content-center align-items-center">
                        <i class="bi bi-clipboard fs-1"></i>
                    </div>
                    <h5 class="card-title text-center"><?php echo $postsCount; ?> Postingan</h5>
                    <div class="d-flex mt-3 mb-2 justify-content-center align-items-center">
                        <a href="#" class="btn btn-sm btn-primary">Lihat postingan &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mt-2 mb-2 justify-content-center align-items-center">
                        <i class="bi bi-file-post fs-1"></i>
                    </div>
                    <h5 class="card-title text-center"><?php echo $pagesCount; ?> Halaman</h5>
                    <div class="d-flex mt-3 mb-2 justify-content-center align-items-center">
                        <a href="#" class="btn btn-sm btn-primary">Lihat halaman &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mt-2 mb-2 justify-content-center align-items-center">
                        <i class="bi bi-chat-dots fs-1"></i>
                    </div>
                    <h5 class="card-title text-center"><?php echo $commentsCount; ?> Komentar</h5>
                    <div class="d-flex mt-3 mb-2 justify-content-center align-items-center">
                        <a href="#" class="btn btn-sm btn-primary">Lihat komentar &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mt-2 mb-2 justify-content-center align-items-center">
                        <i class="bi bi-person-workspace fs-1"></i>
                    </div>
                    <h5 class="card-title text-center"><?php echo $servicesCount; ?> Masukan</h5>
                    <div class="d-flex mt-3 mb-2 justify-content-center align-items-center">
                        <a href="#" class="btn btn-sm btn-primary">Lihat pelayanan &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
