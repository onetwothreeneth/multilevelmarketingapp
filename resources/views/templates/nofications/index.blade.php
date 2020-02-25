@if(@$success)
	<script type="text/javascript">   
        swal("{{ $success }}","", "success"); 
	</script>
@elseif(@$error)
	<script type="text/javascript">  
        swal("{{ $error }}","", "error"); 
	</script>
@endif

@if(session('success'))
	<script type="text/javascript">   
        swal("{{ session('success') }}","", "success"); 
	</script>
@elseif(session('error'))
	<script type="text/javascript">  
        swal("{{ session('error') }}","", "error"); 
	</script>
@endif