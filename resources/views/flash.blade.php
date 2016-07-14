@if (session()->has('flash_notification.message'))
	<script>
		swal({
			title: 'Blueasy',  
			text: "{{ session('flash_notification.message') }}",  
			type: "{{ session('flash_notification.level') == 'danger' ? 'error' : session('flash_notification.level') }}", 
			showConfirmButton: true,
			confirmButtonText: 'Okay'
		});
	</script>
@endif