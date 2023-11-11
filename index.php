<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 8 - Alpro 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body class="h-100 w-100 bg-info-subtle">
    <div class="h-100 w-100 p-5">
        <h3 class="mb-5 text-center w-100 bg-info-subtle">Form Tambah Data</h3>
        <form method="post" action="tambah_data.php" class="row g-3">
            <div class="col-12">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" name="id" required>
            </div>
            <div class="col-md-6">
                <label for="f_name" class="form-label">F_Name</label>
                <input type="text" class="form-control" name="f_name">
            </div>
            <div class="col-md-6">
                <label for="l_name" class="form-label">L_Name</label>
                <input type="text" class="form-control" name="l_name">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
                <label for="email2" class="form-label">Email2</label>
                <input type="email" class="form-control" name="email2">
            </div>
            <div class="col-12">
                <label for="profesi" class="form-label">Profesi</label>
                <input type="text" class="form-control" name="profesi" required>
            </div>
            <div class="d-flex flex-row-reverse">
                <input type="submit" class="btn btn-primary " value="Tambahkan Data">
            </div>
        </form>
    </div>

    <div class="h-100 w-100 p-5 bg-info-subtle">
        <h3 class="mb-5 text-center w-100">Tabel Data Pribadi</h3>
        <table id="data-table" class="display table-striped-columns">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>F_Name</th>
                    <th>L_Name</th>
                    <th>Email</th>
                    <th>Email2</th>
                    <th>Profesi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Load data from CSV file
                $data = array_map('str_getcsv', file('datapribadi.csv'));

                for ($i = 1; $i < count($data); $i++) {
                    echo '<tr>';
                    foreach ($data[$i] as $cell) {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <footer class="text-center py-2 bg-info-subtle">
        <p>&copy; Algoritma Pemrograman II 2023 | Created by Rifai Kacanegara</p>
    </footer>
</body>
</html>
