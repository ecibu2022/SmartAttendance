<?php
include_once '../php/connection.php';

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users</title>
    <link rel="stylesheet" href="../font-awesome-icons/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
    <script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous" ></script>
  </head>
  <body>

    <div class="table-page d-flex">
      <div class="d-flex" style="height: 100vh">
        <div class="sidebar bg-dark" role="cdb-sidebar">
          <div class="sidebar-container">
            <div class="sidebar-header text-center">
              <a class="sidebar-toggler"><i class="fa fa-bars"></i></a>
              <a class="sidebar-brand"></a>
            </div>

            <div class="sidebar-nav">
              <div class="sidenav">
                <a class='sidebar-item' href='dashboard.html'>
                  <i class="fa fa-columns sidebar-icon"></i>
                  <span>Home</span>
                </a>
                <a class='sidebar-item' href='attendence.html'>
                  <i class="fa fa-user sidebar-icon"></i>
                  <span>Attendence</span>
                </a>
                <a class='sidebar-item' href='#'>
                  <i class="fa fa-group sidebar-icon"></i>
                  <span>Users</span>
                </a>
                <a class='sidebar-item' href='profile.html'>
                  <i class="fa fa-user sidebar-icon"></i>
                  <span>Profile</span>
                </a>
                <a class='sidebar-item' href='index.html'>
                  <i class="fa fa-sign-out sidebar-icon"></i>
                  <span>Logout</span>
                </a>
              </div>
            </div>


          </div>
        </div>
      </div>
      <div
        class="w-100"
        style="
          flex: 1 1 auto;
          display: flex;
          flex-flow: column;
          height: 100vh;
          overflow-y: hidden;
        "
      >
        <header class="db-header">
          <nav
            class="d-flex justify-content-between align-items-center px-3 py-2 bg-dark text-white"
          >
            <div class="cdb-form mb-0">
                Welcome Ecibu Michael
            </div>
            <div class="ml-auto d-flex align-items-center">
              <img class="pane-sm rounded-circle" src="img.png" />
            </div>
          </nav>
        </header>
        <div style="height: 100%">
          <div style="height: calc(100% - 64px); overflow-y: scroll">
            <div class="mx-auto" style="width: 96%">

              <div class="blockcode">
                <div class="header">Registered Users <button id="myButton" class="btn btn-dark float-end text-white">Add User</button></div>
                <div class="example">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">EMP NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ecibu Michael</td>
                        <td>IT</td>
                        <td>MCC</td>
                        <td>0773665471</td>
                        <td><button id="updateButton" class="btn btn-success">Update</button><a href="http://" class="btn btn-danger">Delete</a></td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
              

          </div>
        </div>
      </div>
    </div>
    <script>
      const sidebar = document.querySelector(".sidebar");
      new CDB.Sidebar(sidebar);
    </script>



<!-- Register new user modal -->
<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create new user</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="../php/create_user.php" method="POST">
              
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-list-ol"></i></span>
              <input type="text" name="empno" class="form-control" placeholder="EMP NO" aria-label="empno" aria-describedby="basic-addon1">
            </div>
            
          <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
              <input type="text" name="fname" class="form-control" placeholder="Firstname" aria-label="Firstname" aria-describedby="basic-addon1">
            </div>
            
          <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
              <input type="text" name="lname" class="form-control" placeholder="Lastname" aria-label="Lastname" aria-describedby="basic-addon1">
            </div>

            <select class="form-select mb-3" name="gender" aria-label="Gender">
              <option selected>Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>

            <select class="form-select mb-3" name="department" aria-label="Department">
              <option selected>Department</option>
              <option value="IT">IT</option>
              <option value="Finance">Finance</option>
              <option value="Parking">Parking</option>
            </select>
            
          <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card"></i></span>
              <input type="text" name="designation" class="form-control" placeholder="Designation" aria-label="Designation" aria-describedby="basic-addon1">
            </div>

          <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
              <input type="number" name="contact" class="form-control" placeholder="Contact" aria-label="Contact" aria-describedby="basic-addon1">
            </div>

      </div>

      <div class="modal-footer">
        <input type="submit" name="save" class="btn btn-success" value="Save User">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
            </form>


      </div>
    </div>
  </div>


  <!-- Update User Modal -->
  
<div id="myUpdateModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update old user</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-list-ol"></i></span>
                <input type="text" class="form-control" placeholder="EMP NO" aria-label="empno" aria-describedby="basic-addon1">
              </div>
              
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Firstname" aria-label="Firstname" aria-describedby="basic-addon1">
              </div>
              
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Lastname" aria-label="Lastname" aria-describedby="basic-addon1">
              </div>

              <select class="form-select mb-3" aria-label="Gender">
                <option selected>Gender</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>

              <select class="form-select mb-3" aria-label="Department">
                <option selected>Department</option>
                <option value="1">IT</option>
                <option value="2">Finance</option>
                <option value="3">Parking</option>
              </select>
              
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card"></i></span>
                <input type="text" class="form-control" placeholder="Designation" aria-label="Designation" aria-describedby="basic-addon1">
              </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                <input type="number" class="form-control" placeholder="Contact" aria-label="Contact" aria-describedby="basic-addon1">
              </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Update User</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  
  
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    const myButton = document.getElementById('myButton');
    
    myButton.addEventListener('click', function() {
      const myModal = new bootstrap.Modal(document.getElementById('myModal'));
      myModal.show();
    });
  });

//   Update Modal
document.addEventListener('DOMContentLoaded', function() {
    const myButton = document.getElementById('updateButton');
    
    myButton.addEventListener('click', function() {
      const myModal = new bootstrap.Modal(document.getElementById('myUpdateModal'));
      myModal.show();
    });
  });

  </script>
  </body>
</html>
