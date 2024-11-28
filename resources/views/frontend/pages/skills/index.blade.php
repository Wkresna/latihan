@extends('frontend.layouts.app')

@section('content')
<!-- Skills-->
<section class="resume-section" id="skills">
    <div class="resume-section-content">
         <!-- Tampilkann Judul -->        
         <h1 class="mb-0">
            <!--memanggil variable data di controoler -->
            {{$t2}}
        </h1>
        <h2 class="subheading mb-3">
            <!--memanggil variable data di controoler -->
            {{$t3}}
        </h2>

         <!-- Menampilkan Data dari Array -->
         <ul class="fa-ul mb-0">
            @foreach ($data['head'] as $item)
                <li><span class="fa-li"><i class="fas fa-check"></i></span> {{ $item['nama'] }} - {{ $item['divisi'] }}</li>
                <ul>
                    @foreach ($item['jenisService'] as $jenisService)
                       <!-- jika tampilannya statis
                        <li><span class="fa-li"><i class="fas fa-laptop"></i></span> {{ $jenisService['jenis'] }}</li> -->
                       <!-- jika tampilannya bisa diclick -->
                        <li class="nav-item">
                            <a class="nav-link komputer-link" href="javascript:void(0);" 
                            data-jenis="{{ $jenisService['jenis'] }}" 
                            data-ket="{{ $jenisService['ket'] }}"> 
                                {{ $jenisService['jenis'] }}
                            </a>
                        </li> 
                       @endforeach
                </ul>
        @endforeach
        </ul>
        <!-- <img src="{{ asset('storage/images/foto.jpg') }}" alt="Gambar Bantuan" class="img-fluid"> -->
        <!-- <img src="{{ asset('storage/images/foto.jpg') }}" alt="Gambar Bantuan" width="300" height="200"> -->


        <p></p>
        <div class="subheading mb-3">Anda Butuh Bantuan Kami?</div>
        <p>{{ $data['Pajak']['Judul1'].' '.$data['Pajak']['Judul2']}}</p>
        <ul class="list-inline dev-icons">
            <li class="list-inline-item"><i class="fab fa-html5"></i></li>
            <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
            <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
            <li class="list-inline-item"><i class="fab fa-angular"></i></li>
            <li class="list-inline-item"><i class="fab fa-react"></i></li>
            <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
            <li class="list-inline-item"><i class="fab fa-sass"></i></li>
            <li class="list-inline-item"><i class="fab fa-less"></i></li>
            <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
            <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
            <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
            <li class="list-inline-item"><i class="fab fa-npm"></i></li>
        </ul>
        <div class="subheading mb-4">Kami Bekerja Secara Proforsional</div>
        <ul class="fa-ul mb-4">
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Menjaga Kejujuran
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Berintegritas
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Komitment Tinggi
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Cinta Kasih
            </li>
        </ul>
        <div id="content"></div> <!-- Tambahkan div untuk menampilkan paragraf baru --> 
    </div>
    </section>
@endsection

@push('style')
<style>
   
    /* Mengubah ukuran dan jenis font untuk h1 */
    h1 {
        /*font-size: 2.5em; /* Sesuaikan ukuran font */
        /*font-family: 'Georgia', serif; /* Ganti dengan jenis font yang diinginkan */
        /*color: red; /* Ubah warna jika diperlukan */
    }
    /* Mengubah ukuran dan jenis font untuk paragraf dinamis yg muncul saat diklick */
    .dynamic-paragraph {
        /*font-size: 2.0em;
        /*font-family: 'Verdana', sans-serif;*/
        color: green ; /* Ubah warna jika diperlukan */
    }

    /* Mengubah ukuran font dan jenis font pada item daftar */
    ul.fa-ul li {
        font-size: 1.5em; /* Sesuaikan ukuran font */
        /*font-family: 'Verdana', sans-serif; /* Ganti dengan jenis font yang diinginkan */
        color: blue; /* Ubah warna jika diperlukan */
    }

    /* Mengubah warna teks jenis" service/jasa */
    .subheading, .nav-item a {
        /*font-size: 2.0em;
        /*font-family: 'Courier New', monospace;
        color: blueviolet; /* Ubah warna jika diperlukan */
    }

</style>
@endpush

@push('script')
<script>
        document.addEventListener('DOMContentLoaded', function() { 
            document.querySelectorAll('.komputer-link, .pajak-link').forEach(function(element) { 
                element.addEventListener('click', function() { 
                    console.log("Link diklik");

                    // Mengambil data dari atribut data-ket
                    var ket = element.getAttribute('data-ket');
                    
                    // Periksa apakah paragraf sudah ada
                    let nextParagraph = element.nextElementSibling;
                    if (nextParagraph && nextParagraph.classList.contains('dynamic-paragraph')) {
                        // Toggle tampilan paragraf jika sudah ada
                        nextParagraph.style.display = nextParagraph.style.display === 'none' ? 'block' : 'none';
                    } else {
                        // Jika belum ada, buat paragraf baru di bawah elemen yang diklik
                        var newParagraph = document.createElement("p"); 
                        newParagraph.textContent = ket; // Set keterangan dari data-ket
                        newParagraph.classList.add('dynamic-paragraph'); // Tambahkan kelas untuk identifikasi
                        //newParagraph.style.color = "red"; 
                        newParagraph.style.marginTop = "5px";

                        // Menyisipkan paragraf baru tepat setelah elemen yang diklik
                        element.insertAdjacentElement('afterend', newParagraph);
                    }
                }); 
            }); 
        });

</script>
@endpush
