<!-- Bootstrap core JS-->
<script src="{{ asset('js/jquery-4.0.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#resultTable').DataTable();
    });
</script>
