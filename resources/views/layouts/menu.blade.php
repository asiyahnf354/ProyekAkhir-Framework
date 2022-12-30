
<li class="nav-item">
    <a href="{{ route('mahasiswas.index') }}"
       class="nav-link {{ Request::is('mahasiswas*') ? 'active' : '' }}">
        <p>Mahasiswa</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('dosens.index') }}"
       class="nav-link {{ Request::is('dosens*') ? 'active' : '' }}">
        <p>Dosen</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('matkuls.index') }}"
       class="nav-link {{ Request::is('matkuls*') ? 'active' : '' }}">
        <p>Mata Kuliah</p>
    </a>
</li>


