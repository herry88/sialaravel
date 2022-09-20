@extends('master')

@section('title')
    <title>Create Page</title>
@endsection

@section('content-master')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Create Tahun Akademik</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tahun-akademik.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama Tahun akademik</td>
                                    <td><input type="text" name="nmtahunakademik" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td><input type="text" name="keterangan" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
