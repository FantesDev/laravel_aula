<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('site.principal') }}">
            <a class="navbar-brand" href="{{ route('site.principal') }}">
    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='2rem' height='2rem' viewBox='0 0 24 24'%3E%3Cmask id='lineMdGithubLoop0' width='24' height='24' x='0' y='0'%3E%3Cg fill='%23fff'%3E%3Cellipse cx='9.5' cy='9' rx='1.5' ry='1'/%3E%3Cellipse cx='14.5' cy='9' rx='1.5' ry='1'/%3E%3C/g%3E%3C/mask%3E%3Cg fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'%3E%3Cpath stroke-dasharray='30' stroke-dashoffset='30' d='M12 4C13.6683 4 14.6122 4.39991 15 4.5C15.5255 4.07463 16.9375 3 18.5 3C18.8438 4 18.7863 5.21921 18.5 6C19.25 7 19.5 8 19.5 9.5C19.5 11.6875 19.017 13.0822 18 14C16.983 14.9178 15.8887 15.3749 14.5 15.5C15.1506 16.038 15 17.3743 15 18C15 18.7256 15 21 15 21M12 4C10.3317 4 9.38784 4.39991 9 4.5C8.47455 4.07463 7.0625 3 5.5 3C5.15625 4 5.21371 5.21921 5.5 6C4.75 7 4.5 8 4.5 9.5C4.5 11.6875 4.98301 13.0822 6 14C7.01699 14.9178 8.1113 15.3749 9.5 15.5C8.84944 16.038 9 17.3743 9 18C9 18.7256 9 21 9 21'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' dur='0.3s' values='30;0'/%3E%3C/path%3E%3Cpath stroke-dasharray='10' stroke-dashoffset='10' d='M9 19'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' begin='0.35s' dur='0.1s' values='10;0'/%3E%3Canimate attributeName='d' dur='1.5s' repeatCount='indefinite' values='M9 19c-1.406 0-2.844-.563-3.688-1.188C4.47 17.188 4.22 16.157 3 15.5;M9 19c-1.406 0-3-.5-4-.5-.532 0-1 0-2-.5;M9 19c-1.406 0-2.844-.563-3.688-1.188C4.47 17.188 4.22 16.157 3 15.5'/%3E%3C/path%3E%3C/g%3E%3Crect width='8' height='4' x='8' y='11' fill='%23fff' mask='url(%23lineMdGithubLoop0)'%3E%3Canimate attributeName='y' dur='5s' keyTimes='0;0.45;0.46;0.54;0.55;1' repeatCount='indefinite' values='11;11;7;7;11;11'/%3E%3C/rect%3E%3C/svg%3E" alt="Logo da Empresa">
    Laravel Aula
</a>


            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('site.principal') }}">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('site.sobrenos') }}">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('site.contato') }}">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('app.clientes') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('app.produtos') }}">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('app.fornecedores') }}">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('site.login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>