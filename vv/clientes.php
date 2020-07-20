<?php
require_once("header.php");
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Pesquisar..." aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Add Produtos -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" title="Add Produtos" data-toggle="modal"
        data-target=".bd-example-modal-lg-produto">
          <i class="fas fa-cart-plus"></i>
        </a>
      </li>
      <!-- Add Funcionário -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" title="Add cliente" data-toggle="modal"
        data-target=".bd-example-modal-lg">
          <i class="fas fa-user-plus"></i>
        </a>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../assets/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-- Logout -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="../logout.php" title="Sair">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../assets/dist/img/crm.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Fincorp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nome_user']; ?></a>
          <span class="access_level"><?php echo $_SESSION['access_level']; ?></span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat nav-legacy flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="fas fa-home nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Produtos-OS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Fornecedores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Ordem de serviço
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Ordem de serviço</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Cadastro-OS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="clientes.php" class="nav-link active">
                  <i class="nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon"></i>
                  <p>Funcionários</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">CONTROLE DE CAIXA</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>Caixa</p>
            </a>
          </li>
          <li class="nav-header">FINANCEIRO</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>Controle de venda</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Controle de produtos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Anotações</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>Relatório</p>
            </a>
          </li>
          <li class="nav-header">SUPORTE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>Central de Suporte</p>
            </a>
          </li>
          <li class="nav-header">CONFIGURAÇÕES & SAIR</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Configurações</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Sair</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="#" class="btn btn-secondary" data-toggle="modal"
          data-target=".bd-example-modal-lg"><i class="material-icons">&#xE147;</i> <span>Add Novo Cliente</span></a>
          <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Exporta dados para o Excel</span></a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Cadastros de Clientes</h3>
</div>
<!-- /.card-header -->
<div class="card-body">

<!--LISTAR TODOS OS CLIENTES -->

<?php


if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != ''){
    $nome = $_GET['txtpesquisar'] . '%';
    $query = "select * from tb_clientes where nome LIKE '$nome'  order by nome asc"; 
}else if(isset($_GET['buttonPesquisarCPF']) and $_GET['txtpesquisarcpf'] != ''){
    $nome = $_GET['txtpesquisarcpf'];
    $query = "select * from tb_clientes where cpf = '$nome'  order by nome asc"; 
}

else{ 
$query = "select * from tb_clientes order by nome asc"; 
}

    $result = mysqli_query($conn, $query);
    //$dado = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);

if($row == ''){

    echo "<h3> Não existem dados cadastrados no banco </h3>";

}else{

?>

<table id="example1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>Nome</th>
    <th>CPF</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>Ação</th>
  </tr>
  </thead>
  <tbody>

  <?php 

    while($res_1 = mysqli_fetch_array($result)){
        $nome = $res_1["nome"];
        $telefone = $res_1["telefone"];
        $endereco = $res_1["endereco"];
        $cidade = $res_1["cidade"];
        $email = $res_1["email"];
        $cpf = $res_1["cpf"];
        $data = $res_1["dt_registro"];
        $id_cliente = $res_1["id_cliente"];

        $data2 = implode('/', array_reverse(explode('-', $data)));

    ?>

  <tr>
    <td><?php echo $nome; ?></td>
    <td><?php echo $cpf; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $telefone; ?></td>
    <td><?php echo $endereco; ?></td>
    <td><?php echo $cidade; ?></td>
    <td><div class="widget-content-right">
    <a href="clientes.php?func=edita&id_cliente=<?php echo $id_cliente; ?>"><button class="border-0 btn-transition btn btn-outline-success" data-toggle="modal"
    data-target=".bd-example-modal-lg-editar"><i class="fa fa-edit"></i>
    </button></a>
    <a href="clientes.php?func=deleta&id_cliente=<?php echo $id_cliente; ?>"><button class="border-0 btn-transition btn btn-outline-danger">
    <i class="fa fa-trash-alt"></i>
    </button></a>
    </div></td>
  </tr>
  <?php 
        }                        
    ?>
  </tbody>
  <tfoot>
  <tr>
    <th>Nome</th>
    <th>CPF</th>
    <th>E-mail</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>Ação</th>
  </tr>
  </tfoot>
</table>
<?php 
        }                        
    ?>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
require_once("footer.php");
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- SweetAlert2 -->
<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- MASK -->
<script type="text/javascript" src="../assets/js/jquery.mask.min.js"></script>
  <!--MASCARAS -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone-cliente').mask('(00) 00000-0000');
      $('#cpf-cliente').mask('000.000.000-00');
      $('#cep-cliente').mask('00000-000');
      });
</script> 
</body>
</html>
<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_cliente = $_GET['id_cliente'];
  $query = "DELETE FROM tb_clientes where id_cliente = '$id_cliente'";
  mysqli_query($conn, $query);
  echo "<script language='javascript'> window.location='clientes.php'; </script>";
}
?>

  <!--MASCARAS -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#editar-telefone').mask('(00) 00000-0000');
      $('#editar-cpf').mask('000.000.000-00');
      $('#editar-cep').mask('00000-000');
      });
</script> 

<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){ 
  $id_cliente = $_GET['id_cliente'];
  $query = "select * from tb_clientes where id_cliente = '$id_cliente'";
  $result = mysqli_query($conn, $query);

  while($res_1 = mysqli_fetch_array($result)){

?>

<!-- modal Editar -->
<div id="modalEditar" class="modal fade bd-example-modal-lg-editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Cadastro do cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do cliente</label>
            <input name="txtnome" id="editar-nome" value="<?php echo $res_1['nome']; ?>" placeholder="Nome completo do cliente" type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cpf-cliente" class="">CPF</label>
            <input name="txtcpf" id="editar-cpf" value="<?php echo $res_1['cpf']; ?>" placeholder="Digite o CPF do cliente..." type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="contato-cliente" class="">Telefone</label>
            <input name="txttelefone" id="editar-telefone" value="<?php echo $res_1['telefone']; ?>" placeholder="Número para contato" type="name" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="email-cliente" class="">Email</label>
            <input name="txtemail" id="editar-email" value="<?php echo $res_1['email']; ?>" placeholder="E-mail do cliente" type="email" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="exampleAddress" class="">Endereço</label>
    <input name="txtendereco" id="editarAddress" value="<?php echo $res_1['endereco']; ?>" placeholder="Rua Bairro Nº" type="text" class="form-control">
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="exampleCity" class="">Cidade</label>
            <input name="txtcidade" id="editarCity" value="<?php echo $res_1['cidade']; ?>" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="exampleState" class="">Estado</label>
            <input name="txtestado" id="editarState" value="<?php echo $res_1['estado']; ?>" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="exampleZip" class="">CEP</label>
            <input name="txtcep" id="editar-cep" value="<?php echo $res_1['cep']; ?>" type="text" class="form-control">
        </div>
    </div>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="editar-cliente" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script> $("#modalEditar").modal("show"); </script> 

<!--Comando para editar os dados UPDATE -->
<?php
if(isset($_POST['editar-cliente'])){
  $id_user = $_SESSION['id_user'];
  $nome = $_POST['txtnome'];
  $cpf = $_POST['txtcpf'];
  $endereco = $_POST['txtendereco'];
  $cidade = $_POST['txtcidade'];
  $estado = $_POST['txtestado'];
  $cep = $_POST['txtcep'];
  $telefone = $_POST['txttelefone'];
  $email = $_POST['txtemail'];

  if ($res_1['cpf'] != $cpf){

    //VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
 $query_verificar= "SELECT * FROM tb_clientes WHERE cpf = '$cpf' ";

 $result_verificar = mysqli_query($conn, $query_verificar);
 $row_verificar = mysqli_num_rows($result_verificar);

 if($row_verificar > 0){
     //Mensagem CPF já Cadastrado!
     echo "<script language='javascript'> window.alert('CPF já Cadastrado!'); </script>";
     echo "<script language='javascript'> window.location='clientes.php'; </script>";
 exit();
 }

}

//CADASTRO DE CLIENTES
$query_editar = "UPDATE tb_clientes SET nome = '$nome', cpf = '$cpf', endereco = '$endereco', cidade = '$cidade', estado = '$estado', cep = '$cep', telefone = '$telefone', email = '$email' WHERE id_cliente = '$id_cliente' ";

$result_editar = mysqli_query($conn, $query_editar);

if($result_editar == ''){
  //Mensagem Ocorreu um erro ao cadastrar!
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
  echo "<script language='javascript'> window.location='clientes.php'; </script>";

} else {
  //Mensagem de Salvo com Sucesso!
  echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
  echo "<script language='javascript'> window.location='clientes.php'; </script>";
}
}
?>

<?php } } ?>