<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Kesenian dan Kerajinan di Yogyakarta</li>
            </ol>
            <div class="row">
                <div class="col-xl-12 col-md-6">
                    <div class="card border-3 border-left-primary text-primary border-primary mb-4 shadow">
                        <div class="card-body">Total Admin Terdaftar</div>
                        <div class="h5">

                            <?php
                            require 'database/dbconfig.php';

                            $query = "SELECT id FROM register ORDER BY id";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<h1 class="ms-4"> ' . $row . ' </h1>';
                            ?>

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-primary stretched-link" href="register.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Total Kebudayaan

                            <?php
                            require 'database/dbconfig.php';

                            $query_kesenian = "SELECT id FROM kesenian ORDER BY id";
                            $query_kesenian_run = mysqli_query($connection, $query_kesenian);

                            $query_kerajinan = "SELECT id FROM kerajinan ORDER BY id";
                            $query_kerajinan_run = mysqli_query($connection, $query_kerajinan);

                            $row_kesenian = mysqli_num_rows($query_kesenian_run);
                            $row_kerajinan = mysqli_num_rows($query_kerajinan_run);

                            $total_row = $row_kesenian + $row_kerajinan;

                            echo '<h1 class="ms-4"> ' . $total_row . ' </h1>';
                            ?>

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#datatablesSimple">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Budaya Kesenian
                            <div class="h5">

                                <?php
                                require 'database/dbconfig.php';

                                $query = "SELECT id FROM kesenian ORDER BY id";
                                $query_run = mysqli_query($connection, $query);

                                $row = mysqli_num_rows($query_run);

                                echo '<h1 class="ms-4"> ' . $row . ' </h1>';
                                ?>

                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="kesenian.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Budaya Kerajinan

                            <div class="h5">

                                <?php
                                require 'database/dbconfig.php';

                                $query = "SELECT id FROM kerajinan ORDER BY id";
                                $query_run = mysqli_query($connection, $query);

                                $row = mysqli_num_rows($query_run);

                                echo '<h1 class="ms-4"> ' . $row . ' </h1>';
                                ?>

                            </div>

                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Kebudayaan
    </div>
    <div class="card-body">

    <?php 
        $query = "SELECT id, 'kesenian' AS kategori, title, description, images FROM kesenian 
                  UNION 
                  SELECT id, 'kerajinan' AS kategori, title, description, images FROM kerajinan";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0) {
    ?>

        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                while($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['kategori'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['description'] ?></td>
                    <td><?php echo '<img src="upload/'.$row['images'].'" width="100px" height="100px" alt="kebudayaan">'?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    <?php
        } else {
            echo "No Record Found";
        }
    ?>
    </div>
</div>

        </div>
    </main>

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>