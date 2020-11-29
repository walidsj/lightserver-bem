<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?= base_url(); ?>public/assets/js/app.js"></script>

<?php if ($this->session->flashdata('alert')) : ?>
   <script type="text/javascript">
      Swal.fire({
         title: '<?= $this->session->flashdata('alert')['title']; ?>',
         text: '<?= $this->session->flashdata('alert')['text']; ?>',
         icon: '<?= $this->session->flashdata('alert')['type']; ?>',
         showCancelButton: false,
         allowOutsideClick: false,
         allowEscapeKey: false
      });
   </script>
<?php endif; ?>