@extends('layouts.app')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Surat Keterangan Catatan Kriminal</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Nama</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    placeholder="Nama Lengkap" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Tempat, Tanggal Lahir</label>
                                <input type="text" class="form-control" id="basic-default-company"
                                    placeholder="Tempat, tanggal-bulan-tahun" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-email">Jenis Kelamin</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email" class="form-control"
                                        placeholder="Laki-laki/Perempuan" aria-label="john.doe"
                                        aria-describedby="basic-default-email2" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Agama</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="agama" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Status Perkawinan</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="kawin/belum kawin" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Pekerjaan</label>
                                <input type="text" id="basic-default-phone" class="form-control phone-mask"
                                    placeholder="pekerjaan" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Alamat</label>
                                <textarea id="basic-default-message" class="form-control" placeholder="alamat lengkap"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Priview Surat</h5>
                        <small class="text-muted float-end">Hasil Surat</small>
                    </div>
                    <iframe src="{{ asset('storage/9.-surat-keterangan-skck.pdf') }}" width="100%"
                        height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
