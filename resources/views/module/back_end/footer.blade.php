   <!-- Bootstrap core JavaScript-->
   <script src="{{asset('back_end/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('back_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

   <!-- Core plugin JavaScript-->
   <script src="{{asset('back_end/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{{asset('back_end/js/sb-admin-2.min.js')}}"></script>

   <!-- Page level plugins -->
   <script src="{{asset('back_end/vendor/chart.js/Chart.min.js')}}"></script>

   <!-- Page level custom scripts -->
   <script src="{{asset('back_end/js/demo/chart-area-demo.js')}}"></script>
   <script src="{{asset('back_end/js/demo/chart-pie-demo.js')}}"></script>
   <script src="{{asset('back_end/ckeditor/ckeditor.js')}}"></script>
   <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
       CKEDITOR.replace('ckeditor');
       CKEDITOR.replace('ckeditor1');
       CKEDITOR.replace('ckeditor2');
       CKEDITOR.replace('ckeditor3');
       CKEDITOR.replace('id4');
       CKEDITOR.editorConfig = function( config ) {
  config.extraPlugins = 'imageuploader';
};
  </script>
   <script src="{{asset('back_end/vendor/datatables/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('back_end/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

   <!-- Page level custom scripts -->
   <script src="{{asset('back_end/js/demo/datatables-demo.js')}}"></script>
   <script src="{{asset('back_end/js/dropzone.min.js')}}"></script>
</body>

</html>