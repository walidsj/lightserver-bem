<!doctype html>
<html>

<head>
   <?php $this->load->view('components/headerComponent'); ?>
</head>

<body style="background-color: #fff !important;">
   <?php $this->load->view('components/navComponent'); ?>
   <section id="main">
      <div class="container" style="margin-top:30px;">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><i class="fa fa-home"></i><span> Home</span></a></li>
               <li class="breadcrumb-item active"><a href="<?= site_url(); ?>about">About</a></li>
            </ol>
         </nav>
      </div>
      <div class="container" style="margin-top:40px; margin-bottom:70px;">
         <div class="row">
            <div class="col-md-12 col-12">
               <legend><?= getenv('app.Title'); ?></legend>
               <p style="text-align:justify;" class="mt-3">Portal Satu Data Staners merupakan portal resmi data terbuka Keluarga Mahasiswa PKN STAN yang berisi data lintas elemen kampus yang menghasilkan data terkait program dan kegiatan Keluarga Mahasiswa. Portal Satu Data Staners (SDS) adalah sebuah inisiatif BEM KM PKN STAN untuk memperbaiki dan meningkatkan kualitas tata kelola data Keluarga Mahasiswa. Pemanfaatan data ini tidak sebatas untuk pengambilan kebijakan, pelaksanaan kegiatan dan program kerja, tetapi juga sebagai bentuk pemenuhan kebutuhan data publik bagi mahasiswa.
               </p>
               <p style="text-align:justify;">Melalui Satu Data ini, Kementerian Komunikasi dan Informasi BEM PKN STAN mendukung dan berupaya penuh untuk memberikan fasilitas data sentral kepada mahasiswa. Data tersedia dalam format terbuka dan mudah digunakan kembali, dengan tujuan untuk meningkatkan transparansi dan akuntabilitas pelaksanaan kegiatan Keluarga Mahasiswa, serta untuk meningkatkan partisipasi mahasiswa dalam mengawal kegiatan yang ada. Seluruh kumpulan data dalam portal ini dikategorikan sebagai data publik, sehingga tidak diperkenankan memuat informasi yang mengandung rahasia negara, rahasia pribadi atau hal lain sejenisnya dan sudah diatur dalam Undang-Undang RI Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.</p>

               </p>
               <br />
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link text-success active" id="organisasi-tab" data-toggle="tab" href="#organisasi" role="tab" aria-controls="organisasi" aria-selected="true">Struktur Tim SDS</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link text-success" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Hubungi Kami</a>
                  </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                     <br />
                     <p><strong>Tim SDS Kementerian Komunikasi dan Informasi</strong></p>
                     <p><span style="font-weight: 400;">Penanggung Jawab</span>
                        <span style="font-weight: 400;">: Moh. Walid Arkham Sani</span></p>
                     <p><strong>Penyelenggara Program Kerja</strong></p>
                     <table style="width: 458px;">
                        <tbody>
                           <tr>
                              <td style="width: 136.333px;">Manager</td>
                              <td style="width: 306.667px;">Alviana Fatin Ulya</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">Sekretaris</td>
                              <td style="width: 559.667px;">Dias Farikhatunnisa</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">Staf</td>
                              <td style="width: 559.667px;">Aln Pujo Priambodo</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">&nbsp;</td>
                              <td style="width: 559.667px;">Ajeng Susilo Wibowo</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">&nbsp;</td>
                              <td style="width: 559.667px;">Ferdhi Hemawardhana M.</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">&nbsp;</td>
                              <td style="width: 559.667px;">Diah Karunia Meilia Putri</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">&nbsp;</td>
                              <td style="width: 559.667px;">Muhammad Fadjri</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">&nbsp;</td>
                              <td style="width: 559.667px;">Putri Indriyani Balqish</td>
                           </tr>
                           <tr>
                              <td style="width: 215.333px;">&nbsp;</td>
                              <td style="width: 559.667px;">Sony Arief Muliawan</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                     <br />
                     <p><strong>Menteri Komunikasi dan Informasi</strong>
                        <br>Moh. Walid Arkham Sani (085157626557)</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </section>
   <?php $this->load->view('components/footerComponent'); ?>
   </div>
</body>

</html>