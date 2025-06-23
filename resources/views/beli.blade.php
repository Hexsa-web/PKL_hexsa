<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Barang : <b>{{ $a }}</b> <br>
    jumlah : <b>{{ $b }}</b> <br>
    @if($b > 100)
    Anda Mendapatkan Cashback Sebesar 10%
    @elseif ($b > 50)
    Anda Mendapatkan CashBack Sebesar 5%
    @else
    Anda Tidak Dapat Cashback
    @endif
</body>
</html>