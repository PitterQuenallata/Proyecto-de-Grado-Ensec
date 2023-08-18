<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
            
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Administrar Estudiantes</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th class="avatar">Avatar</th>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Carnet</th>
                                                    <th>Quantity</th>
                                                    <th>Editars</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<!-- 
                                                    <button type="button" class="btn btn-warning btn-sm">Editar</button>
                                                    <button type="button" class="btn btn-danger btn-sm">Eliminar</button> -->

                                                <?php
                                                $item = null;
                                                $valor = null;
                                                $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                                                foreach ($usuarios as $key => $usuario) {
                                                    echo '<tr>';
                                                    echo '<td>' . $usuario['id'] . '</td>';
 
                                                    // Agrega más columnas según la estructura de tu tabla de usuarios
                                                    echo '<td><button type="button" class="btn btn-warning btn-sm">Editar</button></td>';
                                                    echo '<td><button type="button" class="btn btn-danger btn-sm">Eliminar</button></td>';
                                                    echo '</tr>';
                                                }

                                                ?>
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->


                    </div>
                </div>
                <!-- /.orders -->
                
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->