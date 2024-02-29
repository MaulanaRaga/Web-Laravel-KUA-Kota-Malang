@extends('layouts.sidebarnavbar-agenda')

    <div class="wireframe-agenda">
      <div class="div">
        @section('agenda')
        <div class="frame">
          <div class="text-wrapper">Agenda</div>
          <p class="p">
            Berupa kumpulan kegiatan - kegiatan 'Kementrian Agama Kota Malang. kegiatan ini bertujuan untuk kesejahtraan
            masyarakat kota malang, demi membangun kota malang menjadi lebih baik dan menjadikan kota malang yang
            mempunyai toleransi antar agama.
          </p>
        </div>
        <div class="frame-2">
          <div class="card">
            <div class="div-wrapper">
              <a href="{{ url('/agenda-video')}}">
              <div class="heroicons-solid-play-wrapper">
                <img src="{{ asset('images/youtube.jpg') }}" />
                <div class="heroicons-solid-play">
                  </div></a>
                </div>
            <div class="frame-3">
              <p class="text-wrapper-2">Kemenag Geber Sertifikasi Tanah KUA</p>
              <p class="kementerian-agama">
                <span class="span"
                  >Kementerian Agama Kota Malang bersama Badan Pertanahan Nasional Kota Malang melakukan pengukuran
                  Tanah Hibah dari Pemerintah Daerah Kota Malang untuk tiga Kantor Urusan Agama, Rabu (24/02/22). Secara
                  simbolis tanah hibah ini telah di serahkan pada 24 Januari 2022 di MtsN 1 Malang (baca juga: tiga kua
                  resmi berdiri diatas tanah milik kemenag)</span
                >
              </p>
            </div>
            </div>
          </div>
          <div class="card-2">
            <div class="div-wrapper">
              <a href="{{ url('/agenda-video')}}">
              <div class="heroicons-solid-play-wrapper">
                <img src="{{ asset('images/youtube.jpg') }}" />
                <div class="heroicons-solid-play">
                  </div></a>
                </div>
            </div>
            <div class="frame-3">
              <p class="text-wrapper-2">Kemenag Geber Sertifikasi Tanah KUA</p>
              <p class="kementerian-agama">
                <span class="span"
                  >Kementerian Agama Kota Malang bersama Badan Pertanahan Nasional Kota Malang melakukan pengukuran
                  Tanah Hibah dari Pemerintah Daerah Kota Malang untuk tiga Kantor Urusan Agama, Rabu (24/02/22). Secara
                  simbolis tanah hibah ini telah di serahkan pada 24 Januari 2022 di MtsN 1 Malang (baca juga: tiga kua
                  resmi berdiri diatas tanah milik kemenag)</span
                >
              </p>
            </div>
          </div>
          <div class="card-2">
            <div class="div-wrapper">
              <a href="{{ url('/agenda-video')}}">
              <div class="heroicons-solid-play-wrapper">
                <img src="{{ asset('images/youtube.jpg') }}" />
                <div class="heroicons-solid-play">
                  </div></a>
                </div>
            </div>
            <div class="frame-3">
              <p class="text-wrapper-2">Kemenag Geber Sertifikasi Tanah KUA</p>
              <p class="kementerian-agama">
                <span class="span"
                  >Kementerian Agama Kota Malang bersama Badan Pertanahan Nasional Kota Malang melakukan pengukuran
                  Tanah Hibah dari Pemerintah Daerah Kota Malang untuk tiga Kantor Urusan Agama, Rabu (24/02/22). Secara
                  simbolis tanah hibah ini telah di serahkan pada 24 Januari 2022 di MtsN 1 Malang (baca juga: tiga kua
                  resmi berdiri diatas tanah milik kemenag)</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="frame-4">
          <img class="mask-group" src="https://c.animaapp.com/szxDSDao/img/mask-group-3@2x.png" />
          <img class="mask-group" src="https://c.animaapp.com/szxDSDao/img/mask-group-2@2x.png" />
          <img class="mask-group" src="https://c.animaapp.com/szxDSDao/img/mask-group-1@2x.png" />
          <img class="mask-group" src="https://c.animaapp.com/szxDSDao/img/mask-group@2x.png" />
        </div>
    @endsection
