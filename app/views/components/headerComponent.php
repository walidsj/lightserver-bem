<link rel="shortcut icon" href="<?= base_url(); ?>public/assets/favicon.png" />
<meta charset="utf-8">
<meta name="description" content="Portal Satu Data Indonesia merupakan portal resmi data terbuka Indonesia yang dikelola oleh Sekretariat Satu Data Indonesia tingkat Pusat, Kementerian Perencanaan Pembangunan Nasional/Bappenas. Seluruh kumpulan data yang tersedia dalam Portal Satu Data Indonesia dapat diakses secara terbuka dan dikategorikan sebagai data publik, sehingga tidak mengandung informasi yang memuat rahasia negara, rahasia pribadi, atau hal lain sejenisnya sebagaimana diatur dalam Undang-undang nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.">
<meta name="keywords" content="satu, data, indonesia">
<meta name="author" content="ericsnth">
<meta name="referrer" content="origin">
<link rel="canonical" href="<?= current_url(); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?= !empty($title) ? $title . " - " . getenv('app.Title') : getenv('app.Title') . " - " . getenv('app.Subtitle'); ?></title>
<meta name="description" content="<?= !empty($description) ? $description : getenv('app.Description'); ?></title>

   <meta property=" og:type" content="website">
<meta property="og:url" content="<?= current_url(); ?>">
<meta property="og:title" content="Beranda | Portal Satu Data Indonesia">
<meta property="og:description" content="Portal Satu Data Indonesia merupakan portal resmi data terbuka Indonesia yang dikelola oleh Sekretariat Satu Data Indonesia tingkat Pusat, Kementerian Perencanaan Pembangunan Nasional/Bappenas. Seluruh kumpulan data yang tersedia dalam Portal Satu Data Indonesia dapat diakses secara terbuka dan dikategorikan sebagai data publik, sehingga tidak mengandung informasi yang memuat rahasia negara, rahasia pribadi, atau hal lain sejenisnya sebagaimana diatur dalam Undang-undang nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.">
<meta property="og:image" content="">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?= current_url(); ?>">
<meta property="twitter:title" content="Beranda | Portal Satu Data Indonesia">
<meta property="twitter:description" content="Portal Satu Data Indonesia merupakan portal resmi data terbuka Indonesia yang dikelola oleh Sekretariat Satu Data Indonesia tingkat Pusat, Kementerian Perencanaan Pembangunan Nasional/Bappenas. Seluruh kumpulan data yang tersedia dalam Portal Satu Data Indonesia dapat diakses secara terbuka dan dikategorikan sebagai data publik, sehingga tidak mengandung informasi yang memuat rahasia negara, rahasia pribadi, atau hal lain sejenisnya sebagaimana diatur dalam Undang-undang nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik.">
<meta property="twitter:image" content="">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/datago.css?ver=3.0basemod1.0">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,600&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://data.go.id/js/jquery.nicescroll.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
<style>
   body,
   p,
   h1,
   h2,
   .nav-link {
      font-family: 'Montserrat', sans-serif;
   }

   .card-body {
      font-size: small;
   }

   ssection#main .container {
      color: #bd2130 !important;
   }

   section#main a.nav-link {
      color: #bd2130 !important;
   }

   small {
      color: gray;
   }

   .nicescroll-rails {
      padding-right: 1px !important;
   }

   section#main .metadata a {
      color: #bd2130 !important;
   }
</style>