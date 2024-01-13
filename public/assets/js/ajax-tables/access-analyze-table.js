"use strict";
var KTDatatablesDataSourceAjaxServer = function() {

	var initTable1 = function() {
		var table = $('#snsTable');

		// begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			paging: false,
			info: false,
			ajax: {
				url: '/admin/users-list',
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: [
						'id', 'email', 'created_at'],
				},
			},
			columns: [
				{data: 'id'},
				{data: 'email'},
				{data: 'created_at'},
			]
		});
	};

	var initTable2 = function() {
		var table = $('#promotionTable');

		// begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: {
				url: '/admin/users-list',
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: [
						'id', 'email', 'created_at'],
				},
			},
			columns: [
				{data: 'id'},
				{data: 'email'},
				{data: 'created_at'},
			]
		});
	};

	return {
		//main function to initiate the module
		init: function() {
			initTable1();
			initTable2();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesDataSourceAjaxServer.init();
});
