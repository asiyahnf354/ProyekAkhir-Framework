<!-- Nama Matkul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_matkul', 'Nama Matkul:') !!}
    {!! Form::text('nama_matkul', null, ['class' => 'form-control']) !!}
</div>

<!-- Dosen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dosen', 'Dosen:') !!}
    {!! Form::text('dosen', null, ['class' => 'form-control']) !!}
</div>

<!-- Sks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sks', 'Sks:') !!}
    {!! Form::number('sks', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_mahasiswa', 'Jumlah Mahasiswa:') !!}
    {!! Form::text('jumlah_mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruangan', 'Ruangan:') !!}
    {!! Form::text('ruangan', null, ['class' => 'form-control']) !!}
</div>