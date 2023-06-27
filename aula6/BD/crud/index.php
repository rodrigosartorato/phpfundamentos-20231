<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Funcionários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>CRUD de Funcionários</h2>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEmployeeModal">
            Adicionar Funcionário
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir arquivo de configuração e classe de funcionário
                require_once 'config.php';
                require_once 'Employee.php';

                // Instanciar objeto Employee
                $employee = new Employee();

                // Buscar todos os funcionários
                $employees = $employee->getAllEmployees();

                // Loop através dos funcionários e exibição na tabela
                foreach ($employees as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>";
                    echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editEmployeeModal' data-id='" . $row['id'] . "' data-name='" . $row['name'] . "' data-email='" . $row['email'] . "'>Editar</button> ";
                    echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteEmployeeModal' data-id='" . $row['id'] . "'>Excluir</button>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Adicionar Funcionário -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEmployeeModalLabel">Adicionar Funcionário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_employee.php" method="post">
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Funcionário -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEmployeeModalLabel">Editar Funcionário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_employee.php" method="post">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="form-group">
                            <label for="edit_name">Nome:</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_email">Email:</label>
                            <input type="email" class="form-control" id="edit_email" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Excluir Funcionário -->
    <div class="modal fade" id="deleteEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteEmployeeModalLabel">Excluir Funcionário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete_employee.php" method="post">
                        <input type="hidden" id="delete_id" name="id">
                        <p>Você tem certeza que deseja excluir este funcionário?</p>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        // Preencher dados do modal de edição ao clicar no botão "Editar"
        $('#editEmployeeModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var name = button.data('name');
            var email = button.data('email');
            var modal = $(this);
            modal.find('.modal-title').text('Editar Funcionário #' + id);
            modal.find('#edit_id').val(id);
            modal.find('#edit_name').val(name);
            modal.find('#edit_email').val(email);
        });

        // Preencher ID do funcionário a ser excluído ao clicar no botão "Excluir"
        $('#deleteEmployeeModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var modal = $(this);
            modal.find('#delete_id').val(id);
        });
    </script>
</body>
</html>
