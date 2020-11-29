<!doctype html>
<html>

<head>
   <?php $this->load->view('components/headerComponent'); ?>
</head>

<body style="background-color: #fff !important;">
   <?php $this->load->view('components/navComponent'); ?>
   <section id="main">
      <style>
         #custom-search-input {
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
         }

         #custom-search-input input {
            border: 0;
            box-shadow: none;
         }

         #custom-search-input button {
            margin: 3px;
            background: none;
            box-shadow: none;
            border: 0;
            color: #666666;
            border-left: solid 1px #ccc;
            border-radius: 0px;
         }

         #custom-search-input button:hover {
            border: 0;
            box-shadow: none;
            border-left: solid 1px #ccc;
         }

         #custom-search-input .glyphicon-search {
            font-size: 23px;
         }
      </style>

      <div class="rowss">
         <section class="featured">
            <div class="container featured-pad">
               <div class="row">
                  <div class="col-md-7">
                     <h3 class="text-white mb-0">Database Kemahasiswaan</h3>
                     <h1 class="text-white font-weight-bold"><?= getenv('app.Title'); ?></h1>
                     <p class="text-white largetext" style="font-weight: 400;"><?= getenv('app.Subtitle'); ?></p>
                     <form method="GET" action="<?= site_url(); ?>dataset">
                        <input type="hidden" name="_token" value="DALK4AGbZrJK05hxXrbduvBkgnYQxF7Di7vWPnnV">
                        <div id="custom-search-input">
                           <div class="input-group" style="background:white;border-radius:5px;">
                              <input type="text" class="form-control form-control-lg" name="q" placeholder="Masukan kata kunci pencarian" />
                              <span class="input-group-btn">
                                 <button class="btn btn-lg" type="submit">
                                    <i class="fas fa-search"></i>
                                 </button>
                              </span>
                           </div>
                        </div>

                     </form>
                  </div>
                  <div class="col-md-5"></div>
               </div>
            </div>
         </section>
      </div>
   </section>
   <?php $this->load->view('components/footerComponent'); ?>
   </div>
</body>

</html>