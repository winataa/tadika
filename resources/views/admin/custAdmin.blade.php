@extends('templateLayout/template')
@section('hi_cust')
<section class="dashboard" data-aos="fade-down">
    <div class="top">
      
      <i class="uil uil-bars sidebar-toggle"></i>
      <h1>Our Customers</h1>
      <div class="search-box">
        <i class="uil uil-search"></i>
        <input type="text" placeholder="Search here..." />
      </div>
    </div>

    <div class="dash-content">
      <div class="overview">
        <div class="title-admin">
          {{-- <div class="garis" style="margin-top: -20px">
            <hr>
          </div> --}}

          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tadika Laundry Customer</h6>
            </div>
          <div class="card-body">
          <div class="table-responsive">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Room</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Putu Eternatalie</td>
                    <td>Eternatalie</td>
                    <td>089889445788</td>
                    <td>nana12345@gmail.com</td>
                    <td>203A</td>
                </tr>
                <tr>
                  <td>Putu Eternatalie</td>
                  <td>Eternatalie</td>
                  <td>089889445788</td>
                  <td>nana12345@gmail.com</td>
                  <td>203A</td>
                </tr>
                <tr>
                  <td>Putu Eternatalie</td>
                  <td>Eternatalie</td>
                  <td>089889445788</td>
                  <td>nana12345@gmail.com</td>
                  <td>203A</td>
              </tr>
              <tr>
                <td>Putu Eternatalie</td>
                <td>Eternatalie</td>
                <td>089889445788</td>
                <td>nana12345@gmail.com</td>
                <td>203A</td>
              </tr>
              <tr>
                <td>Putu Eternatalie</td>
                <td>Eternatalie</td>
                <td>089889445788</td>
                <td>nana12345@gmail.com</td>
                <td>203A</td>
              </tr>
              <tr>
                <td>Putu Eternatalie</td>
                <td>Eternatalie</td>
                <td>089889445788</td>
                <td>nana12345@gmail.com</td>
                <td>203A</td>
              </tr>
              <tr>
                <td>Putu Eternatalie</td>
                <td>Eternatalie</td>
                <td>089889445788</td>
                <td>nana12345@gmail.com</td>
                <td>203A</td>
              </tr>
              <tr>
                <td>Putu Eternatalie</td>
                <td>Eternatalie</td>
                <td>089889445788</td>
                <td>nana12345@gmail.com</td>
                <td>203A</td>
              </tr>
              <tr>
                <td>Putu Eternatalie</td>
                <td>Eternatalie</td>
                <td>089889445788</td>
                <td>nana12345@gmail.com</td>
                <td>203A</td>
            </tr>
            <tr>
              <td>Putu Eternatalie</td>
              <td>Eternatalie</td>
              <td>089889445788</td>
              <td>nana12345@gmail.com</td>
              <td>203A</td>
            </tr>
            <tr>
              <td>Putu Eternatalie</td>
              <td>Eternatalie</td>
              <td>089889445788</td>
              <td>nana12345@gmail.com</td>
              <td>203A</td>
            </tr>
            <tr>
              <td>Putu Eternatalie</td>
              <td>Eternatalie</td>
              <td>089889445788</td>
              <td>nana12345@gmail.com</td>
              <td>203A</td>
            </tr>
            <tr>
              <td>Putu Eternatalie</td>
              <td>Eternatalie</td>
              <td>089889445788</td>
              <td>nana12345@gmail.com</td>
              <td>203A</td>
            </tr>
            <tr>
              <td>Putu Mia</td>
              <td>Eternatalie</td>
              <td>089889445788</td>
              <td>nana12345@gmail.com</td>
              <td>203A</td>
            </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </tfoot>
        </table>
          
      </div></div></div>



        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

  



@endsection

