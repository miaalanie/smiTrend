<!DOCTYPE html>
<html>
<head>

<title>Trending Sukabumi</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f5f6fa;
    padding:40px;
}

.container{
    max-width:1100px;
    margin:auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

h1{
    margin-bottom:20px;
}

.filter{
    display:flex;
    gap:15px;
    margin-bottom:20px;
}

select{
    padding:8px;
    border-radius:6px;
    border:1px solid #ccc;
}

button{
    padding:8px 15px;
    background:#4CAF50;
    border:none;
    color:white;
    border-radius:6px;
    cursor:pointer;
}

button:hover{
    background:#3d9441;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:10px;
    border-bottom:1px solid #eee;
    text-align:left;
}

th{
    background:#fafafa;
}

.rank{
    font-weight:bold;
    color:#ff4757;
}

/* tombol lihat postingan */

.btn-view{
    background:#007bff;
    color:white;
    padding:6px 10px;
    border-radius:5px;
    text-decoration:none;
    font-size:13px;
}

.btn-view:hover{
    background:#0056b3;
}

.empty{
    text-align:center;
    padding:20px;
}

</style>

</head>

<body>

<div class="container">

<h1>🔥 Trending Sekarang - Sukabumi</h1>

<form method="GET">

<div class="filter">

<select name="time">

<option value="7" {{ $time=='7' ? 'selected' : '' }}>7 Hari Terakhir</option>
<option value="48" {{ $time=='48' ? 'selected' : '' }}>48 Jam Terakhir</option>
<option value="24" {{ $time=='24' ? 'selected' : '' }}>24 Jam Terakhir</option>
<option value="12" {{ $time=='12' ? 'selected' : '' }}>12 Jam Terakhir</option>
<option value="6" {{ $time=='6' ? 'selected' : '' }}>6 Jam Terakhir</option>
<option value="1" {{ $time=='1' ? 'selected' : '' }}>1 Jam Terakhir</option>

</select>

<select name="category">

<option value="all">Semua Kategori</option>
<option value="Belanja" {{ $category=='Belanja' ? 'selected' : '' }}>Belanja</option>
<option value="Bisnis" {{ $category=='Bisnis' ? 'selected' : '' }}>Bisnis</option>
<option value="Game" {{ $category=='Game' ? 'selected' : '' }}>Game</option>
<option value="Hewan Peliharaan dan Binatang" {{ $category=='Hewan Peliharaan dan Binatang' ? 'selected' : '' }}>Hewan Peliharaan dan Binatang</option>
<option value="Makanan dan Minuman" {{ $category=='Makanan dan Minuman' ? 'selected' : '' }}>Makanan dan Minuman</option>
<option value="Hiburan" {{ $category=='Hiburan' ? 'selected' : '' }}>Hiburan</option>
<option value="Wisata" {{ $category=='Wisata' ? 'selected' : '' }}>Wisata</option>
<option value="Teknologi" {{ $category=='Teknologi' ? 'selected' : '' }}>Teknologi</option>
<option value="Kesehatan" {{ $category=='Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
<option value="Kecantikan dan Fashion" {{ $category=='Kecantikan dan Fashion' ? 'selected' : '' }}>Kecantikan dan Fashion</option>
<option value="Olahraga" {{ $category=='Olahraga' ? 'selected' : '' }}>Olahraga</option>
<option value="Hukum dan Pemerintahan" {{ $category=='Hukum dan Pemerintahan' ? 'selected' : '' }}>Hukum dan Pemerintahan</option>
<option value="Politik" {{ $category=='Politik' ? 'selected' : '' }}>Politik</option>
<option value="Kesehatan" {{ $category=='Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
</select>

<button type="submit">Filter</button>

</div>

</form>

<table>

<thead>
<tr>
<th>Rank</th>
<th>Topik</th>
<th>Platform</th>
<th>Volume Penelusuran</th>
<th>Dimulai</th>
<th>Kategori</th>
<th>Postingan</th>
</tr>
</thead>

<tbody>

@forelse($trending as $item)

<tr>

<td class="rank">#{{ $item['rank'] }}</td>

<td>{{ $item['topic'] }}</td>

<td>{{ $item['platform'] }}</td>

<td>{{ $item['volume'] }}</td>

<td>{{ $item['start'] }}</td>

<td>{{ $item['category'] }}</td>

<td>
@if(isset($item['link']))
<a href="{{ $item['link'] }}" target="_blank" class="btn-view">
Lihat Postingan
</a>
@endif
</td>

</tr>

@empty

<tr>
<td colspan="7" class="empty">
Tidak ada data trending
</td>
</tr>

@endforelse

</tbody>

</table>

</div>

</body>
</html>