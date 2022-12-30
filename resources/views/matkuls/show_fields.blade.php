<!-- Nama Matkul Field -->
<div class="col-sm-12">
    {!! Form::label('nama_matkul', 'Nama Matkul:') !!}
    <p>{{ $matkul->nama_matkul }}</p>
</div>

<!-- Dosen Field -->
<div class="col-sm-12">
    {!! Form::label('dosen', 'Dosen:') !!}
    <p>{{ $matkul->dosen }}</p>
</div>

<!-- Sks Field -->
<div class="col-sm-12">
    {!! Form::label('sks', 'Sks:') !!}
    <p>{{ $matkul->sks }}</p>
</div>

<!-- Jumlah Mahasiswa Field -->
<div class="col-sm-12">
    {!! Form::label('jumlah_mahasiswa', 'Jumlah Mahasiswa:') !!}
    <p>{{ $matkul->jumlah_mahasiswa }}</p>
</div>

<!-- Ruangan Field -->
<div class="col-sm-12">
    {!! Form::label('ruangan', 'Ruangan:') !!}
    <p>{{ $matkul->ruangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $matkul->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $matkul->updated_at }}</p>
</div>

