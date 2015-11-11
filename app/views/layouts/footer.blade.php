<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script>
		$(function() {
		$( "#expandable" ).accordion({
		collapsible: true,
		active: false
		});
		});
	</script>
	<script>
    function priceSorter(a, b) {
        a = +a.substring(1); // remove $
        b = +b.substring(1);
        if (a > b) return 1;
        if (a < b) return -1;
        return 0;
    }
</script>




	<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script src="{{URL::asset('js/bootstrap-table.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap-select.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap-table-filter.js')}}"></script>

	


    

</body>
</html>