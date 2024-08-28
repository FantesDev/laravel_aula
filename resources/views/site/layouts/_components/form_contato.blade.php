{{ $slot }}

<form action="{{ route('site.contato') }}" method="post" class="{{ $dark }} p-4 border rounded shadow-sm">
    @csrf
    <h2 class="mb-4">Formulário de Contato</h2>
    <div class="mb-3">
        <label for="nome" class="form-label text-white">Nome Completo</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label text-white">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label text-white">Telefone</label>
        <input class="form-control" id="telefone" name="telefone"  required></input>
    </div>

    <div class="mb-3">
        <label for="motivo" class="form-label text-white">Motivo do Contato</label>
        <select name="motivo" id="motivo" class="form-select" required>
            <option value="" disabled selected>Escolha uma opção</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="mensagem" class="form-label text-white">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
    </div>

    

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
