@extends('layouts.sidebarheader-layanan-umum')

   <div class="wireframe-layanan-umum">
      <div class="div">
        @section('layanan-umum')
        <div class="conten">
          <div class="layer">
            <div class="frame-6">
              <p class="p">Layanan Pemeriksaan Calon dan Pengantin WALI</p>
              <img class="ellipse-2" src="{{ asset('images/ellipse-368.png') }}" />
              <button class="button">
                <div class="text-wrapper-2">Daftar</div>
              </button>
            </div>
          </div>
          <div class="layer">
            <div class="frame-6">
              <div class="text-wrapper-3">Layanan Cetak Buku Nikah</div>
              <img class="ellipse-2" src="{{ asset('images/ellipse-368-2.png') }}" />
              <button class="button">
                <div class="text-wrapper-2">Daftar</div>
              </button>
            </div>
          </div>
          <div class="layer">
            <div class="frame-6">
              <div class="text-wrapper-4">Layanan Akad Nikah</div>
              <img class="ellipse-2" src="{{ asset('images/ellipse-368-3.png') }}" />
              <button class="button">
                <div class="text-wrapper-2">Daftar</div>
              </button>
            </div>
          </div>
        </div>
        <div class="conten-2">
          <div class="layer">
            <div class="frame-6">
              <div class="text-wrapper-5">Layanan Legalisir Buku Nikah</div>
              <img class="ellipse-2" src="{{ asset('images/ellipse-368.png') }}" />
              <button class="button">
                <div class="text-wrapper-2">Daftar</div>
              </button>
            </div>
          </div>
          <div class="layer">
            <div class="frame-6">
              <div class="text-wrapper-6">Layanan Rekomendasi/Pindah Nikah</div>
              <img class="ellipse-2" src="{{ asset('images/ellipse-368-2.png') }}" />
              <button class="button">
                <div class="text-wrapper-2">Daftar</div>
              </button>
            </div>
          </div>
          <div class="layer">
            <div class="frame-6">
              <div class="text-wrapper-6">Layanan Surat Masuk</div>
              <img class="ellipse-2" src="{{ asset('images/ellipse-368-3.png') }}" />
              <button class="button">
                <div class="text-wrapper-2">Daftar</div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection