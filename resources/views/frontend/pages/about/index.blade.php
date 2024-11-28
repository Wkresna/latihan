@extends('frontend.layouts.app')

@section('content')
  <!-- About-->
  <section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            <!--memanggil variable data di controller -->
            {{$data['nama']}}
        </h1>
        <div class="subheading mb-5">
            <!--memanggil variable data di controller -->
            {{$data['alamat'].'Phone :'.$data['telp']}}
            <a href="mailto:name@email.com">{{$data['email']}}</a>
        </div>
        <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
        <!-- Menambahkan gambar dengan paragraf -->
        <div class="scroll-container">
            <div class="image-gallery">
                @foreach ($dataimg['images'] as $image)
                  <div class="image-description-container">
                    <img src="{{ asset('storage/images/' . $image['file']) }}" alt="Image description" class="img-fluid img-profile rounded-circle">
                    <p class="image-description">{{$image['description']}}</p>
                  </div>              
                @endforeach
            </div>
      </div>

      <div class="social-icons">
        <!--memanggil variable data di dengan perulangan-->
        @foreach ($data['items'] as $key => $val)
            <p class="social-icon" href="{{$val['link']}}"><i class="{{$val['icon']}}"></i></a>
        @endforeach 
    </div>

        <!--<img src="{{ asset('storage/images/foto.jpg') }}" alt="Gambar Bantuan" width="300" height="200"  class="img-fluid">-->
        <!--<p>Ini adalah partner kami....., jangan ragu-raju jika inging menghubungi kami.</p>-->

    </div>
  </section>
@endsection

@push('style')
<style>
 .scroll-container {
  max-width: 100%;
  max-height: 500px;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 10px;
  border: 1px solid #ccc;
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 20px; /* Tambahkan jarak bawah agar tidak mepet dengan elemen berikutnya */
}

.scroll-container img {
  max-width: 100px;
  height: auto;
  border-radius: 5px;
}
  .image-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); /* Kolom minimum 180px, dinamis sesuai ruang */
    gap: 20px;
    width: 100%; /* Pastikan galeri memenuhi lebar penuh */
  }
  .image-item {
    text-align: center;
  }
  .image-item img {
    width: 100%; /* Gambar memenuhi kontainer image-item */
    height: auto;
    object-fit: cover;
  }

  .image-item p {
    color: #2c3e50;
    font-size: 17px;
    color:blue;
    text-align: justify;
  }
  .image-description-container_ {
  display: flex;
  align-items: center;      /* Mengatur deskripsi sejajar secara vertikal dengan gambar */
  gap: 20px;                /* Jarak antara gambar dan deskripsi */
  max-width: 100%;          /* Batasi lebar container agar responsif */
}

.img-profile_ {
  max-width: 150px;         /* Sesuaikan ukuran gambar jika perlu */
  height: auto;             /* Agar gambar tidak terdistorsi */
  border-radius: 50%;       /* Membuat gambar tetap bulat */
}

.image-description_ {
  flex: 1;                  /* Memungkinkan deskripsi mengambil sisa ruang yang tersedia */
}

</style>
@endpush




@push('script')

@endpush
