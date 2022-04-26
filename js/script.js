jQuery(document).ready(function () {
    //http://bootsnipp.com/snippets/featured/easy-table-filter
	
	/*
    jQuery('.btn-filter').on('click', function () {
        jQuery('.btn-filter').removeClass('disabled');
        var all = jQuery(this).data('all');
        var sizefrom = parseInt(jQuery(this).data('sizefrom'));
        var sizeto = parseInt(jQuery(this).data('sizeto'));
        if (all != 'all') {
            jQuery('.table tbody tr').css('display', 'none');
            var table = jQuery("#mprDetailDataTable tbody");
            table.find('tr').each(function (i, el) {
                var size = parseInt(jQuery(this).data('size'));
                if (sizeto == 300 && sizefrom <= size) {
                    jQuery(this).fadeIn('slow');
                } else if (sizefrom <= size && sizeto >= size) {
                    jQuery(this).fadeIn('slow');
                }
            });
        } else {
            jQuery('.table tbody tr').css('display', 'none').fadeIn('slow');
        }
        jQuery(this).addClass('disabled');
    });
	
	
    jQuery('#rental-date').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '1d',
		endDate: '+13d',
		todayHighlight: true
		
    }).on("changeDate", function () {
        jQuery("input[name='date']").val(jQuery(this).datepicker('getFormattedDate'));
    });

	
	
	setTimeout(function() {
		
		jQuery('#rental-date .day.today').click();
		
	}, 1000);

	*/

});