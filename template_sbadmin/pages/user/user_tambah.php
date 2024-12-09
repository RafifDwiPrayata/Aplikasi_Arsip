<?php
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Tambah User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="<?php echo BASE_URL; ?>index.php">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-plus mr-1"></i>
                    Tambah User
                </div>
                <div class="card-body">
                    <form>
                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleNama1">Nama</label>
                            <input type="text" class="form-control" id="exampleNama1" />
                        </div>

                        <!-- input text -->
                        <div class="form-group">
                            <label for="exampleUsername1">Username</label>
                            <input type="text" class="form-control" id="exampleUsername1" />
                        </div>

                        <!-- input password -->
                        <div class="form-group">
                            <label for="examplePassword1">Password</label>
                            <input type="password" class="form-control" id="examplePassword1" />
                        </div>

                        <!-- input file -->
                        <div class="form-group">
                            <label for="exampleInputFile1">Foto</label>
                            <input type="file" class="form-control-file" id="exampleInputFile1" />
                        </div>

                        <!-- select -->
                        <div class="form-group">
                            <label for="exampleLevelUser1">Level User</label>
                            <select class="form-control" id="exampleLevelUser1">
                                <option selected disabled>Pilih Level User</option>
                                <option>Admin</option>
                                <option>User</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="user.php" class="btn btn-link">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>