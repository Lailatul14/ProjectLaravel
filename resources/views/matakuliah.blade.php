<!DOCTYPE html>
<head>
	<title> Belajar Laravel</title>
</head>
<body>
	<p>Nama : {{ $nama }}</p>
	<br>
	<ol>
 @foreach($matkul as $mk)
 <li>{{ $mk }}</li>
 @endforeach
 </ol>
		

</body>
</html>