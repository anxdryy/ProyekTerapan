<?php 
	include 'header.php';
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<!-- PRODUK TERBARU -->
<div class="container">
	<!-- Judul Produk Kami dengan animasi fade-up -->
<h2 style="width: 100%; border-bottom: 4px solid #ff8680; margin-top: 80px;"
    data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="100"
    data-aos-duration="800"
    data-aos-easing="ease-in-out">
    <b>Produk Kami</b>
</h2>

<div class="row">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM produk");
    $delay = 200; // Variabel untuk delay animasi tiap produk
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-sm-6 col-md-4"
            data-aos="zoom-in"
            data-aos-offset="100"
            data-aos-delay="<?= $delay; ?>"
            data-aos-duration="700"
            data-aos-easing="ease-in-out">
            <div class="thumbnail">
                <img src="image/produk/<?= $row['image']; ?>">
                <div class="caption">
                    <h3><?= $row['nama']; ?></h3>
                    <h4>Rp.<?= number_format($row['harga']); ?></h4>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>"
                                class="btn btn-warning btn-block">Detail</a>
                        </div>
                        <?php if (isset($_SESSION['kd_cs'])) { ?>
                            <div class="col-md-6">
                                <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1"
                                    class="btn btn-success btn-block" role="button"><i
                                        class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                            </div>
                        <?php } else { ?>
                            <div class="col-md-6">
                                <a href="keranjang.php" class="btn btn-success btn-block" role="button"><i
                                        class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
		<?php
		}
		?>
	</div>

</div>

 <?php 
	include 'footer.php';
 ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>