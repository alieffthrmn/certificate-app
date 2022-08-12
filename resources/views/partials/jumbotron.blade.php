
{{-- login --}}
<section class="login" style="margin-top: 95px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <img src="/img/alip.png" class="rounded mx-auto d-block mb-4" style="width: 150px">
                      <h3 class="text-center">Validasi Sertifikat</h3>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <form action="/sertifikat" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter Certificate ID" name="search" required>
                                <button class="btn btn-primary" type="submit">VALIDATE</button>
                            </div>
                            <small>ID Sertifikat dapat ditemukan di Sertifikat masing-masing.</small>
                            <hr>
                            <small class="lead"><a href="#" style="color: #34364a;">Login user!</a></small>
                        </form>
                      </blockquote>
                    </div>
                  </div>
            </div>
        </div>
        {{-- <div class="row justify-content-center bg-light" style="padding :50px;">
            <img src="/img/alip.png" style="width: 150px">
            <h1 class="mb-4 text-center">Verify a Certificate</h1>
                <div class="col-md-6">
                    <form action="/sertifikat" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Certificate ID" name="search" required>
                            <button class="btn btn-primary" type="submit">VALIDATE</button>
                        </div>
                    </form>
                </div>
        </div> --}}
    </div>
</section>