
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Attendence</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
    <script
      src="https://kit.fontawesome.com/9d1d9a82d2.js"
      crossorigin="anonymous"
    ></script>
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
                <a class='sidebar-item' href='#'>
                  <i class="fa fa-user sidebar-icon"></i>
                  <span>Attendence</span>
                </a>
                <a class='sidebar-item' href='users.php'>
                  <i class="fa fa-group sidebar-icon"></i>
                  <span>Users</span>
                </a>
                <a class='sidebar-item' href='profile.html'>
                  <i class="fa fa-user sidebar-icon"></i>
                  <span>Profile</span>
                </a>
                <a class='sidebar-item' href='/hero404' target='_blank'>
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
            <div class="mx-auto" style="width: 96%;">

              <div class="blockcode">
                <div class="header">Employee Attendence</div>
                <div class="example">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Time In</th>
                        <th scope="col">Time Out</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include_once "../php/connection.php";
                      $query = "SELECT * FROM attendence";
                      $query_run = mysqli_query($conn, $query);
      
      
                      if ($query_run) {  // Check if the query was successful
                          if (mysqli_num_rows($query_run) > 0) {
                              foreach ($query_run as $row) {
                                  ?>
                                  <tr>
                                      <td><?= $row['empno']; ?></td>
                                      <td><?= $row['fname']. ' ' . $row['lname']; ?></td>
                                      <td><?= $row['department']; ?></td>
                                      <td><?= $row['designation']; ?></td>
                                  </tr>
                              <?php }
                          } else {
                              echo "<tr><td colspan='5'><h5>No attendence records found at the moment</h5></td></tr>";
                          }
                      } else {
                          echo "Query failed: " . mysqli_error($conn);
                      }
                  ?>
                    </tbody>
                  </table>

                </div>
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
  </body>
</html>
