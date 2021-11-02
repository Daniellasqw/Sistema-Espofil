<div class="col-md-2">
<!--
A ESPERA DE UMA UTILIDADE
Para tabelas com mais campos devemos remover o sidebar da view para deixar uma área maior para os mesmos
-->
    <div class="card">
        <div class="card-header">
            Menu
        </div>

        <div class="card-body">
      @role ('super')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/users') }}">
                        - Usuários
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/roles') }}">
                        - Funções
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/permissions') }}">
                        - Permissões
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/clients') }}">
                        - Clientes
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/empresas') }}">
                        - Empresas
                    </a>
                </li>
            </ul>

            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/compras') }}">
                        - Compras
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/users/create') }}">
                    <!--<a href="{{ url('/admin/users/create') }}"-->
                        - Registrar Usuário
                    </a>
                </li>
            </ul>
      @endrole
      @role('admin')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/users') }}">
                        - Usuários
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/roles') }}">
                        - Funções
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/permissions') }}">
                        - Permissões
                    </a>
                </li>
            </ul>
      @endrole
      @role('manager')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/clients') }}">
                        - Clientes
                    </a>
                </li>
            </ul>
      @endrole
      @role('user')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/admin/clients') }}">
                        - Clientes
                    </a>
                </li>
            </ul>
      @endrole
        </div>
    </div>
</div>
