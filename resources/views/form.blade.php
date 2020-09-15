<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS LARAVEL ARRIZAL Bintang Ramadhan</title>
</head>
<body>
    <form class="text-center border border-light p-5" action="/uts" method="post">
    @csrf
        <p class="h4 mb-4">Mencari macam macam rumus</p>
        <select class="browser-default custom-select mb-4" name="opsi">
            <option value="tabung">Volume Tabung</option>
            <option value="bola">Volume Bola</option>
            <option value="kerucut">Volume Kerucut</option>
        </select>
        <input type="number" name="r" class="form-control mb-4" placeholder="jari-jari">
        <input type="number" name="t" class="form-control mb-4" placeholder="tinggi">
        <button class="btn btn-info btn-block" type="submit">Hasil</button>
    </form>
    <div class="container mt-5">
    @if(session('info'))
        <div class="alert alert-info">
    {{session('info')}}
        </div>
        @endif
    </div>



        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>