<html>
<head>
	<title>5026221044 - Sintiarani Febyan Putri</title>
</head>
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 
</body>

<!-- <body>
<div class="container">
    <header>
    <h2>Blog Sintiarani Febyan Putri</h2>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/tentang">TENTANG</a>
			|
			<a href="/blog/kontak">KONTAK</a>
		</nav>
	</header>
    <hr/>
	<br/>
	<br/> -->
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>


@yield('header') 

<br/>
	<br/>
	<hr/>
	<!-- <footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer> -->

@yield('isihalaman')

<!-- bagian konten blog -->
@yield('konten')
 
 
 <br/>
 <br/>
 <hr/>
 <!-- <footer>
     <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
 </footer> -->

</div>
</body>
</html>