<?php
// 1. BAGIAN PEMROSESAN DATA & VALIDASI SERVER-SIDE
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    // Validasi NIM: wajib diisi, hanya angka, dan panjang tepat 9 digit
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 9) {
        $error[] = "NIM harus berupa angka dan terdiri dari tepat 9 digit.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 30px auto; line-height: 1.6; }
        .form-group { margin-bottom: 12px; }
        label { display: block; font-weight: bold; margin-bottom: 4px; }
        input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { padding: 10px 18px; cursor: pointer; margin-right: 6px; }
        .error-box { background: #ffe6e6; border: 1px solid #cc0000; color: #990000; padding: 10px 15px; margin-bottom: 16px; }
        .result-box { background: #e8f5e9; border: 1px solid #2e7d32; padding: 15px; margin-top: 20px; }
    </style>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <?php if (!empty($error)): ?>
        <div class="error-box">
            <strong>Data gagal diproses:</strong>
            <ul>
                <?php foreach ($error as $pesan): ?>
                    <li><?= htmlspecialchars($pesan) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" value="<?= $error ? htmlspecialchars($nama ?? '') : '' ?>">
        </div>

        <div class="form-group">
            <label for="nim">NIM (9 Digit Angka):</label>
            <input type="text" id="nim" name="nim" value="<?= $error ? htmlspecialchars($nim ?? '') : '' ?>">
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi:</label>
            <input type="text" id="prodi" name="prodi" value="<?= $error ? htmlspecialchars($prodi ?? '') : '' ?>">
        </div>

        <div class="form-group">
            <label for="semester">Semester (1–14):</label>
            <input type="text" id="semester" name="semester" value="<?= $error ? htmlspecialchars($semesterInput ?? '') : '' ?>">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= $error ? htmlspecialchars($email ?? '') : '' ?>">
        </div>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <?php if ($data !== null): ?>
        <div class="result-box">
            <h3>Ringkasan Data Mahasiswa</h3>
            <p><strong>Nama:</strong> <?= htmlspecialchars($data["nama"]) ?></p>
            <p><strong>NIM:</strong> <?= htmlspecialchars($data["nim"]) ?></p>
            <p><strong>Program Studi:</strong> <?= htmlspecialchars($data["prodi"]) ?></p>
            <p><strong>Semester:</strong> <?= htmlspecialchars((string)$data["semester"]) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($data["email"]) ?></p>
        </div>
    <?php endif; ?>

</body>
</html>