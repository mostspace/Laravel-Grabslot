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
				url: '/store-data-list/' + store_data_id,
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					// columnsDef: ['id', 'model_name'],
					columnsDef: ['id', 'model_name', 'machine_number', 'g_number', 'bb', 'rb', 'art', 'composite_probability', 'bb_probability', 'rb_probability', 'art_probability'],
				},
			},
			columns: [
				{ data: 'model_name' },
				{ data: 'machine_number' },
				{ data: 'g_number' },
				{ data: 'bb' },
				{ data: 'rb' },
				{ data: 'art' },
				{ data: 'composite_probability' },
				{ data: 'bb_probability' },
				{ data: 'rb_probability' },
				{ data: 'art_probability' },
			],
			// columnDefs: [
			// 	{ 
			// 		targets: 0,
			// 		data: "model_name",
			// 		render: function(data, type, row, meta) {
			// 			if(type === 'display') {
			// 				return '<a href="/hall-data/' + region_id + '/' + store_id + '/' + store_data_id + '/' + row.id + '" class="p-link">' + row.model_name + '</a>';
			// 			} else if (type === 'sort' || type === 'type') {
			// 				return row.model_name;
			// 			}
			// 		}
			// 	}
			// ],
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
