<!DOCTYPE html>
 <html>
 <head>
 <title>Tambah Buku</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/c
ss/bootstrap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263X
mFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
 <title>Tambah Buku</title>
 </head>
 <body>
 <div class="alert alert-success text-center" 
role="alert" > <h2>DATA KOLEKSI BUKU 
PERPUSTAKAAN</h2>
 </div>
 <h1 class="ml-5">Tambah Koleksi Buku</h1>
 <form method="post" 
action="prosestambahbuku.php" class="ml-5">
<div class="form-group row">
 <label for="pengarang" class="col-sm-1 col-formlabel">Kode Buku</label>
 <div class="col-sm-3">
 <input type="text" name="kode" class="formcontrol" placeholder="kode">
 </div>
 </div> 
<div class="form-group row">
 <label for="judul" class="col-sm-1 col-formlabel">Judul Buku</label>
 <div class="col-sm-3">
 <input type="text" name="judul" class="formcontrol" placeholder="Judul Buku">
 </div>
 </div>
 <div class="form-group row">
 <label for="pengarang" class="col-sm-1 col-formlabel">Pengarang</label>
 <div class="col-sm-3">
 <input type="text" name="pengarang" 
class="form-control" placeholder="Pengarang">
 </div>
 </div>
 <div class="form-group row">
 <label for="tahun_terbit" class="col-sm-1 col-formlabel">Tahun Terbit</label>
 <div class="col-sm-3">
 <input type="number" name="tahun_terbit" 
class="form-control" placeholder="Tahun Terbit">
 </div>
 </div>
 <div class="form-group row">
 <label for="kategori" class="col-sm-1 col-formlabel">Kategori</label>
 <div class="col-sm-3">
 <input type="text" name="kategori" class="formcontrol" placeholder="Kategori">
 </div>
 </div>
<button type="submit" class="btn btn-primary mb-1 
mt-1 ml-0 mr-0" >Kirim</button>
<a href="index.php" class="btn btn-primary mb-1 mt-1 
ml-0"><i class="fas fa-user-plus mr-0"></i>Koleksi 
Buku</a>
</form>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS --
>
 <script src="https://code.jquery.com/jquery-
3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
crossorigin="anonymous"></script>
 <script 
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.
9/umd/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUib
X39j7fakFPskvXusvfa0b4Q" 
crossorigin="anonymous"></script>
 <script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/
bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl" 
crossorigin="anonymous"></script>
 </body>
 </html>