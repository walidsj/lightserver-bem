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
               <li class="breadcrumb-item active"><a href="<?= site_url(); ?>dataset">Dataset</a></li>
            </ol>
         </nav>
         <style>
            th,
            td {
               font-size: 14px;
            }
         </style>
      </div>
      <div class="container" style="margin-top:40px; margin-bottom:70px;">
         <div class="row">
            <div class="col-md-8 col-12">
               <h5 style="word-break: break-word;color:#000"><?= $itemDataset->judul_dataset; ?></h5>
               <p style="word-break: break-word;font-size:13px;color:gray;" class="mb-4"></p>

               <ul class="nav nav-tabs" id="dataset" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="metadata-tab" data-toggle="tab" href="#metadata" role="tab" aria-controls="metadata" aria-selected="true"><i class="fas fa-asterisk"></i> Informasi Data</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" id="resources-tab" data-toggle="tab" href="#resources" role="tab" aria-controls="resources" aria-selected="false"><i class="fas fa-folder"></i> Berkas</a>
                  </li>
               </ul>
               <div class="tab-content" id="datasetContent">
                  <div class="tab-pane fade show active mt-3" id="metadata" role="tabpanel" aria-labelledby="metadata-tab">
                     <div class="card" style="margin-right:0px !important;">
                        <div class="card-body">
                           <small class="text-success">Informasi dalam bentuk struktur dan format yang baku untuk menggambarkan Data, menjelaskan Data, serta memudahkan pencarian, penggunaan, dan pengelolaan informasi Data.</small>
                        </div>
                     </div>

                     <table class="table table-sm mt-4 metadata">
                        <tr>
                           <td width="35%"><b>Elemen</b></td>
                           <td width="65%"><b>Isi</b></td>
                        </tr>
                        <tbody>
                           <tr>
                              <td>Kode Dataset</td>
                              <td style="word-break:break-word;"><?= md5($itemDataset->slug_dataset); ?></td>
                           </tr>
                           <tr>
                              <td>Sumber Data</td>
                              <td style="word-break:break-word;"><?= $itemDataset->nama_elkam; ?></td>
                           </tr>
                           <tr>
                              <td>Pengelola</td>
                              <td style="word-break:break-word;"><?= $itemDataset->nama_sub_elkam; ?></td>
                           </tr>
                           <tr>
                              <td>Dibuat pada</td>
                              <td style="word-break:break-word;">
                                 <?= $itemDataset->created_dataset; ?>
                              </td>
                           </tr>
                           <tr>
                              <td>Diperbarui pada</td>
                              <td style="word-break:break-word;">
                                 <?= $itemDataset->updated_dataset; ?>
                              </td>
                           </tr>
                           <tr>
                              <td>Label</td>
                              <td style="word-break:break-word;">
                                 <a href="<?= site_url(); ?>dataset?label=<?= $itemDataset->slug_label_dataset; ?>">#<?= $itemDataset->judul_label_dataset; ?></a>
                              </td>
                           </tr>
                           <tr>
                              <td>Kata Kunci</td>
                              <td style="word-break:break-word;">
                                 <span class="font-italic"><?= $itemDataset->keyword_dataset; ?></d>
                              </td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane fade mt-3" id="resources" role="tabpanel" aria-labelledby="resources-tab">
                     <div class="card" style="margin-right:0px !important;">
                        <div class="card-body">
                           <small class="text-success">Kami menyediakan data dalam format terbuka dan mudah dicari, diakses serta digunakan dengan harapan bahwa pengguna portal ini dapat memanfaatkan data yang tersedia untuk mewujudkan dan mendukung pembangunan Indonesia.</small>
                        </div>
                     </div>

                     <table class="table table-sm mt-4 metadata">
                        <tr>
                           <th>#</th>
                           <th width="300">Nama Berkas</th>
                           <th>Format</th>
                           <th>Pembaharuan</th>
                           <th>Action</th>
                        </tr>
                        <tbody>
                           <?php $i = 1; ?>
                           <?php foreach ($berkasDatasetList as $berkasDataset) : ?>
                              <tr>
                                 <td><?= $i; ?></td>
                                 <td><span style="font-size:12px;word-break:break-word;"><?= $berkasDataset->file_berkas_dataset; ?></td>
                                 <td><span style="font-size:12px;">
                                       <?= $berkasDataset->tipe_berkas_dataset; ?>
                                    </span></td>
                                 <td>
                                    <?= $berkasDataset->created_berkas_dataset; ?>
                                 </td>
                                 <td style="color:green;">
                                    <a href="<?= site_url(); ?>dataset/download-file/<?= $berkasDataset->kode_berkas_dataset; ?>/<?= $berkasDataset->file_berkas_dataset; ?>" title="Download File / Berkas">
                                       <i style="font-size:13px;margin-right:5px;color:green;" class="fas fa-2x fa-file-download"></i>Unduh</a>
                                 </td>
                              </tr>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                  </div>
               </div>

            </div>
            <div class="col-md-4 col-12">
               <h5 style="color:grey;"><?= $itemDataset->nama_elkam; ?></h5>
               <span style="color:grey;"><?= $itemDataset->nama_sub_elkam; ?></span>
            </div>
         </div>
      </div>
      </div>
   </section>
   <?php $this->load->view('components/footerComponent'); ?></div>
</body>

</html>