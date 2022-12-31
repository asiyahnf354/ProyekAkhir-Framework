<div class="table-responsive">
    <table class="table" id="matkuls-table">
        <thead>
        <tr>
        <th>Nama Matkul</th>
        <th>Dosen</th>
        <th>SKS</th>
        <th>Jumlah Mahasiswa</th>
        <th>Ruangan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($matkuls as $matkul)
            <tr>
                <td>{{ $matkul->nama_matkul }}</td>
            <td>{{ $matkul->dosen }}</td>
            <td>{{ $matkul->sks }}</td>
            <td>{{ $matkul->jumlah_mahasiswa }}</td>
            <td>{{ $matkul->ruangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['matkuls.destroy', $matkul->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matkuls.show', [$matkul->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('matkuls.edit', [$matkul->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
