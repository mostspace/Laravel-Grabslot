"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: {
				url: '/store-list/' + store_id,
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: ['id', 'date', 'total_diff', 'avg_diff', 'avg_g_number', 'winning_rate'],
				},
			},
			columns: [
				{ data: 'date' },
				{ data: 'total_diff' },
				{ data: 'avg_diff' },
				{ data: 'avg_g_number' },
				{ data: 'winning_rate' }
			],
			columnDefs: [
				{ 
					targets: 0,
					data: "date",
					render: function(data, type, row, meta) {
						if(type === 'display') {
							return '<a href="/hall-data/' + region_id + '/' + store_id + '/' + row.id + '" class="p-link">' + row.date + '</a>';
						} else if (type === 'sort' || type === 'type') {
							return row.date;
						}
					}
				}
			],
		});
	};

	return {
		//main function to initiate the module
		init: function() {
			initTable1();
		},
	};

}();

jQuery(document).ready(function() {
	KTDatatablesDataSourceAjaxServer.init();
	
});
