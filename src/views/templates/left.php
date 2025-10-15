<aside class="side-bar">
    <nav class="menu mt-3">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="<?= BASE_URL . '/day_records' ?>">
                    <i class="icofont-ui-check mr-2"></i>
                    Registrar ponto
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL . '/monthly_report' ?>">
                    <i class="icofont-ui-calendar mr-2"></i>
                    Registrar Mensal
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL . '/manager_report' ?>">
                    <i class="icofont-chart-histogram mr-2"></i>
                    Registrar Gerencial
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= BASE_URL . '/users' ?>">
                    <i class="icofont-users mr-2"></i>
                    Usuários
                </a>
            </li>
        </ul>
    </nav>
    <div class="sidebar-widgets">
        <div class="sidebar-widget">
            <i class="icon icofont-hour-glass text-primary"></i>
            <div class="info">
                <span class="main text-primary"
                    <?= $activeClock === 'workedInterval' ? 'active-clock' : '' ?>>
                    <?= $workedInterval ?>
                </span>
                <span class="label text-muted">
                    Horas trabalhadas
                </span>
            </div>
        </div>
        <div class="division my-3">
            <div class="sidebar-widget">
            <i class="icon icofont-ui-alarm text-danger"></i>
            <div class="info">
                <span class="main text-danger"
                    <?= $activeClock === 'exitTime' ? 'active-clock' : '' ?>>
                    <?= $exitTime ?>
                </span>
                <span class="label text-muted">
                    Hora de saída
                </span>
            </div>
        </div>
        </div>
    </div>
</aside>