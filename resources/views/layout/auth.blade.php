<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Title --}}
    <title>@yield('title')</title>

    <!-- Style -->
    @stack('prepend-style')
    @include('layout.auth.styles.css')
    @stack('addon-style')
  </head>

  <body>

  	
  <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Selamat Datang</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<!-- Content -->

			@yield('content')

			
			</div>
		</div>
	</section>


    <!-- Script -->
    @stack('prepend-script')
    @include('layout.auth.styles.script')
    @stack('addon-script')

    @if(session('login_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: "{{ session('login_error') }}",
            });
        </script>
    @endif

  </body>
</html>