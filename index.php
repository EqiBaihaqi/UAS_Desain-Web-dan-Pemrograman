<?php
    require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="UTS.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS - Al Akbar Baihaqi</title>
</head>

<body>
  <div id="container">
  <div id="navigasi">


    <nav id="nav1">
      <ul id="mainmenu">
        <div class="brand">
          <div id="firstbrand">Akbarber</div>
          <div id="secondbrand">Shop</div>
        </div>
        <div id="menu">
          <li><a href="#isihome">
              <p class="hov">Home</p>
            </a></li>
          <li><a href="#isiservice">
              <p class="hov">Services</p>
            </a></li>
          <li> <a href="#isiabout">
              <p class="hov">About</p>
            </a></li>
          <li><a href="#isiproduct">
              <p class="hov">Product</p>
            </a></li>
          <li><a href="reservasi.php">
              <p class="hov">Reservation</p>
            </a></li>
          </li>
        </div>
      </ul>
    </nav>
  </div>
  <div id="isihome">
    <div id="homekiri">
      <ul>
        <div id="texthome">
          <li>
            <h1>Being a barber is about taking care of the people.</h1>
            <p>Melayani para customer adalah sebuah prioritas. Mengutamakan Kenyamanan, Keamanan, dan
              rasa puas customer.</p>
          </li>
        </div>
    </div>
    </ul>
    <div id="homekanan">
      <ul>
        <li><img id="gambar1" src="barber2.jpg" alt="barber2"></li>
      </ul>
    </div>
  </div>
  <div id="isiservice">
    <div id="headserv">
      SERVICES
    </div>
    <div id="serv">
      <div id="servkiri">
        <ul>
          <li>
            <img id="icon" src="haircut.png" alt="haircut">
            <h2>Haircut</h2>
            <p>Pencukuran rambut dilakukan oleh barber berlesensi yang berpengalaman.</p>
          </li>
          <li>
            <img id="icon" src="hairdresser.png" alt="hairdresser">
            <h2>Hairdresser</h2>
            <p>Styling rambut sesuai dengan haircut yang telah dilakukan/ sesuai request customer.</p>
          </li>
          <li> <img id="icon" src="moustache.png" alt="moustache">
            <h2>Moustache</h2>
            <p>Pencukuran kumis menggunakan alat-alat khusus, sehingga memberikan hasil yang terbaik.</p>
          </li>
        </ul>
      </div>
      <div id="servkanan">
        <ul>
          <li><img id="icon" src="haircolor.png" alt="haircolor">
            <h2>Coloring</h2>
            <p>Coloring pada rambut menggunakan bahan-bahan yang sudah terjamin kualitasnya.</p>
          </li>
          <li><img id="icon" src="massage.png" alt="massage">
            <h2>Massage</h2>
            <p>Massage dilakukan oleh professional, memberikan rasa rileks pada customer.</p>
          </li>
          <li> <img id="icon" src="shampoo.png" alt="shampoo">
            <h2>Shampoo</h2>
            <p>Mencuci rambut hingga bersih, dilakukan setelah maupun sebelum treatment. </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="isiabout">
    <img id="gambar2" src="aboutus.jpg" alt="aboutus">
    <div class="isianabout">
      <h1>
        <div id="firstbrand">Akbarber</div>
        <div id="secondbrand">Shop</div>
      </h1>
      <p><b>Akbarber Shop</b> Adalah merek barbershop premium di Indonesia.
        Kami mengutamakan kepuasaan pelanggan kami dengan memberikan layanan berkualitas tinggi seperti perlengkapan
        sanitasi, fasilitas nyaman, dan tukang cukur berpengalaman.</p>
      <p>Hingga saat ini, Akbarber Shop barbershop telah memiliki 30 cabang yang tersebar di Jabodetabek, Karawang,
        Surabaya, Medan,
        dan tahun depan akan berkembang sampai 75 cabang yang dan kami berusaha untuk menjadi barbershop terbaik di
        Indonesia.</p>
      <p>Di masa pandemic COVD-19, AkbarberShop melakukan pencegahan untuk mengurangi resiko penularan dengan
        menerapkan protocol Kesehatan seperti pemeriksaan suhu tubuh,
        wajib menggunakan masker, menjaga jarak, dan mencuci tangan. Captain Barbershop juga menerapkan prosedur
        protokol kesehatan di dalamnya dengan adanya general cleaning
        menggunakan desinfektan, penggunaan kip sekali pakai untuk pelanggan, dan penggunaan masker serta face shield
        bagi kapster.</p>
    </div>
  </div>

  <div id="isiproduct">
    <h1>Best Selling</h1>
    <div id="product">
      <button class="pre-btn"><img src="arrow.png" alt="arrow"></button>
      <button class="nxt-btn"><img src="arrow.png" alt="arrow"></button>
      <div class="isi-product">
        <div class="isian-product">
          <img id="slide" src="slide1.jpg" alt="slide1">
          <div id="product-info">
            <h2>Armani/Prive</h2>
            <p>Parfum dengan wangi elegan</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide2.jpg" alt="slide1">
          <div id="product-info">
            <h2>Bayside Pomade & Clay</h2>
            <p>Hair product kualitas premium</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide3.jpg" alt="slide1">
          <div id="product-info">
            <h2>Outlaw Clay Edition</h2>
            <p>Produk Clay yang tahan lama</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide4.jpg" alt="slide1">
          <div id="product-info">
            <h2>Farmasi Wax</h2>
            <p>Produk Wax dengan wangi menyegarkan</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide5.jpg" alt="slide1">
          <div id="product-info">
            <h2>Sauvage Dior</h2>
            <p>Parfum kualitas terbaik</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide6.jpg" alt="slide1">
          <div id="product-info">
            <h2>Blind Barber Bundle</h2>
            <p>Conditioner premium dan Shampoo sekaligus Body Wash yang dapat membersihkan kuman secara menyeluruh</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide7.jpg" alt="slide1">
          <div id="product-info">
            <h2>Beard Hero</h2>
            <p>Produk yang berguna untuk menghaluskan dan mengatur brewok</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide8.jpg" alt="slide1">
          <div id="product-info">
            <h2>Bundle The Bath Box</h2>
            <p>bundle yang berisi kumpulan product mandi</p>
          </div>
        </div>
        <div class="isian-product">
          <img id="slide" src="slide9.jpg" alt="slide1">
          <div id="product-info">
            <h2>Laura Mercier</h2>
            <p>Sunscreen pria yang bisa digunakan wanita juga</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>

  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navigasi").style.top = "0";
      } else {
        document.getElementById("navigasi").style.top = "-100px";
      }
      prevScrollpos = currentScrollPos;
    }

    const isianproduct = [...document.querySelectorAll('.isi-product')];
    const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
    const preBtn = [...document.querySelectorAll('.pre-btn')];

    isianproduct.forEach((item, i) => {
      let containerDimensions = item.getBoundingClientRect();
      let containerWidth = containerDimensions.width;

      nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
      })

      preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
      })
    })
  </script>
</body>

</html>