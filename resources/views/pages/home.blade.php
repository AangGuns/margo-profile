@extends('layouts.frontend.master')
@section('content')

<!-- Main Section -->
<main>
        <article class="main-container">
            <div class="main-content">
                <h1>Bukan Sampah Namanya Kalau Bisa Dijual</h1>
                <!-- <h2>TECHNOLOGY</h2> -->
                <p>Bagaimana caranya? <br>Mari ke Margo Rosok.</p>
            </div>
            <div class="main-img--container">
                <img src="https://i.ibb.co/1dq7hq7/waste-4326821-1280.png" alt="pic" id="main-img">
            </div>
        </article>
        <article id="tentang" class="detail-container">
            <div class="detail-content">
                <p>Margo Rosok adalah tempat penampung barang bekas yang memenuhi ruangan anda,
                    kami akan tukar barang-barang tersebut dengan uang yang nantinya akan memenuhi ruang dompet Anda.
                </p>
            </div>
        </article>
        <article id="barang" class="product-container">
            <div class="product-content">
                <h1>Barang bekas yang paling kami cari</h1>
                <div class="product-list">
                    <div class="product-card">
                        <div class="product-detail">
                            <h2>Besi</h2>
                            <p>Material yang bisa didaur ulang dengan harga tinggi</p>
                        </div>
                    </div>
                    <div class="product-card">
                        <h2>Kertas</h2>
                        <p>Material yang nantinya diolah menjadi duplex</p>
                    </div>
                    <div class="product-card">
                        <h2>Plastik</h2>
                        <p>Material yang akan didaur ulang menjadi biji plastik</p>
                    </div>
                </div>
                <button class="product-btn"><a href="/">Selengkapnya</a></button>
            </div>
        </article>
        <aside>
            <h1>Biodata Diri</h1>
            <div class="aside-container">
                <div class="aside-img--container">
                    <img src="https://i.ibb.co/MydBHCd/46-biru.jpg" alt="pic" id="main-img">
                </div>
                <div class="aside-content">
                    <h1>Anggun Wahyu Andriyanto</h1>
                    <p>S1 Informatika <br>Universitas AMIKOM Yogyakarta</p>
                </div>
            </div>
        </aside>
    </main>

@stop
    
    