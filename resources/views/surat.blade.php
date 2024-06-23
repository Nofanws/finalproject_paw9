<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Aktif Kuliah</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            border: 1px solid black;
            padding: 20px;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            text-align: center;
        }
        .header img {
            width: 80px;
            margin-right: 20px;
            margin-bottom: 20px;

        }
        .header-text {
            flex-grow: 1;
            border-bottom: 1px solid #000; /* Warna garis bisa disesuaikan (misalnya hitam) */
        padding-bottom: 10px; /* Untuk memberi jarak antara teks dan garis */
        margin-bottom: 10px; /* Jarak antara header text dan elemen berikutnya */

        }
        .header-text h1 {
            color: rgb(0, 0, 0);
            margin: 0;
            font-size: 20px;
        }
        .header-text p {
            margin: 5px 0;
            font-size: 14px;
        }
        .content {
            margin: 0 20px;
        }
        .content h2 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 50px;

        }

        .content h3 {
            text-align: center;
            color: red;

        }
        .content p {
            margin: 10px 0;
        }
        .detail p {
            margin: 5px 0;
            display: flex;
        }
        .detail p span:first-child {
            width: 100px;
            display: inline-block;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
        }
        .signature p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('img/logountag.png') }}" alt="Logo UNTAG">
            <div class="header-text">
                <h1>UNIVERSITAS 17 AGUSTUS 1945 SURABAYA</h1>
                <p>Fakultas Teknik - Program Studi Teknik Informatika</p>
                <p>Jl. Semolowaru No.45, Surabaya | Telp: (031) 5931800</p>
                <p>Email: info@untag-sby.ac.id | Website: www.untag-sby.ac.id</p>
            </div>
        </div>
        
        <div class="content">
            <h3>KOP</h3>
            <h2>SURAT KETERANGAN AKTIF KULIAH</h2>
            
            <p>Yang bertanda tangan di bawah ini:</p>
            <div class="detail">
                <p><span>Nama</span>: Aidil primasetya Armin, S.ST., M.T.</p>
                <p><span>Jabatan</span>: Kaprodi Teknik Informatika</p>
            </div>
            
            <p>Menyatakan dengan sebenarnya bahwa:</p>
            <div class="detail">
                <p><span>NBI</span>: {{ $mahasiswa->nbi }}</p>
                <p><span>Nama</span>: {{ $mahasiswa->nama }}</p>
                <p><span>Angkatan</span>: {{ $mahasiswa->angkatan }}</p>
            </div>
            
            <p>Adalah benar mahasiswa di Prodi Teknik Informatika UNTAG Surabaya</p>
            
            <div class="signature">
                <p>UNTAG, {{ date('d F Y') }}</p>
                <br><br><br>
                <p>Kaprodi Teknik Informatika</p>
                <p>Aidil primasetya Armin, S.ST., M.T.</p>
            </div>
        </div>
    </div>
</body>
</html>
