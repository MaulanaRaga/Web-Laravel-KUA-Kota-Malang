@extends('layouts.sidebarheader-layanan')

    <div class="wireframe-layanan">
      <div class="div">
        @section('layanan')
        <div class="frame">
          <div class="frame-wrapper">
            <div class="frame-2">
              <div class="group">
                <a class="layanan-umum" href="{{ ('/layanan-umum') }}" >
                <img src="{{ asset('images/image-38.png') }}" />
                </a>
              </div>
              <div class="frame-3">
                <div class="layanan-umum">Layanan&nbsp;&nbsp;Umum</div>
                
                <p class="text-wrapper">
                  Layanan umum merujuk pada jenis layanan yang disediakan oleh pemerintah atau organisasi non-pemerintah
                  kepada masyarakat umum. Tujuannya adalah memenuhi kebutuhan dasar masyarakat dalam berbagai aspek
                  kehidupan sehari-hari. Layanan umum sering kali mencakup bidang seperti administrasi publik. Contoh
                  layanan umum meliputi berkas dan surat surat dalam pernikahan.
                </p>
              </div>
            </div>
          </div>
          <div class="frame-wrapper">
            <div class="frame-4">
              <div class="group-2">
                <a class="layanan-umum" href="{{ ('/layanan-pendaftaran') }}" >
                <img src="{{ asset('images/image 57.png') }}" />
                </a>
              </div>
              <div class="frame-5">
                <div class="text-wrapper-2">Layanan Pendaftaran Pernikahan</div>
                <p class="p">
                  Layanan pernikahan adalah layanan yang berkaitan dengan perencanaan, penyelenggaraan, dan koordinasi
                  pernikahan. Layanan ini disediakan oleh berbagai profesional pernikahan, seperti perencana pernikahan,
                  desainer, fotografer, katering, dan penyedia layanan dekorasi. Tujuan dari layanan pernikahan adalah
                  membantu pasangan yang akan menikah untuk merencanakan pernikahan mereka dengan lancar dan mengurangi
                  beban persiapan yang dapat mengganggu momen spesial mereka.
                </p>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </div>

@endsection