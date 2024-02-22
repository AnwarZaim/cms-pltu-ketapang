<form action="{{ url($url, $id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    @csrf
    @method('delete')
    <button class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></button>
</form>