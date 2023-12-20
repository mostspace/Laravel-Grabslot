"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

	var initTable1 = function() {
		var table = $('#kt_datatables');

		// begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: {
				url: '/model-list/' + store.id,
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: ['model_name'],
				},
			},
			columns: [
				{ data: 'model_name' },
			],
			columnDefs: [
				{ 
					targets: 0,
					data: "model_name",
					render: function(data, type, row, meta) {
						if(type === 'display') {
							return '<a class="p-link store-model">' + row.model_name + '</a>';
						} else if (type === 'sort' || type === 'type') {
							return row.model_name;
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
