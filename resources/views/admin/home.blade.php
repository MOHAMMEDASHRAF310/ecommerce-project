
<!DOCTYPE html>
<html lang="en">
  @include('admin.parts.css')

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.parts.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.inc.header')
        <!-- partial -->
        @include('admin.parts.body')
    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.parts.scripts')
    
  </body>
</html>