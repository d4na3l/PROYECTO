<?php include(__DIR__ . "/../../../../public/assets/includes/sidebar_admin.php") ?>

<div id="loader"></div>
<div class="dashboard animate-bottom" style="display: none;" id="myDiv">
    <div class="analyst_mantenimiento">
        <div class="registro">
            <h2>Nueva Transacción</h2>
            <form id="" method="POST" autocomplete='off'>
                <table>
                    <thead>
                        <tr>
                            <th>Cedula</th>
                            <th>Monto</th>
                            <th>Transacción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="td-input" name="cedula" id="" required></td>
                            <td><input type="text" class="td-input" name="monto" id="" required></td>
                            <td>
                                <select class="td-input" name="transaccion" id="" required>
                                    <option value="" active>Seleccione</option>
                                    <option value="ingreso">Ingreso</option>
                                    <option value="egreso">Egreso</option>
                                </select>
                            </td>
                            <td><button>Guardar</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
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
                        <th>Cedula</th>
                        <th>Monto</th>
                        <th>Transacción</th>
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
                        <td><span>24933180</span></td>
                        <td><span>200.000,00</span></td>
                        <td><span>Ingreso</span></td>

                        <!-- Al igual que en el formulario, la etiqueta <a> cumple la misma funcion,
                            con la diferencia de editar o borrar directamente la informacion.

                            Del mismo modo puede ser reemplazado por un boton.-->

                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>24933180</span></td>
                        <td><span>175.000,00</span></td>
                        <td><span>Ingreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>10110723</span></td>
                        <td><span>250.000,00</span></td>
                        <td><span>Egreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>24933180</span></td>
                        <td><span>175.000,00</span></td>
                        <td><span>Ingreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>10110723</span></td>
                        <td><span>250.000,00</span></td>
                        <td><span>Egreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>24933180</span></td>
                        <td><span>175.000,00</span></td>
                        <td><span>Ingreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>10110723</span></td>
                        <td><span>250.000,00</span></td>
                        <td><span>Egreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>24933180</span></td>
                        <td><span>175.000,00</span></td>
                        <td><span>Ingreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>10110723</span></td>
                        <td><span>250.000,00</span></td>
                        <td><span>Egreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>24933180</span></td>
                        <td><span>175.000,00</span></td>
                        <td><span>Ingreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <tr>
                        <td><span>10110723</span></td>
                        <td><span>250.000,00</span></td>
                        <td><span>Egreso</span></td>
                        <td>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/edit.svg" class="table__button btn-edit" alt="Editar"></a>
                            <a href="#"><img src="<?= ROOT ?>/assets/svg/delete.svg" class="table__button btn-delete" alt="Eliminar"></a>
                        </td>
                    </tr>
                    <!-- Fin del ejemplo -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include(__DIR__ . "/../../../../public/assets/includes/footer.php") ?>