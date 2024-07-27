<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('style/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('style/assets/img/favicon.png')}}">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('style/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('style/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('style/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('style/assets/css/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
  <style>
    .small-description {
        max-width: 200px;
        white-space: normal;
        overflow: hidden;
        text-overflow: break-word;
        text-align: justify;
    }
    .text-edit {
    color: rgb(0, 98, 255); 
    }
    .text-delete {
        color: rgb(255, 25, 0); 
    }
</style>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{asset('style/assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">PERPUSTAKAAN</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{ route('categories.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('books.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Books</span>
          </a>
        </li>
        
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Books</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Books</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center dropdown">
                @if (Auth::check())
                    <a href="javascript:;" class="nav-link text-white font-weight-bold px-0 dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                @endif
            </li>
            
                 
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="{{asset('style/assets/img/team-2.jpg')}}" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
          <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                  <h6>Books Table</h6>
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBookModal">Add Book</button>
              </div>              
                  <div class="card-body px-0 pt-0 pb-2">
                      <div class="table-responsive p-0">
                          <table class="table align-items-center mb-0">
                              <thead>
                                  <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penulis</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kategori</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($books as $book)
                                  <tr>
                                      <td>
                                        <div class="d-flex px-2 py-1">
                                          <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $book->judul }}</h6>
                                          </div>
                                        </div>      
                                      </td>
                                      <td>
                                        <div class="d-flex px-2 py-1">
                                          <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $book->penulis }}</h6>
                                          </div>
                                        </div>      
                                      </td>
                                      <td>
                                        <div class="d-flex px-2 py-1">
                                          <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $book->category->name }}</h6>
                                          </div>
                                        </div>      
                                      </td>
                                      <td>
                                        <div class="d-flex px-2 py-1">
                                          <div class="d-flex flex-column justify-content-center">
                                            <div class="mb-0 text-sm small-description">{{ $book->deskripsi }}</div>
                                          </div>
                                        </div>      
                                      </td>
                                      <td>
                                        @if ($book->image)
                                          <img src="{{ asset('storage/' . $book->image) }}" alt="book image" class="img-thumbnail" width="100">
                                        @endif
                                      </td>
                                      <td class="align-middle" id="book-{{ $book->id }}">
                                        <a href="javascript:;" class="text-edit" data-toggle="tooltip" data-original-title="Edit book" onclick="editBook({{ $book->id }}, '{{ $book->judul }}', '{{ $book->penulis }}', '{{ $book->id_kategori }}', '{{ $book->deskripsi }}')">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        |
                                        <a href="javascript:;" class="text-delete" data-toggle="tooltip" data-original-title="Delete book" onclick="deleteBook({{ $book->id }})">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                    
                                    
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    
      <!-- Add Book Modal -->
      <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Book</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form id="addBookForm" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                              <label for="judul" class="form-label">Judul</label>
                              <input type="text" class="form-control" id="judul" name="judul" required>
                          </div>
                          <div class="mb-3">
                              <label for="penulis" class="form-label">Penulis</label>
                              <input type="text" class="form-control" id="penulis" name="penulis" required>
                          </div>
                          <div class="mb-3">
                              <label for="id_kategori" class="form-label">Kategori</label>
                              <select class="form-control" id="id_kategori" name="id_kategori" required>
                                  @foreach($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="deskripsi" class="form-label">Deskripsi</label>
                              <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="image" class="form-label">Image</label>
                              <input type="file" class="form-control" id="image" name="image">
                          </div>
                          <button type="submit" class="btn btn-primary">Add</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    
      <!-- Edit Book Modal -->
      <div class="modal fade" id="editBookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Book</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form id="editBookForm" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <input type="hidden" id="edit_book_id" name="book_id">
                          <div class="mb-3">
                              <label for="edit_judul" class="form-label">Judul</label>
                              <input type="text" class="form-control" id="edit_judul" name="judul" required>
                          </div>
                          <div class="mb-3">
                              <label for="edit_penulis" class="form-label">Penulis</label>
                              <input type="text" class="form-control" id="edit_penulis" name="penulis" required>
                          </div>
                          <div class="mb-3">
                              <label for="edit_id_kategori" class="form-label">Kategori</label>
                              <select class="form-control" id="edit_id_kategori" name="id_kategori" required>
                                  @foreach($categories as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="edit_deskripsi" class="form-label">Deskripsi</label>
                              <textarea class="form-control" id="edit_deskripsi" name="deskripsi" required></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="edit_image" class="form-label">Image</label>
                              <input type="file" class="form-control" id="edit_image" name="image">
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2" href="https://wa.me/+62895360303600" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp py-2"></i> <!-- Ikon WhatsApp -->
    </a>
</div>
  <!--   Core JS Files   -->
  <script src="{{asset('style/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('style/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('style/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('style/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('style/assets/js/plugins/chartjs.min.js')}}"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $(document).ready(function() {
      // Handle form submission for adding a book
      $('#addBookForm').on('submit', function(event) {
          event.preventDefault();
          var formData = new FormData(this);
          $.ajax({
              url: "{{ route('books.store') }}",
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  $('#addBookModal').modal('hide');
                  $('#addBookForm')[0].reset();
                  $('#books-table').append(`
                      <tr id="book-${response.id}">
                          <td>
                              <p class="text-xs font-weight-bold mb-0">${response.judul}</p>
                          </td>
                          <td>
                              <p class="text-xs font-weight-bold mb-0">${response.penulis}</p>
                          </td>
                          <td>
                              <p class="text-xs font-weight-bold mb-0">${response.category.name}</p>
                          </td>
                          <td>
                              <p class="text-xs font-weight-bold mb-0">${response.deskripsi}</p>
                          </td>
                          <td>
                              ${response.image ? `<img src="{{ asset('storage') }}/${response.image}" alt="book image" class="img-thumbnail" width="100">` : ''}
                          </td>
                          <td class="align-middle">
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit book" onclick="editBook(${response.id}, '${response.judul}', '${response.penulis}', '${response.id_kategori}', '${response.deskripsi}', '${response.image}')">
                                  Edit
                              </a>
                              <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete book" onclick="deleteBook(${response.id})">
                                  Delete
                              </a>
                          </td>
                      </tr>
                  `);
                  Swal.fire('Success!', 'Book added successfully.', 'success');
              },
              error: function(xhr) {
                  Swal.fire('Error!', 'Something went wrong.', 'error');
              }
          });
      });

      // Handle form submission for editing a book
      $('#editBookForm').on('submit', function(event) {
          event.preventDefault();
          var formData = new FormData(this);
          const id = $('#edit_book_id').val();
          $.ajax({
              url: `{{ url('books') }}/${id}`,
              method: "POST",
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                  $(`#book-${id} td:first-child p`).text(response.judul);
                  $(`#book-${id} td:nth-child(2) p`).text(response.penulis);
                  $(`#book-${id} td:nth-child(3) p`).text(response.category.name);
                  $(`#book-${id} td:nth-child(4) p`).text(response.deskripsi);
                  if(response.image) {
                      $(`#book-${id} td:nth-child(5) img`).attr('src', `{{ asset('storage') }}/${response.image}`);
                  }
                  $('#editBookModal').modal('hide');
                  location.reload(); 
                  Swal.fire('Success!', 'Book updated successfully.', 'success');
              },
              error: function(xhr) {
                  Swal.fire('Error!', 'Something went wrong.', 'error');
              }
          });
      });

      // Function to show edit modal
      window.editBook = function(id, judul, penulis, id_kategori, deskripsi, image) {
          $('#edit_book_id').val(id);
          $('#edit_judul').val(judul);
          $('#edit_penulis').val(penulis);
          $('#edit_id_kategori').val(id_kategori);
          $('#edit_deskripsi').val(deskripsi);
          if(image) {
              $('#edit_image_preview').attr('src', `{{ asset('storage') }}/${image}`).show();
          } else {
              $('#edit_image_preview').hide();
          }
          $('#editBookModal').modal('show');
      }

      // Function to delete a book
      window.deleteBook = function(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `{{ url('books') }}/${id}`,  // Pastikan ini diapit dengan backticks (``) untuk interpolasi variabel
                method: "DELETE",
                success: function(response) {
                    Swal.fire({
                        title: 'Deleted!',
                        text: 'Book has been deleted.',
                        icon: 'success'
                    }).then(() => {
                        location.reload();  // Muat ulang halaman setelah menampilkan pesan sukses
                    });
                },
                error: function(xhr) {
                    Swal.fire('Error!', 'Something went wrong.', 'error');
                }
            });
        }
    });
}



  });
</script>
 

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('style/assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
</body>

</html>