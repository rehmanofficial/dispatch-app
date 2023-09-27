<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">
        ©
        <script>
          document.write(new Date().getFullYear());
        </script>, made with ❤️ by
        Dispatch App Pvt Ltd.
      </div>
      <div>
        <a href="#" class="footer-link me-4" target="_blank">Help & Support</a>
        <a href="#" target="_blank" class="footer-link me-4">Report A Bug</a>
        <a href="#" target="_blank" class="footer-link me-4">Documentation</a>
        <a href="#" target="_blank" class="footer-link me-4">Talk to our Agent</a>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script src="assets/js/timezone.js"></script>

<!-- Page JS -->
<script src="assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
{{-- custom jquery --}}
<script>
    $(document).ready(function() {
    // Add a click event listener to the button
    $("#toggle-menu").click(function() {
      // Toggle the visibility of layout-menu with slide effect
      $("#layout-menu").animate({ opacity: 'toggle' }, 300);

      // Toggle the padding-left of .layout-page with animation
      $(".layout-page").animate({
        "padding-left": $(".layout-page").css("padding-left") === "0px" ? "16.25rem" : "0px"
      }, 300);
    });
  });
  </script>
</body>
</html>
