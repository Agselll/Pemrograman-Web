<?php
    require "koneksi.php";

    $result = mysqli_query($conn, "SELECT * FROM kritik");

    $kritik = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $kritik[] = $row;
    }
    date_default_timezone_set('Asia/Makassar')
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rumah Dhuafa Sangatta</title>
        <link rel="stylesheet" href="RDS.css">  
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" href="RDS.css"/> 
        <link rel="stylesheet" href="kritikbox.css">
    </head>
    <body>
        <!-- NAVBAR -->
       <nav>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="material-icons" id="btn">subject</i>
            <i class="material-icons" id="close">close</i>
            <p class="container-content">
                <img id="beranda" src="img/RDS.jpg" class="img-content" alt="sorry gambar rusak"/>
            </p>
        </label>
            <ul>
                <li><a id="beranda" href="#atas">Beranda</a></li>
                <li><a href="portfolio.php">About</a></li>
                <li><a href="#footer" div class="footer-media"></div> Hubungi Kami</a></li>
                <li><a href="input.php">Input</a></li>
                <li><a href="kritiksaran.php">Kritik & Saran</a></li>
                <li>
                    <div class="search">
                        <input type="text" placeholder="Cari data volunteer " maxlength="50"> 
                        <button id="searching"> 
                            SEARCH
                        </button>
                    </div>
                </li>
                <li>
                    <div class="cont-mode">
                        <label class="input-check">
                            <input type="checkbox" class="checkbox" id="tombol">
                            <span class="check"></span>
                        </label>
                    </div>
                </li>
            </ul>
       </nav>
           
       <div id="atas" class="atas">
            <div class="left flex-1 justify-right">
                <img src="img/rds.jpeg" height="300px" alt="foto Rds" />
            </div>
            <div class="right flex-1">
                <h3>Rumah Dhuafa Sangatta Menebar Manfaat Untuk Umat </h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste inventore distinctio iusto enim reprehenderit sapiente obcaecati perferendis voluptates, nesciunt beatae expedita quibusdam iure modi adipisci fugit nam alias est maiores?
                </p>
            </div>
        </div>
       <!-- CONTAINER -->
        <div class="container">
            <div class="card">
                <div class="imgBox">
                    <img src="img/rds1.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, hic explicabo! Alias omnis vel voluptatibus natus explicabo, maiores eius, sed sint a delectus beatae assumenda adipisci, quisquam officiis officia iste!</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/rds2.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eos magni eius sint veritatis nulla doloribus voluptate, nesciunt libero quas odit rerum sed enim, asperiores dolore autem consequuntur. Cumque, architecto.</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/bantuansultra.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas earum facilis sunt quaerat, architecto magnam distinctio beatae omnis laborum explicabo esse, quo ad cupiditate animi in quidem ex accusantium?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/cintadhuafa.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas earum facilis sunt quaerat, architecto magnam distinctio beatae omnis laborum explicabo esse, quo ad cupiditate animi in quidem ex accusantium?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/ifthor.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas earum facilis sunt quaerat, architecto magnam distinctio beatae omnis laborum explicabo esse, quo ad cupiditate animi in quidem ex accusantium?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/pantijompo.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas earum facilis sunt quaerat, architecto magnam distinctio beatae omnis laborum explicabo esse, quo ad cupiditate animi in quidem ex accusantium?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/santunankesehatan.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas earum facilis sunt quaerat, architecto magnam distinctio beatae omnis laborum explicabo esse, quo ad cupiditate animi in quidem ex accusantium?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/warunggratis.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas earum facilis sunt quaerat, architecto magnam distinctio beatae omnis laborum explicabo esse, quo ad cupiditate animi in quidem ex accusantium?</p>
                </div>
            </div>
            <div class="card">
                <div class="imgBox">
                    <img src="img/sarapanpagi.jpeg" alt="kegiatan rds">
                </div>
                <div class="content">
                    <h2>lalala</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas earum facilis sunt quaerat, architecto magnam distinctio beatae omnis laborum explicabo esse, quo ad cupiditate animi in quidem ex accusantium?</p>
                </div>
            </div>
        </div>

        <!-- review -->
        <div class="review">
            <h1> Ulasan Dari Masyarakat Tentang Rumah Dhuafa Sangatta </h1>
            <br>
            <hr><br>
            <div class="kritik-container">
                <?php $i = 1; foreach ($kritik as $krk) :?>
                <div class="kritik-box">
                    <p><img src="img/profil/<?= $krk["foto"] ?>" alt=""><?php echo $krk['nama']?></p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <p><?php echo $krk['rating']?></p>
                    </div>
                    <p><?php echo $krk['deskripsi']?></p>
                    <a href="edit.php?id=<?php echo $krk['id']?>"><i class="fa-solid fa-pen"></i></a>
                    <a href="delete.php?id=<?php echo $krk['id']?>"><i class="fa-solid fa-trash-can"></i></a>
                </div>
                <?php $i++; endforeach;?>
            </div>
        </div>

        <!-- FOORTER -->
        <footer id="footer" class="footer">
            <div class="footer-left">
                <h3>Payment Method</h3>
                <div class="credit-cards">
                    <img src="img/Bca.png" alt="">
                    <img src="img/Bri.png" alt="">
                    <img src="img/Mandiri.jpg" alt="">
                </div>
                <p class="footer-copyright">2022 Rumah Dhuafa Sangatta</p>
            </div>
    
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Indonesia</span> Kalimantan Timur, Sangatta</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+62 822-2098-4653</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:rumahdhuafasgt@gmail.com" target="_blank">rumahdhuafasgt@gmail.com</a></p>
                </div>
            </div>
    
            <div class="footer-right">
                <p class="footer-about">
                    <span>Temukan kami</span>
                    </p>
                <div class="footer-media">
                    <a href="https://www.youtube.com/channel/UC06pmUdwm8D7vwCLd6k0KTA" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.facebook.com/rumahdhuafapeduli" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/rumahdhuafapeduli/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="tanggal">
                    <table>
                        <tr>
                            <td>Current Date :</td>
                            <td>Timezone :</td>
                        </tr>
                        <tr>
                            <td><?= date('l, d-m-Y') ?></td>
                            <td><?= date_default_timezone_get() ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </footer>
        <script src="jquery.js"></script>
        <script src="scripts.js"></script>
    </body>
</html>

        