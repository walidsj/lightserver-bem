<!doctype html>
<html>

<head>
   <?php $this->load->view('components/headerComponent'); ?>
</head>

<body style="background-color: #fff !important;">
   <?php $this->load->view('components/navComponent'); ?>
   <section id="main">
      <style>
         input[type=checkbox] {
            margin-right: 12px;
         }
      </style>
      <script type="text/javascript">
         function orgfilter(org) {
            if (org) {
               window.location.href = org;
            }
         }

         $(function() {
            $("#filter-org").niceScroll({
               autohidemode: false,
               railpadding: {
                  top: 10,
                  right: 5,
                  left: 0,
                  bottom: 10
               },
               cursorcolor: "#bd2130"
            });
         });

         $(function() {
            $("#filter-label").niceScroll({
               autohidemode: false,
               railpadding: {
                  top: 10,
                  right: 5,
                  left: 0,
                  bottom: 10
               },
               cursorcolor: "#bd2130"
            });
         });
      </script>
      <div class="container" style="margin-top:30px;">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="<?= site_url(); ?>"><i class="fa fa-home"></i><span> Home</span></a></li>
               <li class="breadcrumb-item active"><a href="<?= site_url(); ?>dataset">Dataset</a></li>
            </ol>
         </nav>
         <form id="dataset-search-form" class="search-form" method="get">
      </div>
      <div class="container" style="margin-top:40px; margin-bottom:70px;">
         <div class="row">
            <div class="col-md-4 col-12 d-none d-md-block">
               <div class="card mb-4 mr-0">
                  <h6 class="card-header">Elemen Kampus<small style="float:right;"><a href="<?= site_url(); ?>dataset">[reset]</a></small></h6>
                  <div id="filter-org" class="card-body" style="margin-left:0px !important;height:300px;overflow-y:scroll;">
                     <ul class="pl-3 text-dark" style="list-style-type: circle;">
                        <?php foreach ($elkamList as $elkamItem) : ?>
                           <li class="py-1">
                              <a href="<?= site_url(); ?>dataset?elkam=<?= $elkamItem->slug_elkam; ?>"><?= $elkamItem->nama_elkam; ?></a>
                           </li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
               </div>
               <div class="card mb-4 mr-0">
                  <h6 class="card-header">Label Data<small style="float:right;"><a href="<?= site_url(); ?>dataset">[reset]</a></small></h6>
                  <div id="filter-label" class="card-body" style="margin-left:0px !important;height:300px;overflow-y:scroll;">
                     <ul class="pl-3 text-dark" style="list-style-type: circle;">
                        <?php foreach ($labelList as $labelItem) : ?>
                           <li class="py-1">
                              <a href="<?= site_url(); ?>dataset?label=<?= $labelItem->slug_label_dataset; ?>"><?= $labelItem->judul_label_dataset; ?></a>
                           </li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-8 col-12">
               <div class="module-content">
                  <div class="input-group input-group-lg mb-3">
                     <input aria-label="Masukkan kata kunci dataset di sini" id="field-giant-search" type="text" class="form-control form-lg" name="q" aria-describedby="button-addon2" value="" autocomplete="off" placeholder="Masukkan kata kunci dataset di sini">
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend" style="display:block;">
                        <label class="input-group-text" for="inputGroupSelect01">Urutan</label>
                     </div>
                     <select class="custom-select" id="inputGroupSelect01" name="sort">
                        <option value="relevansi" selected>Relevansi</option>
                        <option value="title_string_asc">Nama Dataset A-Z</option>
                        <option value="title_string_desc">Nama Dataset Z-A</option>
                        <option value="last_update">Terakhir Diperbaharui</option>
                     </select>
                  </div>
                  </form>
               </div>

               <div class="alert
		    alert-success alert-important mb-4" role="alert">
                  Menampilkan <b><?= number_format($count_dataset); ?> dataset</b>
               </div>

               <div class="list-group row">
                  <?php foreach ($datasetList as $datasetItem) : ?>
                     <div class="col-md-12" style="border-bottom: 1px #000 !important;">
                        <a href="<?= site_url(); ?>dataset/detail/<?= $datasetItem->slug_dataset; ?>" style="color:gray !important;font-size:16px !important;" class="font-weight-bold"><?= $datasetItem->judul_dataset; ?></a><br>
                        <a href="<?= site_url(); ?>dataset/elkam/<?= $datasetItem->slug_elkam; ?>"><small style="color:gray;"><?= $datasetItem->nama_elkam; ?></small></a>

                        <span style="color:gray !important;" class="badge badge-light"><?= $datasetItem->tipeberkas_dataset; ?></span>
                        <br />
                        <a href="<?= site_url(); ?>dataset/instansi-elkam/<?= $datasetItem->slug_sub_elkam; ?>"><small style="color:gray;"><?= $datasetItem->nama_sub_elkam; ?></small></a>
                        <br />
                        <small style="color: gray;">Last Updated: <?= $datasetItem->updated_dataset; ?></small><br />
                        <small style="color:gray;">

                        </small>

                        <hr />
                     </div>
                  <?php endforeach; ?>
               </div>

               <nav aria-label="">
                  <ul class="pagination justify-content-end">
                     <li class="page-item  disabled">
                        <a class="page-link" href="" tabindex="-1" aria-disabled="true">Previous</a>
                     </li>
                     <li class="page-item ">
                        <a class="page-link" href="<?= site_url(); ?>dataset?page=2">Next</a>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      </form>
   </section>
   <?php $this->load->view('components/footerComponent'); ?>
   </div>
</body>

</html>