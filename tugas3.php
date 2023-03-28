<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai Mahasiswa</title>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      thead {
        background-color: #eee;
      }
      
      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Nilai</th>
          <th>Grade</th>
          <th>Predikat</th>
        </tr>
      </thead>
      <tbody>
        <?php
          function getGrade($nilai) {
            if ($nilai >= 80) {
              return 'A';
            } else if ($nilai >= 70) {
              return 'B';
            } else if ($nilai >= 60) {
              return 'C';
            } else if ($nilai >= 50) {
              return 'D';
            } else {
              return 'E';
            }
          }

          function getPredikat($nilai) {
            $grade = getGrade($nilai);
            switch ($grade) {
              case 'A':
                return 'Sangat Baik';
                break;
              case 'B':
                return 'Baik';
                break;
              case 'C':
                return 'Cukup';
                break;
              case 'D':
                return 'Kurang';
                break;
              default:
                return 'Sangat Kurang';
                break;
            }
          }

          $nilai_mahasiswa = array(65, 80, 55, 75, 90);

          $jumlah_mahasiswa = count($nilai_mahasiswa);
          $nilai_tertinggi = max($nilai_mahasiswa);
          $nilai_terendah = min($nilai_mahasiswa);
          $nilai_rata_rata = array_sum($nilai_mahasiswa) / $jumlah_mahasiswa;

          foreach ($nilai_mahasiswa as $nilai) {
            $grade = getGrade($nilai);
            $predikat = getPredikat($nilai);
            echo "<tr><td>$nilai</td><td>$grade</td><td>$predikat</td></tr>";
          }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">Jumlah mahasiswa: <?php echo $jumlah_mahasiswa ?>, Nilai tertinggi: <?php echo $nilai_tertinggi ?>, Nilai terendah: <?php echo $nilai_terendah ?>, Rata-rata: <?php echo $nilai_rata_rata ?></td>
        </tr>
      </tfoot>
    </table>
  </body>
</html>