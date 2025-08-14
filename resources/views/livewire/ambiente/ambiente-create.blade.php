<div style="margin-top: 25px; margin-bottom: 75px" class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 600px;">
        <h3 class="text-success text-center mb-4">
            <i class="bi bi-pencil-square me-2"></i>Criar Ambiente
        </h3>

        @if (session()->has('message'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                <div>{{ session('message') }}</div>
            </div>
        @endif

        <form wire:submit.prevent="store">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" wire:model="nome" class="form-control" placeholder="insira o nome do ambiente" required>
                @error('nome') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Descricao</label>
                <input type="text" wire:model="descricao" class="form-control"  required>
                @error('descricao') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>

                <select class="form-select @error('status') is-invalid @enderror" id="status" wire:model.defer="status">
                    <option hidden>Status</option>
                    <option value=1>ativo</option>
                    <option value=0>inativo</option>
                </select>


            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-save2 me-2"></i>Cadastrar
            </button>

            <div class="mt-4 d-flex justify-content-between">
                {{-- <a href="{{ route('aluno.index') }}" class="btn btn-success text-white  px-4 w-100">
                    <i style="color: white" class="bi bi-arrow-left-circle"></i> Voltar
                </a>
            </div> --}}
           
               
            
        </form>
    </div>
</div>