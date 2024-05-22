<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{--  start carousel  --}}
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://api.stroom.id/v1/file/asset/load/png/8a8ppm6lrc" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://api.stroom.id/v1/file/asset/load/png/5xi3d3jftd" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://api.stroom.id/v1/file/asset/load/jpg/fonj7zzggz" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{--  end carousel  --}}

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">Layanan Product</h1>
                        {{--  <a href="{{ route('admin/products/create') }}" class="btn btn-primary">Add product</a>  --}}
                    </div>
                    <hr />
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif


                    <div class="container my-4">
                        <div class="row">
                            @forelse ($products as $product)
                                <div class="col-md-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ $product->image }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $product->title }}</h5>
                                            <p class="card-text">Some quick example text to build on the card title
                                                and make
                                                up
                                                the bulk of the cards content.</p>
                                            <p class="card-text">kategori: {{ $product->category }}</p>

                                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5">Product not Found</td>
                                </tr>
                            @endforelse

                        </div>
                    </div>




                </div>
            </div>
            {{--  start card text  --}}
            <div class="card mb-3" style="max-width: 1540px;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">Kehadiran PLN Icon Plus sebagai Anak Perusahaan PT PLN (Persero)
                                mengemban misi untuk memenuhi kebutuhan dan harapan Pemangku Kepentingan dalam
                                penyediaan solusi-solusi teknologi informasi dan komunikasi (TIK). Hal ini tidak
                                hanya
                                terbatas pada penyediaan layanan yang handal bagi pelanggan, tetapi juga pada
                                kontribusi
                                aktif perusahaan bagi perkembangan telekomunikasi nasional. Dalam mewujudkan misi
                                tersebut, PLN Icon Plus secara proaktif melakukan peningkatan kapasitas dan
                                perluasan
                                jaringan sehingga dapat memperluas jangkauan pelayanan perusahaan</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="http://plniconplus.co.id/wp-content/uploads/2017/08/figure-1.jpg"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 1540px;">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="http://plniconplus.co.id/wp-content/uploads/2017/08/figure-2.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <p class="card-text">Transformasi PLN Icon Plus dari penyedia jaringan komunikasi
                                    menjadi penyedia solusi ICT merupakan langkah yang diambil untuk menjawab
                                    tantangan
                                    era globalisasi saat ini, dan menjadi jawaban atas semua permasahan ICT bagi
                                    industri yang membutuhkan konektivitas dan solusi ICT yang handal di seluruh
                                    pelosok
                                    Nusantara. Komitmen PLN Icon Plus ini didukung oleh jaringan full fiber optic
                                    dengan
                                    memanfaatkan aset strategis PLN (ROW) serta sumber daya manusia yang sangat
                                    kompeten
                                    di bidangnya, menjadikan PLN Icon Plus sebagai mitra bisnis strategis bagi lebih
                                    dari 2.200 pelanggan setianya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-4 box1 pt-4">
                    <div class="span8">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                    </div>
                    <a href="tel:+123456789"><i class="fas fa-phone fa-3x"></i>
                        <h3 class="d-none d-lg-block d-xl-block">Alamat 1</h3>
                        <p class="d-none d-lg-block d-xl-block">+123456789</p>
                    </a>
                </div>
                <div class="col-4 box2 pt-4">
                    <div class="span8">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                    </div>
                    <a href=""><i class="fas fa-home fa-3x"></i>
                        <h3 class="d-none d-lg-block d-xl-block">Alamat 2</h3>
                        <p class="d-none d-lg-block d-xl-block">Piazza del Colosseo, 1, 00184 Roma RM</p>
                    </a>
                </div>
                <div class="col-4 box3 pt-4">
                    <div class="span8">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
                    </div>
                    <a href="mailto:test@test.com"><i class="fas fa-envelope fa-3x"></i>
                        <h3 class="d-none d-lg-block d-xl-block">Alamat 3</h3>
                        <p class="d-none d-lg-block d-xl-block">test@test.com</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
