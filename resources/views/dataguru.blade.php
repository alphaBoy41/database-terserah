<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>i-Learning-SMAN MANDALA BAKTI SURABAYA</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset('css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    -- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html" >
					<img src="images/logosekolah-logosite.png" alt="" style="height: 100px;"/>
                    <!-- nama website -->
                    <nav class="navbar">
                        <a href="index.html" class="nama-website">i-Learning</a>
                    </nav>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="Tentang Kami.html">Tentang kami</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Data Master</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="siswa.html">Siswa</a>
								<a class="dropdown-item" href="guru.html">Guru</a>
								<a class="dropdown-item" href="staf.html">Staf</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="kelas.html">Kelas</a></class=>
						<li class="nav-item"><a class="nav-link" href="e-Learning.html">e-Learning</a>
						 <li class="nav-item"><a class="nav-link" href="ekskul.html">Ekskul</a></li>


                                <li class="nav-item"><a class="nav-link" href="prestasi.html">Prestasi</a></li>

							</div>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<!-- End header -->

	<!-- Profil Pengguna -->
	 <header>
        <nav class="JudulGuru">Data <span> Guru</span></nav>
    </header>
    <main>
	<!-- table -->
	<div>
<table class="table-guru">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Guru</th>
      <th scope="col">NIP</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Mata Pelajaran</th>
    </tr>
  </thead>
  <tbody>

  
  @foreach($gurumapels as $gurumapel)
    <tr>
      <th scope="row">1</th>
      <td>{{ $gurumapel->nama }}</td>
      <td>{{ $gurumapel->id }}</td>
      <td>{{ $gurumapel->email }}</td>
      <td>{{ $gurumapel->no_hp }}</td>
      <td>{{ $gurumapel->id_mapel }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

		
        




    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>