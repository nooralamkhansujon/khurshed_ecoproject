

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Admin Area |Dashboard</title>

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet" />

<!-- ckeditor  -->
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>

    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
    <script src="all.js"></script>

  </head>
  <body>
<nav class="navbar navbar-expand-md navbar-light bg-faded">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler navbar-toggler-right navbar_icon" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon navbar_icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
                            </li>
                <li class="nav-item">
                  <a class="nav-link" href="users.html">Users</a>
                            </li>
                <li class="nav-item">
                  <a class="nav-link" href="posts.html">Posts</a>
                </li>
                  </ul>

                  <ul class="navbar-nav navbar-right mr-5">
                        <li class="nav-item">
                          <a class="nav-link" href="#"><i class="fas fa-user"></i> Welcome,Brand</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.html">Logout</a>
                        </li>
                      </ul>


                </div>
              </nav>

  <header id="header">
       <div class="container">
            <div class="row pt-2">
                 <div class="col-md-10">
                      <h1><i class="fas fa-cog"></i>  Dashboard
                        <small>
                          Manage Your Site
                      </small></h1>
                 </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                      Create Content
                      <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu">
                          <li>
                            <button type="button" data-toggle="modal" data-target="#addPage" class="dropdown-item">Add Page</button>
                          </li>
                          <li >
                              <button type="button"  class="dropdown-item" data-toggle="modal" data-target="#addPost">Add Post</button>
                          </li>
                          <li>
                              <button type="button"  class="dropdown-item"
                              data-toggle="modal" data-target="#addUser">
                              Add User
                            </button>
                          </li>
                    </ul>
                </div>
            </div>
            </div>
       </div>
  </header>

<section id="breadcrumb">

          <ol class="breadcrumb ml-3 mr-2 ml-md-3 mr-md-5">
              <li class="active">Dashboard</li>
          </ol>

</section>

<section id="main">
           <div class="row">

                <div class="col-md-3">


                    <div class="ml-3 mr-1">
                         <!-- start of accordian -->
                    <div  id="accordian" role="tablist">

                        <div class="list-group" role="tab">

                                  <a class="list-group-item list_color_bg" data-toggle="collapse" href="#section-1">   <i class="fas fa-pencil-alt"></i>
                                   Posts <span class="badge">
                                      <small>123</small>
                                    </span>
                                  </a>

                              <div class="collapse" id="section-1" data-parent="#accordian">
                                      <a class="list-group-item list_group_item_child" href=""><i class="fas fa-plus-square"></i>Add Post</a>
                                      <a class="list-group-item list_group_item_child" href="">
                                          <i class="fas fa-edit"></i>
                                          Edit Post
                                      </a>
                                      <a class="list-group-item list_group_item_child" href="">
                                      <i class="fas fa-trash-alt"></i>
                                          Delete Post</a>
                              </div>
                        </div>
                        <div class="list-group" role="tab">

                              <a class="list-group-item list_color_bg" data-toggle="collapse" href="#section-2">
                                  <i class="fas  fa-user"></i>

                                    User <span class="badge">
                                      <small>123</small>
                                    </span>
                                  </a>

                            <div class="collapse" id="section-2" data-parent="#accordian">
                                    <a class="list-group-item list_group_item_child" href="">
                                        <i class="fas fa-user-plus"></i>
                                        Add User</a>
                                    <a class="list-group-item list_group_item_child" href="">
                                      <i class="fas fa-user-edit "></i> Edit User</a>
                                    <a class="list-group-item list_group_item_child" href="">
                                        <i class="fas fa-user-minus"></i>
                                        Delete User</a>
                            </div>
                    </div>
                    <div class="list-group" role="tab">

                          <a class="list-group-item list_color_bg" data-toggle="collapse" href="#section-3">
                              <i class="fas fa-columns"></i>
                                Page <span class="badge">
                                    <small>123</small>
                                  </span>

                          </a>

                        <div class="collapse" id="section-3" data-parent="#accordian">
                                <a class="list-group-item list_group_item_child" href="">
                                  <i class="fas fa-plus-square"></i>Add Page</a>
                                <a class="list-group-item list_group_item_child" href="">
                                    <i class="fas fa-edit"></i>Edit Page</a>
                                <a class="list-group-item list_group_item_child" href="">
                                    <i class="fas fa-trash-alt"></i>
                                    Delete Pages</a>
                        </div>
                  </div>



                </div>
                <!-- end of accordian -->

                        <div class="well">
                            <h4>Disk Space Used</h4>
                              <div class="progress">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    60%
                                  </div>
                                </div>
                                <h4>Bandwidth Used</h4>
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                    40%
                                  </div>
                                </div>
                        </div>
                   </div>
                </div>
                <!-- end of column 3 -->

                <!-- column 9 -->
                <div class="col-md-9 mt-2 mt-lg-0 mt-md-0">
                  <!-- Website Overview -->
                  <div class="mr-md-5 ml-md-0 ml-3 mr-2">
                    <div class="card card_custom">
                        <div class="card-header main-color-bg">
                          <h5>Website Overview</h5>
                        </div>
                        <div class="card-body">
                          <div class="row">
                             <div class="col-md-3">
                                <div class="desh-box">
                                  <h2><i class="fas fa-user"></i> <span class="total_number">203</span></h2>
                                  <h4>Users</h4>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="desh-box">
                                  <h2><i class="fas fa-pencil-alt"></i><span class="total_number">203</span></h2>
                                  <h4>Posts</h4>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="desh-box">
                                  <h2><i class="fas  fa-columns"></i> <span class="total_number">23</span></h2>
                                  <h4>Pages</h4>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="desh-box">
                                  <h2><i class="fas fa-signal"></i><span class="total_number">2,0003</span> </h2>
                                  <h4>visitor</h4>
                                </div>
                             </div>
                          </div>
                        </div>
                      </div>
                        <!-- End of  Website Overview -->

                      <div class="card mt-4">
                          <div class="card-header main-color-bg">
                              <h3>Latest Users</h3>
                          </div>
                          <div class="card-body">
                               <table class="table table-striped table-hover  table-bordered">
                                    <thead class="bg-dark text-light">
                                      <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Joined</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                          <td>Noor alam</td>
                                          <td>noor@gmail.com</td>
                                          <td>Dec,17 2016</td>
                                      </tr>
                                      <tr>
                                          <td>Jakir Khan</td>
                                          <td>jakirkhan@gmail.com</td>
                                          <td>Dec,17 2017</td>
                                      </tr>
                                      <tr>
                                          <td>Atikul islam</td>
                                          <td>Atikul@gmail.com</td>
                                          <td>Dec,17 2016</td>
                                      </tr>
                                      <tr>
                                          <td>Jahid</td>
                                          <td>Jahid@gmail.com</td>
                                          <td>Dec,17 2016</td>
                                      </tr>
                                    </tbody>
                               </table>
                          </div>
                      </div>
                  </div>
                 </div>
                 <!-- end of column 9 -->

           </div>

</section>



<!-- Modals  -->

<!-- Add Page  Modal -->

<div class="modal" tabindex="-1" role="dialog" id="addPage">
    <div class="modal-dialog" role="document">
      </form action="" method="Post">
      <div class="modal-content">
        <div class="modal-header modal_color_bg">
          <h5 class="modal-title">Add Page</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body modal_body">
            <form action="">
               <div class="form-group">
                       <label for="">Page Title</label>
                      <input type="text" class="form-control" placeholder="Page Title">
               </div>
               <div class="form-group">
                  <label for="">Page body</label>
                     <textarea name="page_body" id="pagebody" cols="30" rows="5"></textarea>
                   <script>
                      CKEDITOR.replace( 'pagebody' );
                  </script>
               </div>
               <div class="form-group">
                  <label for="">
                      <input type="checkbox"/> Published
                  </label>

               </div>
                <div class="form-group">
                    <label for="">Meta Tags</label>
                  <input type="text" class="form-control" placeholder="Add Meta Tags">
              </div>
              <div class="form-group">
                  <label for="">Meta Description</label>
                <input type="text" class="form-control" placeholder="Add Meta Discriptions">
            </div>

        </div>
        <div class="modal-footer main-color-bg">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Save</button>
        </div>
      </form>
      </div>
    </div>
  </div>
<!-- end of add page modal -->

<!-- Add Post Modal  -->
<div class="modal" tabindex="-1" role="dialog" id="addPost">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header modal_color_bg">
          <h5 class="modal-title">Modal Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body  modal_body">

          <div class="form-group">
              <label for="">Page body</label>
              <textarea name="page_body" id="postbody" cols="30" rows="3"></textarea>
            <script>
               CKEDITOR.replace( 'postbody' );
           </script>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<!-- end of add post modal -->

 <!-- add User modal -->
 <div class="modal" tabindex="-1" role="dialog" id="addUser">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header modal_color_bg">
          <h5 class="modal-title">Modal User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body modal_body">
            <div class="form-group">
                <label for="">Name</label>
               <input type="text" class="form-control" placeholder="Name">
           </div>
           <div class="form-group">
              <label for="">Username</label>
             <input type="text" class="form-control" placeholder="Enter Username">
         </div>
         <div class="form-group">
            <label for="">Email</label>
           <input type="text" class="form-control" placeholder="Enter Email">
       </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
 <!-- end of add User modal -->




<!-- end of modals -->





    <script src="jquery-3.3.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
 </body>
 </html>
