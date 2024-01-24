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
            info: true,
			ajax: {
				url: '/user-profile/course',
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: [
						'course', 'name', 'transaction_id', 'created_at'],
				},
			},
			columns: [
				{data: 'course'},
				{data: 'name'},
				{data: 'created_at'},
			],
            columnDefs: [
				{ 
					targets: 0,
					data: "course",
					render: function(data, type, row, meta) {
						if(type === 'display') {
                            if (row.course == "light") {
                                return "ライト";
                            } else {
                                return "スタンダード";
                            }
							
						} else if (type === 'sort' || type === 'type') {
							return row.course;
						}
					}
				},
				{ 
					targets: 1,
					data: "name",
					render: function(data, type, row, meta) {
						if(type === 'display') {
                            if (row.name === null) {
                                return "全店舗";
                            } else {
                                return row.name;
                            }
							
						} else if (type === 'sort' || type === 'type') {
							return row.name;
						}
					}
				},
                { 
					targets: 2,
					data: "created_at",
					render: function(data, type, row, meta) {
						if(type === 'display') {
                            // Convert to Date object
                            var date = new Date(row.created_at);
                    
                            // Add one month to the date
                            date.setMonth(date.getMonth() + 1);
                    
                            // Format as Y-m-d
                            var formattedDate = date.toISOString().split('T')[0];
                            
                            return formattedDate;
                        } else if (type === 'sort' || type === 'type') {
                            // Return the original data for sorting and type detection
                            return row.created_at;
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
