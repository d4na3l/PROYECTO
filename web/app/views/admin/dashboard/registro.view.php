<?php include(__DIR__ . "/../../../../public/assets/includes/admin_sidebar.php") ?>

<div class="panel panel-dashboard">
    <div class="mantenimiento">
        <h2 class="section__subtitle">Mis Datos</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Email</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jesus</td>
                    <td>Vivas</td>
                    <td>24933180</td>
                    <td>jesusvivas018@gmail.com</td>
                    <td>admin</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="panel panel-registro">
    <div class="mantenimiento">
        <div class="registro">
            <h2 class="section__subtitle">Registrar Nuevo Usuario</h2>
            <form id="" method="POST" autocomplete='off'>
                <table>
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="td-input" name="cedula" id="" required></td>
                            <td><input type="text" class="td-input" name="email" id="" required></td>
                            <td><select class="td-input" name="role" id="" required>
                                    <option value="" active>Seleccione</option>
                                    <option value="admin">Administrador</option>
                                    <option value="analyst">Analista</option>
                                    <option value="client">Cliente</option>
                                </select></td>
                            <td><button>Guardar</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/../../../../public/assets/includes/footer.php") ?>