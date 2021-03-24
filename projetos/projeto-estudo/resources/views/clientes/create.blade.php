<h3>create</h3>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="name">
    <button type="submit">Salvar</button>
</form>