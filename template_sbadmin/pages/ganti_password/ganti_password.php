<?php 
include_once  __DIR__ . '/../../inc/header.php';
include_once  __DIR__ . '/../../inc/sidebar.php'; 
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Ganti Password</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Ganti Password</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <!-- input password -->
                        <div class="form-group">
                            <label for="examplePasswordBaru1">Password Baru</label>
                            <input type="password" class="form-control" id="examplePasswordBaru1" />
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../../inc/footer.php'; ?>