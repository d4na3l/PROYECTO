<?php include(__DIR__ . "/../../../../public/assets/includes/sidebar_client.php") ?>

<div id="loader"></div>
<div class="dashboard animate-bottom" style="display: none;" id="myDiv">
    <div class="client__mantenimiento">
    <div class="registro">
            <h1>Jesus Vivas</h1>
        </div>
    <div class="table__info">
        <div class="table__title">
            <h2 class="section__subtitle">Transacciones Registradas</h2>
            <form action="#">
                <input type="search" class="search">
                <button><img src="<?= ROOT ?>/assets/svg/search.svg" class="table__button" alt=""></button>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Transacción</th>
                    <th>Banco</th>
                    <th>Numero de cuenta</th>
                    <th>C/A</th>
                    <th>Monto</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    //Insertar codigo para hacer consulta a la bd y ver los datos del cliente
                    //Ejemplo usado con mysqli: 

                /* 
                    <?php
                        $query = "SELECT * FROM project_u ORDER BY id DESC";
                        $correo_total = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($correo_total)){ ?>
                            <tr>
                                <td><?php echo $row['fecha'] ?></td>
                                <td><?php echo $row['remitente'] ?></td>
                                <td><?php echo $row['piso_remitente'] ?></td>
                                <td><?php echo $row['destinatario'] ?></td>
                                <td><?php echo $row['piso_destinatario'] ?></td>
                                <td><?php echo $row['codigo'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']?>">Editar</a>
                                    <a href="delete.php?id=<?php echo $row['id']?>">Borrar</a>
                                </td>
                            </tr>
                        <?php }
                    ?>
                */
                ?>

                <!-- Ejemplo de como debería mostrarse los datos del cliente -->
                <tr>
                    <td><span>Retiro</span></td>
                    <td><span>Venezuela</span></td>
                    <td><span>01000185354996</span></td>
                    <td><span>Ahorro</span></td>
                    <td><span>Bs. 5.386,86</span></td>

                    <!-- Al igual que en el formulario, la etiqueta <a> cumple la misma funcion,
                        con la diferencia de editar o borrar directamente la informacion.

                        Del mismo modo puede ser reemplazado por un boton.-->

                    <td>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                    </td>
                </tr>
                <tr>
                    <td><span>Retiro</span></td>
                    <td><span>Venezuela</span></td>
                    <td><span>01000185354996</span></td>
                    <td><span>Ahorro</span></td>
                    <td><span>Bs. 3.126,42</span></td>
                    <td>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt=""></a>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td><span>Abono</span></td>
                    <td><span>Venezuela</span></td>
                    <td><span>01000185354996</span></td>
                    <td><span>Ahorro</span></td>
                    <td><span>Bs. 1.502,32</span></td>
                    <td>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt=""></a>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td><span>Abono</span></td>
                    <td><span>Venezuela</span></td>
                    <td><span>01000185354996</span></td>
                    <td><span>Ahorro</span></td>
                    <td><span>Bs. 10.782,96</span></td>
                    <td>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt=""></a>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td><span>Retiro</span></td>
                    <td><span>Venezuela</span></td>
                    <td><span>01000185354996</span></td>
                    <td><span>Ahorro</span></td>
                    <td><span>Bs. 3.126,42</span></td>
                    <td>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt=""></a>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td><span>Abono</span></td>
                    <td><span>Venezuela</span></td>
                    <td><span>01000185354996</span></td>
                    <td><span>Ahorro</span></td>
                    <td><span>Bs. 1.502,32</span></td>
                    <td>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt=""></a>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td><span>Abono</span></td>
                    <td><span>Venezuela</span></td>
                    <td><span>01000185354996</span></td>
                    <td><span>Ahorro</span></td>
                    <td><span>Bs. 10.782,96</span></td>
                    <td>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt=""></a>
                        <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt=""></a>
                    </td>
                </tr>
                <!-- Fin del ejemplo -->
            </tbody>
        </table>
    </div>
</div>

<?php include(__DIR__ . "/../../../../public/assets/includes/footer.php") ?>