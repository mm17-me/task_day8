
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
  $(document).ready(function() {
    $('#language-picker-select').change(function() {
      var selectedLanguage = $(this).val();
    });
  });
</script>

