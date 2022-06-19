<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <!-- <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nama}}</h1> -->

        <!-- <h1 class="bg-dark px-3 py-1 text-white d-inline-block">{{$nilai}}</h1> -->
        <!-- <br> -->
        
        <!-- @if (($nilai >= 0) and ($nilai <50)) -->
        <!-- <div class="alert alert-danger d-inline-block">Maaf, Anda Tidak Lulus</div> -->

        <!-- @elseif (($nilai >= 50) and ($nilai <=100)) -->
        <!-- <div class="alert alert-success d-inline-block">Selamat, Anda Lulus</div> -->

        <!-- @else -->
        <!-- <div class="alert alert-dark d-inline-block">Nilai Tidak Valid</div> -->
        <!-- @endif -->


        <!-- @switch($nilai) -->
            <!-- @case(0) -->
            <!-- <div class="alert alert-danger d-inline-block">Tidak Ikut Ujian</div> -->
            <!-- @break -->
            <!-- @case(75) -->
            <!-- <div class="alert alert-warning d-inline-block">Cukup/Lumayan</div> -->
            <!-- @break -->
            <!-- @case(100) -->
            <!-- <div class="alert alert-success d-inline-block">Sempurna</div> -->
            <!-- @break -->
            <!-- @default -->
            <!-- <div class="alert alert-dark d-inline-block">Nilai Tidak Valid</div> -->
        <!-- @endswitch -->

        <!-- perulangan for -->
         @for ($i = 0; $i < 5; $i++)
         <div class="alert alert-info d-inline-block">{{ $i }}</div>
         @endfor

        <!-- Perulangan While -->
        <div class="container text-center mt-3 pt-3 bg-white">
        <?php $i = 0; ?>
        @while ($i < 5)
            <div class="alert alert-info d-inline-block">
                {{ $i }}
            </div>
        <?php $i++ ?>
        @endwhile
         </div>

        <!-- Foreach -->
       
        <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
        <br>
        @foreach ($nilai as $val)
            @if (($val >= 0) and ($val < 50))
            <div class="alert alert-danger d-inline-block">
                {{ $val }}
            </div>
            @elseif (($val >= 50) and ($val <= 100))
        <div class="alert alert-success d-inline-block">
            {{ $val }}
        </div>
        @endif
        @endforeach
        </div>
         
    </div>

    <!-- Forelse -->
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
        <br>
        @forelse ($nilai as $val)
            @if (($val >= 0) and ($val <= 50))
                <div class="alert alert-danger d-inline-block">
                    {{ $val }}
                </div>
            @elseif (($val >= 50) and ($val <= 100))
            <div class="alert alert-success d-inline-block">
                {{ $val }}
            </div>
            @endif
        @empty
            <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
        @endforelse
    </div>


    <!-- Continue (melanjutkan)dan Break (cukup disitu,lanjut)--> 
    @forelse ($nilai as $val)
            @if (($val >= 50) and ($val <= 100))
                @continue
            @endif

            @if ($val < 50)
                @break
            @endif
            <div class="alert alert-success d-inline-block">
                {{ $val }}
            </div>
        @empty
            <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
    @endforelse

    <!-- PHP dan Komentar -->
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{ $nama }}
        </h1>
        <br>
        @php
            var_dump($nilai);
        @endphp
    </div>
    
</body>
</html>