$('form').submit(function () {
	Swal.fire({
		title: "Memuat",
		text: "Mengirim data...",
		showLoaderOnConfirm: true,
		showConfirmButton: false,
		showCloseButton: false,
		showCancelButton: false,
		allowOutsideClick: false,
		allowEscapeKey: false,
		onOpen: () => {
			swal.showLoading();
		},
	});
	return true;
});


$('select').each(function () {
   $(this).select2({
      theme: 'bootstrap4',
      width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
      placeholder: $(this).data('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
   });
});