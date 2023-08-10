<div class="container">
    <h3>
        Dokumen <?php echo ucfirst(@$_GET['category']); ?>&nbsp;
        <a href="#" class="a-normal" data-bs-toggle="modal" data-bs-target="#modal-new">+</a>
    </h3>

    <article class="">
        <h5 class="text-center d-none">Download</h5>
        <form method="get">
            <div class="row mb-2 gx-1">
                <?php $kolom = 12; ?>
                <?php if($category == 'transparansi'): ?>
                <div class="col-lg-3">
                    <input type="hidden" name="category" value="<?php echo $category; ?>">
                    <select name="sub-category" class="form-select" onchange="this.form.submit()">
                        <option value="0">Jenis</option>
                        <?php
                        foreach($subcategory as $subc):
                            $selected = (@$_GET['sub-category'] == $subc) ? ' selected="selected"' : '';
                            $Subc = ($subc == 'lkjip') ? 'LKjIP' : strtoupper($subc);
                            echo '<option value="'.$subc.'"'.$selected.'>'.$Subc.'</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <div class="col-lg-3">
                    <select name="fiscal" class="form-select" onchange="this.form.submit()">
                        <option value="0">Tahun</option>
                        <?php
                        foreach($fiscal as $fisc):
                            $selected = (@$_GET['fiscal'] == $fisc->fiscal) ? ' selected="selected"' : '';
                            echo '<option value="'.$fisc->fiscal.'"'.$selected.'>'.$fisc->fiscal.'</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
                <?php $kolom = 6; ?>
                <?php endif; ?>
                <div class="col-lg-<?php echo $kolom; ?>">
                    <div class="input-group">
                        <input type="text" name="keywords" class="form-control" aria-labelledby="button-search" value="<?php echo trim(@$_GET['keywords']); ?>" placeholder=" Kata kunci ...">
                        <button type="submit" name="filter" value="1" class="btn btn-sm btn-primary rounded-end" id="button-search">
                            <i class="bi bi-search"></i>
                            Cari&nbsp;
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table bg-light">
                <thead>
                    <tr class="bg-primary text-light">
                        <td class="text-center">No</td>
                        <td>Judul</td>
                        <td>Deskripsi / keterangan</td>
                        <td class="text-center"><i class="bi bi-download"></i></td>
                        <td class="text-center">Tanggal</td>
                        <td class="text-center">
                            <?php $Status = (@$_GET['status'] === '0') ? '0' : '1'; ?>
                            <?php $status = (@$_GET['status'] === '0') ? '1' : '0'; ?>
                            <a href="<?php echo base_url("document/new?category={$category}&status={$status}"); ?>" class="text-light">
                                <?php if($Status === '0'): ?>
                                    <i class="bi bi-reply-all-fill"></i>
                                <?php else: ?>
                                    <i class="bi bi-trash"></i>
                                <?php endif; ?>
                            </a>
                        </td>
                    </tr>
                </thead>
                <tbody>
                <?php if(!$document): ?>
                    <tr>
                        <td colspan="4" class="p-2 text-center text-danger fw-bold fst-italic">
                            ... dokumen tidak ditemukan!
                        </td>
                    </tr>
                <?php endif; ?>
                <?php $i = $pagerStart+1; ?>
                <?php foreach($document as $doc): ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?>.</td>
                        <td><?php echo $doc->title; ?></td>
                        <td><small><em><?php echo $doc->description; ?></em></small></td>
                        <td class="text-center">
                            <small>
                                <a href="<?php echo $doc->url; ?>" class="d-block px-1 text-center text-light bg-success a-normal rounded">
                                    <i class="bi bi-download"></i>
                                </a>
                            </small>
                        </td>
                        <td class="text-center">
                            <small><?php echo date('d/m/Y', strtotime($doc->date_uploaded)); ?></small>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo base_url('document/edit-status?id='.$doc->ID.'&status='.$status); ?>" onclick="return confirm('Apakah Anda yakin?')">
                                <?php if($Status === '0'): ?>
                                    <i class="bi bi-reply-all-fill text-success"></i>
                                <?php else: ?>
                                    <i class="bi bi-trash text-danger"></i>
                                <?php endif; ?>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="">
            <?php echo $pager = str_replace(['<ul class="pagination"','<li>','<a'],['<ul class="pagination pagination-sm"','<li class="page-item">','<a class="page-link"'],$pager); ?>
        </div>
    </article>

    <div id="modal-new" class="modal fade">
        <<div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="mb-3"><i class="bi bi-upload"></i> &nbsp;Upload Dokumen</h5>
                    <form method="post" action="<?php echo base_url(); ?>/document/add-new" enctype="multipart/form-data">
                        <?php if(strtolower(@$_GET['category']) == 'transparansi'): ?>
                            <input type="hidden" name="category" value="transparansi">
                            <div class="input-group mb-2">
                                <select name="sub-category" class="form-select">
                                    <?php
                                        foreach($subcategory as $subc):
                                            $Subc = ($subc == 'lkjip') ? 'LKjIP' : strtoupper($subc);
                                            echo '<option value="'.$subc.'">'.$Subc.'</option>';
                                        endforeach;
                                    ?>
                                </select>
                                <input type="text" name="fiscal" class="form-control" maxlength="35" placeholder="Tahun Anggaran">
                            </div>
                        <?php else: ?>
                            <input type="hidden" name="category" value="umum">
                            <input type="hidden" name="sub-category" value="lainnya">
                            <input type="hidden" name="fiscal" value="-">
                        <?php endif; ?>
                        <div class="form-group mb-2">
                            <input type="text" name="title" class="form-control" maxlength="150" placeholder="Judul">
                        </div>
                        <div class="form-group mb-2">
                            <textarea name="description" class="form-control" placeholder="Deskripsi / Keterangan"></textarea>
                        </div>
                        <div class="form-group mb-2">
                            <input type="file" name="file" class="form-control" accept=".doc,.docx,.xls,.xlsx,.csv,.pdf,.zip,.rar">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" name="date" class="d-inline-flex pb-1 px-2 date-picker" value="<?php echo date('Y-m-d', now()); ?>" style="width: 125px;">
                            <button type="submit" name="publish-now" class="btn btn-sm btn-primary" value="1"><i class="bi bi-check-circle"></i> Publikasikan&nbsp;</button>
                            <button type="submit" name="publish-later" class="btn btn-sm btn-info text-light"><i class="bi bi-clock"></i> Simpan draft&nbsp;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>