
<!DOCTYPE html>


<html lang="en" dir="ltr">
<head>
    @include('adminpage.css')
</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>


    <div class="wrapper">


            @include('adminpage.sidebar')
      <div class="page-wrapper">

          <!-- Header -->
          @include('adminpage.header')

        <div class="content-wrapper">
          <div class="content">
              <div class="row">
                <div class="col-xl-8">


                </div>
            </div>
        </div>
      </div>
    </div>

    @include('adminpage.script')

  </body>
</html>
