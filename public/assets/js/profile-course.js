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
				url: '/user-profile/course',
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: [
						'id', 'course', 'store_id', 'transaction_id', 'created_at'],
				},
			},
			columns: [
				{data: 'id'},
				{data: 'course'},
				{data: 'store_id'},
				{data: 'transaction_id'},
				{data: 'created_at'},
			],
            columnDefs: [
				{ 
					targets: 1,
					data: "course",
					render: function(data, type, row, meta) {
						if(type === 'display') {
                            if (row.course == "light") {
                                console.log("light");
                                return "ライト";
                            } else {
                                return "スタンダード";
                            }
							
						} else if (type === 'sort' || type === 'type') {
							return row.course;
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
