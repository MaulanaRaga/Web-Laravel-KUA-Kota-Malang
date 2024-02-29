@extends('layouts.sidebarheader')

<div class="wireframe-beranda">
    <div class="div">
      @section('beranda')
      <div class="text-wrapper-5">Berita</div>
      <div class="frame-4">
        <div class="frame-5">
          <div class="text-wrapper-6">KUA Blimbing
            </div></div>
        <div class="frame-2">
          <div class="layer">
            <div class="image-wrapper">
              <img class="img" src="{{ asset('images/berita.png') }}" /></div>
            <div class="text">
              <p class="text-wrapper">Mengetuk Pintu Langit dengan Istighasah</p>
              <p class="p">
                MTsN 2 Kota Malang – Jumat, 05 Mei 2023, bertempat di Masjid Al-Ikhlas MTsN 2 Kota Malang, do’a
                bersama dipanjatkan seluruh peserta didik kelas 9 didampingi orang tua masing masing, bapak ibu guru,
                dan tenaga kependidikan, menjelang AM / Asessmen Madrasah.
              </p>
            </div>
            <button class="button">
              <div class="text-wrapper-2">Read More
                </div>
              </button>
          </div>
          <div class="layer">
            <div class="image-wrapper">
              <img class="img" src="{{ asset('images/berita-2.png') }}" /></div>
            <div class="text">
              <p class="text-wrapper">Rezeki di Jumat Berkah sebagai Wujud Adanya Kerjasama</p>
              <p class="p">
                Kota Malang – (MIN 1) – Jumat berkah (05/05) MIN 1 Kota Malang mendapatkan bantuan Corporate Social
                Responsibility (CSR). Bantuan berupa satu unit server dari Bank BTN Syariah tersebut sebagai penunjang
                sarana pendidikan .
              </p>
            </div>
            <button class="button">
              <div class="text-wrapper-2">Read More
                </div>
              </button>
          </div>
          <div class="layer">
            <div class="image-wrapper">
              <img class="img" src="{{ asset('images/berita-3.png') }}" /></div>
            <div class="text">
              <p class="text-wrapper">Menuju Layanan Prima, Integritas Seksi PHU Tanpa Batas</p>
              <p class="p">
                Seksi Pengelolaan Haji dan Umrah (PHU) Kementerian Agama (Kemenag) Kota Malang melakukan koordinasi
                yang intensif dengan Petugas Haji Daerah (PHD) dalam upaya meningkatkan pelayanan publik yang
                berintegritas terutama pada persiapan Ibadah Haji tahun 2023.
              </p>
            </div>
            <a href="{{ url('/beranda-1') }}" class="button">
                <div class="text-wrapper-2">Read More
                    </div>
                </a>
          </div>
        </div>
      </div>

      <div class="overlap-group">
        <div class="frame-5">
          <div class="frame-2">
            <div class="layer">
              <div class="image-wrapper">
                <img class="img" src="{{ asset('images/berita.png') }}" /></div>
              <div class="text">
                <p class="text-wrapper">Mengetuk Pintu Langit dengan Istighasah</p>
                <p class="p">
                  MTsN 2 Kota Malang – Jumat, 05 Mei 2023, bertempat di Masjid Al-Ikhlas MTsN 2 Kota Malang, do’a
                  bersama dipanjatkan seluruh peserta didik kelas 9 didampingi orang tua masing masing, bapak ibu
                  guru, dan tenaga kependidikan, menjelang AM / Asessmen Madrasah.
                </p>
              </div>
              <button class="button">
                <div class="text-wrapper-2">Read More
                  </div>
                </button>
            </div>
            <div class="layer">
              <div class="image-wrapper">
                <img class="img" src="{{ asset('images/berita-2.png') }}" /></div>
              <div class="text-2">
                <p class="text-wrapper-3">Rezeki di Jumat Berkah sebagai Wujud Adanya Kerjasama</p>
                <p class="text-wrapper-4">
                  Kota Malang – (MIN 1) – Jumat berkah (05/05) MIN 1 Kota Malang mendapatkan bantuan Corporate Social
                  Responsibility (CSR). Bantuan berupa satu unit server dari Bank BTN Syariah tersebut sebagai
                  penunjang sarana pendidikan .
                </p>
              </div>
              <button class="button">
                <div class="text-wrapper-2">Read More
                  </div>
                </button>
            </div>
            <div class="layer">
              <div class="image-wrapper">
                <img class="img" src="{{ asset('images/berita-3.png') }}" /></div>
              <div class="text-2">
                <p class="text-wrapper-3">Menuju Layanan Prima, Integritas Seksi PHU Tanpa Batas</p>
                <p class="text-wrapper-4">
                  Seksi Pengelolaan Haji dan Umrah (PHU) Kementerian Agama (Kemenag) Kota Malang melakukan koordinasi
                  yang intensif dengan Petugas Haji Daerah (PHD) dalam upaya meningkatkan pelayanan publik yang
                  berintegritas terutama pada persiapan Ibadah Haji tahun 2023.
                </p>
              </div>
              <button class="button"><div class="text-wrapper-2">Read More</div></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection