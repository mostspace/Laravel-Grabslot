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
				url: '/users-list',
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: [
						'id', 'name', 'email', 'created_at'],
				},
			},
			columns: [
				{data: 'id'},
				{data: 'name'},
				{data: 'email'},
				{data: 'created_at'},
			],
			columnDefs: [
				// {
				// 	targets: -3,
				// 	orderable: false,
				// 	render: function(data, type, full, meta) {
				// 		return '<a href="/company_apply" class="btn btn-primary" title="Apply">申込</a>';
				// 	},
				// }
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
