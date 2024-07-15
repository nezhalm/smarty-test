<?php
/* Smarty version 5.3.1, created on 2024-07-15 15:14:23
  from 'file:dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_669520af1b2a49_74797848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec171c626445e789a73ea092e8fff3c4517879e' => 
    array (
      0 => 'dashboard.tpl',
      1 => 1721049248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669520af1b2a49_74797848 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\HPr\\Desktop\\smarty-5.3.1\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/public/assets/adminLTE/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public/assets/adminLTE/css/adminlte.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>

</head>


  <style>
    .doctor-card {
      text-align: center;
      margin-bottom: 15px;
    }
    .doctor-card img {
      width: 60%;
      height: auto;
      border-radius: 50px;
    }
  </style>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar bg-info  elevation-4">
    <!-- Brand Logo -->
  <a href="index3.html">
    <img class="image" src="../public/assets/images/logo.png" alt="Description de l'image">
</a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Doctor Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                E-Channeling
              </p>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-weight-bold text-info test">HEALTHCARE</h1>
                        <h1 class="m-0 font-weight-bold test">Management Systeme</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
             <div class="card">
              <div class="card-header border-0 ">
                <h3 class="card-title">Patients</h3>
                <div class="card-tools">
                  <a href="../export_to_excel/export.php" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                   <a href="#" class="btn btn-tool btn-sm" data-toggle="modal" data-target="#addPatientModal">
    <i class="fas fa-plus"></i>
                  </a>
                
                </div>
              </div>
              <div class="card-body table-responsive p-0">
             <table class="table table-striped table-valign-middle">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
          

            <th>Last Contact Date</th>
            <th>Phone</th>
            <th>History</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('donnees'), 'donnee');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('donnee')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->getValue('donnee')['id'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('donnee')['nom'];?>
 <?php echo $_smarty_tpl->getValue('donnee')['prenom'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('donnee')['date_dernier_contact'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('donnee')['telephone'];?>
</td>
            <td><?php echo $_smarty_tpl->getValue('donnee')['historique'];?>
</td>
  <td>
                <a href="#" class="text-info" data-toggle="modal" data-target="#updateModal" 
                   data-id="<?php echo $_smarty_tpl->getValue('donnee')['id'];?>
" data-nom="<?php echo $_smarty_tpl->getValue('donnee')['nom'];?>
" data-prenom="<?php echo $_smarty_tpl->getValue('donnee')['prenom'];?>
" 
                   data-date_naissance="<?php echo $_smarty_tpl->getValue('donnee')['date_naissance'];?>
" data-sexe="<?php echo $_smarty_tpl->getValue('donnee')['sexe'];?>
" 
                   data-adresse="<?php echo $_smarty_tpl->getValue('donnee')['adresse'];?>
" data-telephone="<?php echo $_smarty_tpl->getValue('donnee')['telephone'];?>
" 
                   data-email="<?php echo $_smarty_tpl->getValue('donnee')['email'];?>
" data-date_enregistrement="<?php echo $_smarty_tpl->getValue('donnee')['date_enregistrement'];?>
" 
                   data-date_dernier_contact="<?php echo $_smarty_tpl->getValue('donnee')['date_dernier_contact'];?>
" 
                   data-historique="<?php echo $_smarty_tpl->getValue('donnee')['historique'];?>
" data-statut="<?php echo $_smarty_tpl->getValue('donnee')['statut'];?>
">
                    <i class="fas fa-edit"></i>
                </a>
             
              <a href="#" class="text-danger delete-item"    data-id="<?php echo $_smarty_tpl->getValue('donnee')['id'];?>
">
        <i class="fas fa-trash"></i>
    </a>

            </td>
                  </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

              </div>
            </div>
            <!-- /.card -->



















<!-- update Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Patient Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="updateForm">
          <input type="hidden" id="patientId">
          <div class="form-group">
            <label for="nom">Last Name</label>
            <input type="text" class="form-control" id="nom">
          </div>
          <div class="form-group">
            <label for="prenom">First Name</label>
            <input type="text" class="form-control" id="prenom">
          </div>
         
       
        
          <div class="form-group">
            <label for="telephone">Phone</label>
            <input type="text" class="form-control" id="telephone">
          </div>
         
          
          <div class="form-group">
            <label for="date_dernier_contact">Last Contact Date</label>
            <input type="date" class="form-control" id="date_dernier_contact">
          </div>
          <div class="form-group">
            <label for="historique">History</label>
            <textarea class="form-control" id="historique"></textarea>
          </div>
        
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
      </div>
    </div>
  </div>
</div>







<!-- Add Patient Modal -->
<div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog" aria-labelledby="addPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPatientModalLabel">Add Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addPatientForm">
                    <div class="form-group">
                        <label for="addNom">Last Name</label>
                        <input type="text" class="form-control" id="addNom" required>
                    </div>
                    <div class="form-group">
                        <label for="addPrenom">First Name</label>
                        <input type="text" class="form-control" id="addPrenom" required>
                    </div>
                    <div class="form-group">
                        <label for="addDateDernierContact">Last Contact Date</label>
                        <input type="date" class="form-control" id="addDateDernierContact" required>
                    </div>
                    <div class="form-group">
                        <label for="addTelephone">Phone</label>
                        <input type="text" class="form-control" id="addTelephone" required>
                    </div>
                    <div class="form-group">
                        <label for="addHistorique">History</label>
                        <textarea class="form-control" id="addHistorique" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savePatient">Save changes</button>
            </div>
        </div>
    </div>
</div>















            <div class="card-2">
              <div class="row">
          <div class="col-12 col-sm-8 col-md-4">
            <div class="info-box doctor-card card-11" >
<span class="info-box-icon bg-primary elevation-1">
    <img src="../public/assets/images/medical.png" alt="Description de l'image" style="max-width: 70%; height: auto;">
</span>
              <div class="info-box-content">
                <span class="info-box-text">Admin new </span>
                <span class="info-box-number">
                  patient
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
      
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-4 col-md-4">
            <div class="info-box doctor-card card-22">
<span class="info-box-icon bg-warning elevation-1">
    <img src="../public/assets/images/ambulance.png" alt="Description de l'image" style="max-width: 70%; height: auto;">
</span>
              <div class="info-box-content">
                <span class="info-box-text">Emergency</span>
                <span class="info-box-number">Room</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box doctor-card card-33 ">
<span class="info-box-icon bg-danger elevation-1">
    <img src="../public/assets/images/medecine.png" alt="Description de l'image" style="max-width: 70%; height: auto;">
</span>

              <div class="info-box-content">
                <span class="info-box-text">Pharmacie </span>
                <span class="info-box-number">Details</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-4">
            <div class="card-2">
            
         <div  class="">
  <div class="row">
    <!-- First Card -->
    <div class="col-lg-6">
      <div class="card">
       
        <div style="height:100px;" class="card-body">
          <div class="d-flex">
            <p class="d-flex flex-column">
    <span class="d-flex align-items-center">
    <img src="../public/assets/images/rendez-vous.png" alt="Description de l'image" class="mr-2" style="width: 20px; height: 20px;">
    <span class="text-bold text-lg">120</span>
</span>

      <span>Total appointements</span>
    </p>
           
          </div>
          <div class="position-relative mb-4">
            <canvas id="sales-chart" height="200"></canvas>
          </div>
      
        </div>
      </div>
    </div>

    <!-- Second Card -->
    <div class="col-lg-6">
      <div class="card">
       
        <div style="height:100px;" class="card-body">
          <div class="d-flex">
            <p class="d-flex flex-column">
        <span class="d-flex align-items-center">
    <img src="../public/assets/images/patient.png" alt="Description de l'image" class="mr-2" style="width: 20px; height: 20px;">
    <span class="text-bold text-lg">120</span>
</span>
      <span>Total Patients</span>
    </p>
          
          </div>
          <div class="position-relative mb-4">
            <canvas id="new-customers-chart" height="200"></canvas>
          </div>
        
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Third Card -->
    <div class="col-lg-6">
      <div class="card">
        
        <div style="height:100px;" class="card-body">
          <div class="d-flex">
           <p class="d-flex flex-column">
    <span class="d-flex align-items-center">
    <img src="../public/assets/images/annuler.png" alt="Description de l'image" class="mr-2" style="width: 20px; height: 20px;">
    <span class="text-bold text-lg">120</span>
</span>

      <span>Total concellation</span>
    </p>
           
          </div>
          <div class="position-relative mb-4">
            <canvas id="returning-customers-chart" height="200"></canvas>
          </div>
        
        </div>
      </div>
    </div>

    <!-- Fourth Card -->
    <div class="col-lg-6">
      <div class="card">
        
       <div style="height:100px;" class="card-body">
  <div class="d-flex">
    <p class="d-flex flex-column">
       <span class="d-flex align-items-center">
    <img src="../public/assets/images/graphique-a-barres-croissant.png" alt="Description de l'image" class="mr-2" style="width: 20px; height: 20px;">
    <span class="text-bold text-lg">120</span>
</span>
      <span>Total avg per doctor</span>
    </p>
  </div>
  <div class="position-relative mb-4">
    <canvas id="website-traffic-chart" height="200"></canvas>
  </div>
</div>

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

      </div>
    </div>
  </div>
</div>

            </div>
            <!-- /.card -->






         <div class="card">
 <div class="card-header border-0">
   
    <h3 class="card-title">Available Doctors</h3>
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-lg-4 col-md-6 doctor-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.Ul6Lk3WL9rqVLprX43-U5QHaHa&pid=Api&rs=1&c=1&qlt=95&w=118&h=118" alt="Dr. Sarah Johnson">
            <p class="text-info">Dr. Sarah Johnson</p>
        </div>
        <div class="col-lg-4 col-md-6 doctor-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.WZuFeD-_Btx-rRmknaI_9AHaHa&pid=Api&rs=1&c=1&qlt=95&w=118&h=118" alt="Dr. Michael Brown">
            <p class="text-info">Dr. Michael Brown</p>
        </div>
        <div class="col-lg-4 col-md-6 doctor-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.NhOUR64iXYx5NevQIeq5NQHaHa&pid=Api&rs=1&c=1&qlt=95&w=106&h=106" alt="Dr. Emily Davis">
            <p class="text-info">Dr. Emily Davis</p>
        </div>
        <div class="col-lg-4 col-md-6 doctor-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.NhOUR64iXYx5NevQIeq5NQHaHa&pid=Api&rs=1&c=1&qlt=95&w=106&h=106" alt="Dr. John Smith">
            <p class="text-info">Dr. John Smith</p>
        </div>
        <div class="col-lg-4 col-md-6 doctor-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.Ul6Lk3WL9rqVLprX43-U5QHaHa&pid=Api&rs=1&c=1&qlt=95&w=118&h=118" alt="Dr. Laura Wilson">
            <p class="text-info">Dr. Laura Wilson</p>
        </div>
        <div class="col-lg-4 col-md-6 doctor-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.WZuFeD-_Btx-rRmknaI_9AHaHa&pid=Api&rs=1&c=1&qlt=95&w=118&h=118" alt="Dr. James Martinez">
            <p class="text-info">Dr. James Martinez</p>
        </div>
    </div>
</div>

</div>







          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->






<?php echo '<script'; ?>
>
<!-- script of update patient-->
$(document).ready(function(){
    $('#updateModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        var id = button.data('id');
        var nom = button.data('nom');
        var prenom = button.data('prenom');
        var date_naissance = button.data('date_naissance');
        var sexe = button.data('sexe');
        var adresse = button.data('adresse');
        var telephone = button.data('telephone');
        var email = button.data('email');
        var date_enregistrement = button.data('date_enregistrement');
        var date_dernier_contact = button.data('date_dernier_contact');
        var historique = button.data('historique');
        var statut = button.data('statut');

        var modal = $(this);
        modal.find('#patientId').val(id);
        modal.find('#nom').val(nom);
        modal.find('#prenom').val(prenom);
        modal.find('#date_naissance').val(date_naissance);
        modal.find('#sexe').val(sexe);
        modal.find('#adresse').val(adresse);
        modal.find('#telephone').val(telephone);
        modal.find('#email').val(email);
        modal.find('#date_enregistrement').val(date_enregistrement);
        modal.find('#date_dernier_contact').val(date_dernier_contact);
        modal.find('#historique').val(historique);
        modal.find('#statut').val(statut);
    });

    $('#saveChanges').click(function(){
        var id = $('#patientId').val();
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var date_naissance = $('#date_naissance').val();
        var sexe = $('#sexe').val();
        var adresse = $('#adresse').val();
        var telephone = $('#telephone').val();
        var email = $('#email').val();
        var date_enregistrement = $('#date_enregistrement').val();
        var date_dernier_contact = $('#date_dernier_contact').val();
        var historique = $('#historique').val();
        var statut = $('#statut').val();

        $.ajax({
            url: 'update.php',
            method: 'POST',
            data: {
                id: id,
                nom: nom,
                prenom: prenom,
                date_naissance: date_naissance,
                sexe: sexe,
                adresse: adresse,
                telephone: telephone,
                email: email,
                date_enregistrement: date_enregistrement,
                date_dernier_contact: date_dernier_contact,
                historique: historique,
                statut: statut
            },
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Data updated successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#updateModal').modal('hide');
                        location.reload();
                    }
                });
            },
            error: function(response) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Failed to update data!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});
<!--end of script of update patient-->




<!-- script of delete patient-->
$(document).ready(function() {
    // Gérer le clic sur les liens de suppression
    $(document).on('click', '.delete-item', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'delete.php',
                    method: 'POST',
                    data: { id: id },
                    success: function(response) {
                        // Stocker un indicateur de succès dans sessionStorage
                        sessionStorage.setItem('deleteSuccess', 'true');
                        Swal.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        ).then(() => {
                            // Recharger la page
                            location.reload();
                        });
                    },
                    error: function() {
                        Swal.fire(
                            'Failed!',
                            'There was an error deleting your data.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});


<?php echo '</script'; ?>
>
<!--end of script of delete patient-->


<!-- script of add patient-->

<?php echo '<script'; ?>
>
$(document).ready(function() {
    $('#savePatient').click(function() {
        // Récupérer les données du formulaire
        var nom = $('#addNom').val();
        var prenom = $('#addPrenom').val();
        var date_dernier_contact = $('#addDateDernierContact').val();
        var telephone = $('#addTelephone').val();
        var historique = $('#addHistorique').val();

        // Envoyer les données via AJAX
        $.ajax({
            url: 'add_patient.php', // URL vers le script PHP pour ajouter le patient
            method: 'POST',
            data: {
                nom: nom,
                prenom: prenom,
                date_dernier_contact: date_dernier_contact,
                telephone: telephone,
                historique: historique
            },
            success: function(response) {
                var jsonResponse = JSON.parse(response);
                if (jsonResponse.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: jsonResponse.message
                    }).then(() => {
                        $('#addPatientModal').modal('hide');
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: jsonResponse.message
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Failed!',
                    text: 'Failed to add patient!'
                });
            }
        });
    });
});


<?php echo '</script'; ?>
>
<!--end of script of add patient-->



</body>
</html>


<?php }
}
