<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <!--   <link rel="stylesheet" href="/css/bootstrap.min.css"> -->
    <style>
    @page { size: 8cm 30cm landscape; }

    </style>
    <title>Acta</title>
    <!-- 
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
 -->
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <td>nombre</td>
                <td>libro</td>
                <td>folio</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $bautizo->nombre }}</td>
                <td>{{ $bautizo->libro }}</td>
                <td>{{ $bautizo->folio }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>