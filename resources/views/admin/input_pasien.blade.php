<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Layanan Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3fafc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #38d9a9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            color: #343a40;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
        }
        input[type="file"] {
            margin-top: 5px;
        }
        button {
            width: 100%;
            background-color: #38d9a9;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #20c997;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Item</h2>
        <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama Barang -->
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" placeholder="Tuliskan Nama Barang*" required>
            </div>

            <!-- Deskripsi Barang -->
            <div class="form-group">
                <label for="deskripsi_barang">Deskripsi Barang</label>
                <textarea id="deskripsi_barang" name="deskripsi_barang" placeholder="Tuliskan Deskripsi" rows="3" required></textarea>
            </div>

            <!-- Harga Barang -->
            <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input type="number" id="harga_barang" name="harga_barang" placeholder="Tuliskan Harga Barang*" required>
            </div>

            <!-- Stok Barang -->
            <div class="form-group">
                <label for="stok_barang">Stok Barang</label>
                <input type="number" id="stok_barang" name="stok_barang" placeholder="Isi Stok" required>
            </div>

            <!-- Gambar Barang -->
            <div class="form-group">
                <label for="gambar_barang">Gambar Barang</label>
                <input type="file" id="gambar_barang" name="gambar_barang" accept="image/*" required>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit">Simpan</button>
        </form>
        <div>
            
        </div>
    </div>
</body>
</html>
