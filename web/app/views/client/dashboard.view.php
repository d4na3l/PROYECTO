<?php include(__DIR__ . "/../../../public/assets/includes/sidebar_client.php") ?>

<div id="loader"></div>
<div class="dashboard animate-bottom" style="display: none;" id="myDiv">
<section>Informacion del perfil</section>
    <section class="info_client">
        <h1>Cliente</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Banco</th>
                    <th>Numero de cuenta</th>
                    <th>Tipo de cuenta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maria</td>
                    <td>Lopez</td>
                    <td>Banco Mercantil</td>
                    <td>1324123412341234</td>
                    <td>Cuenta de debito</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="info_bank">
        <h1>Estados financieros</h1>
        <table>
            <thead>
                <tr>
                    <th>Aporte</th>
                    <th>Intereses</th>
                    <th>Otros</th>
                    <th>Gastos Administrativos</th>
                    <th>Gastos por comision</th>
                    <th>Gastos por inversion</th>
                    <th>Gastos comunes</th>
                    <th>Balance total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>15000</td>
                    <td>750</td>
                    <td>300</td>
                    <td>150</td>
                    <td>75</td>
                    <td>300</td>
                    <td>150</td>
                    <td>17500</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>


<?php include(__DIR__ . "/../../../public/assets/includes/footer.php") ?>
