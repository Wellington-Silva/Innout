<main class="content">
    <?php
        render(
            'Relatório Mensal',
            'Acompanhe seu saldo de horas',
            'icofont-ui-calendar'
        );
    ?>
    <div>
        <table class="table table-bordered table-striped table-hover ">
            <thead>
                <th>Dia</th>
                <th>Entrada 1</th>
                <th>Saída 1</th>
                <th>Entrada 2</th>
                <th>Saída 2</th>
                <th>Saldo</th>
            </thead>

            <tbody>
                <?php foreach($report as $registry): ?>
                    <tr>
                        <td><?= formatDateWithLocale($registry->work_date, "EEEE, dd 'de' MMMM 'de' yyyy") ?></td>
                        <td><?= $registry->time1 ?></td>
                        <td><?= $registry->time2 ?></td>
                        <td><?= $registry->time3 ?></td>
                        <td><?= $registry->time4 ?></td>
                        <td><?= $registry->getBalance() ?></td>
                    </tr>
                <?php endforeach ?>
                <tr class="bg-primary text-white">
                    <td>Horas Trabalhadas</td>
                    <td colspan="3"><?= $sumOfWorkedTime ?></td>
                    <td>Saldo Mensal</td>
                    <td><?= $balance ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>