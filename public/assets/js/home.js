"use strict";

var Home = function() {

	var initSearchedHallModal = function () {
        // Search Region
		$("#searchRegion").val('');
		var keyword = "";

		$("#searchRegion").keydown(function(event) {
			if(event.which == 13) {
				keyword = $("#searchRegion").val();
				if(keyword) {
					$('#searchModal').modal('show');
					modalTable(keyword);
				}
			}
		});

		$("#searchRegionBtn").click(function() {
			keyword = $("#searchRegion").val();
			if(keyword) {
				$('#searchModal').modal('show');
				modalTable(keyword);
			}
		});

		$("#searchRegion").on('keyup', function(event) {
			if(event.key === 'Delete' || event.key === 'Backspace') {
				if($(this).val().trim() === '') {
					$("#filteredRegion").html('');
					$("#allRegionList").show();
				}
			}
		});
    }

	var modalTable = function(hall_name) {

		var table = $('#kt_datatable');

		// Check if DataTable is already initialized
		if ($.fn.DataTable.isDataTable('#kt_datatable')) {
			// If DataTable is already initialized, destroy it
			table.DataTable().destroy();
			table.empty(); //Optional: Clear the table content
		}

		// begin first table
		table.DataTable({
			responsive: true,
			searchDelay: 500,
			processing: true,
			serverSide: true,
			paging: false,
			info: false,
			scrollbars: true,
			ajax: {
				url: '/search-hall/' + hall_name,
				type: 'POST',
				data: {
					// parameters for custom backend script demo
					columnsDef: ['id', 'region_id', 'name', 'city'],
				},
			},
			columns: [
				{ data: 'name' },
				{ data: 'city' }
			],
			columnDefs: [
				{
					targets: 0,
					data: "name",
					render: function(data, type, row, meta) {
						if(type === 'display') {
							return '<a href="/hall-data/' + row.region_id + '/' + row.id + '" class="p-link">' + row.name + '</a>';
						} else if (type === 'sort' || type === 'type') {
							return row.name;
						}
					}
				}
			],
		});
	};

	var initMain = function () {
		// Visit Region
		$("#regionList").on("click", ".region-btn", function() {
			window.location.href = "/hall-data/" + $(this).data('region_id');
		});
		
		// Check if the alert has been shown previously for this user
		var userId = user_id;
		var alertShown = localStorage.getItem('alertShown_' + userId);

		if (!alertShown) {
			$.ajax({
				url: "/avail-days",
				type: "get",
				data: {},
				success: function (response) {
					if (response.result >= 7) {
						Swal.fire({
							title: $("#searchStore").val(),
							text: response.message,
							icon: "warning",
							buttonsStyling: false,
							confirmButtonText: "はい",
							showCancelButton: true,
							cancelButtonText: "いいえ",
							customClass: {
								confirmButton: "btn btn-primary",
								cancelButton: "btn btn-outline btn-outline-danger"
							}
						}).then(function (result) {
							if (result.value) {
								window.location.href = '/user-profile?tab=pricing';
							}
						});
					} else {
						Swal.fire({
							title: $("#searchStore").val(),
							text: response.message,
							icon: "warning",
							buttonsStyling: false,
							confirmButtonText: "購読する",
							showCancelButton: false,
							cancelButtonText: "キャンセル",
							customClass: {
								confirmButton: "btn btn-primary",
								cancelButton: "btn btn-outline btn-outline-danger"
							}
						});
					}
					
					// Set a flag in local storage to indicate that the alert has been shown for this user
					localStorage.setItem('alertShown_' + userId, 'true');
				},
				error: function (error) {
					console.error('Ajax request failed: ', error);
				}
			});
		}
	};

	return {
		//main function to initiate the module
		init: function() {
			initMain();
			initSearchedHallModal();
		},
	};

}();

jQuery(document).ready(function() {
	Home.init();
});
