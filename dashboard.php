<?php
//query untuk mengambil data article
$sql1 = "SELECT * FROM articel ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);

//menghitung jumlah baris data article
$jumlah_article = $hasil1->num_rows; 

$sql1 = "SELECT * FROM gallery ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);

//menghitung jumlah baris data gallery
$jumlah_gallery = $hasil1->num_rows; 

$username = $_SESSION['username'];
$qUser = mysqli_query(
    $conn,
    "SELECT username, foto FROM user WHERE username='$username'"
);
$user = mysqli_fetch_assoc($qUser);


?>
<div class="container text-center mt-5">

    <p class="mt-4">Selamat Datang,</p>
    <h3 class="text-danger fw-bold">
        <?= $user['username']; ?>
    </h3>

 <!-- FOTO PROFIL -->
    <div class="my-4">
        <?php if (!empty($user['foto'])) { ?>
            <img src="img/<?= $user['foto']; ?>"
                class="rounded-circle shadow"
                style="width:180px;height:180px;object-fit:cover;">
        <?php } else { ?>
            <img src="img/default.png"
                class="rounded-circle shadow"
                style="width:180px;height:180px;">
        <?php } ?>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4">
    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title"><i class="bi bi-newspaper"></i> Article</h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-danger fs-2"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title"><i class="bi bi-camera"></i> Gallery</h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-danger fs-2"><?php echo $jumlah_gallery; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>