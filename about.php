<?php 
	include 'header.php';
 ?>
 <style>
	#map {
		width: 80%; /* Mengecilkan peta agar tidak terlalu besar */
    height: 350px; /* Sesuaikan tinggi peta */
    border-radius: 10px; 
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    margin: 20px auto; /* Memberikan jarak di atas dan bawah serta rata tengah */
    display: block;
	bottom: 200px; /* Geser ke atas 50px */
	position: relative;
}

 </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<div class="container" style="padding-bottom: 300px;">
	<h2 style=" width: 100%; border-bottom: 4px solid #ff8680"><b>Tentang Kami</b></h2>
	<p class="text-justify">Usaha kuliner merupakan salah satu sektor yang terus berkembang, terutama di bidang makanan siap saji seperti nasi kuning. Nasi uduk adalah makanan khas Indonesia yang banyak diminati untuk sarapan maupun acara tertentu. Namun, pelaku usaha seringkali sudah berusia lanjut.
	.</p>
<p>
Oleh karena itu, dibutuhkan solusi digital berupa aplikasi web yang dapat membantu penjual dalam mempromosikan bisnisnya dengan lebih efisien dan terorganisir.</p>
</div>

 <!-- ======= Outlet Start ======= -->
 <iframe id="map" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63341.2456485418!2d107.59192465992735!3d-6.974568094787286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e91bfffffff7%3A0x798a5c7bbcad437e!2sJl.%20Sukabirus%2C%20Citeureup%2C%20Kec.%20Dayeuhkolot%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1668349240972!5m2!1sen!2sid"
    frameborder="0" allowfullscreen>
</iframe>
  <!-- ======= Outlet End ======= -->


 <?php 
	include 'footer.php';
 ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
 