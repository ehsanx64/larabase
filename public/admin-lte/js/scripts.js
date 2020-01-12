window.emlib = {
	actionButtonClassName: 'emlib-action-button',
	gridActions: [
	],

	openViewPopup: function (key, id) {
		$.ajax({
			method: 'GET',
			url: '/' + key + '/popup/' + id,
			dataType: 'json'
		}).done(function (data) {
			var modal = $('#main-modal');
			modal.find('.modal-body').html(data.data);
			modal.modal('show');
		});
	},

	getEndpointUrl: function (key) {
		return '/' + key + '/gridList';
	},

	getGridViewFields: function () {
		var fields = $('th.gridview-field');
		var r = [];
		var i = '';

		if (fields.length > 1) {
			fields.each(function (index, item) {
				i = $(item).data('field-name');

				if (i != '') {
					r.push(i);
				}
			});
		}

		r.push('action');
		return r;
	},

	getActionHtml: function (key, action, id) {
		// undefined used as a failure indicator
		var color = undefined;
		var icon = undefined;
		var message = undefined;

		// If action is an object use it instead
		if (typeof(action) === 'object') {
			message = action.message;
			action = action.name;
		} else {
		}


		// Decide according to the action which type of button (color and icon and link)
		// should be created
		switch (action) {
			case 'edit':
				// Setting color and icon for edit button
				color = 'btn-success';
				icon = 'fa-pencil';
				break;
			case 'view':
				// Same thing for view button
				color = 'bg-orange';
				icon = 'fa-eye';
				break;
			case 'remove':
				// and remove button also
				color = 'btn-danger';
				icon = 'fa-remove';
				break;
			default:
				return undefined;
				break;
		}

		var dataMessage = '';
		var className = '';
		if (message != undefined) {
			dataMessage = ' data-message="' + message + '" ';
			className = ' emlib-action-button ';
		}

		// Return the HTML for the button just been created
		return '<a href="/' + key + '/' + action + '/' + id + '" class="btn btn-xs '
			+ color + ' ' + className + '"' + dataMessage + '><i class="fa fa-fw ' + icon + '"></i></a>';
	},

	/**
	 * Enable DataTable plugin for a table
	 * @param key string This is actually a controller name
	 * @param columns
	 * @param actions
	 */
	enableDataTable: function (key, columns, actions) {
		var handle = $('#' + key + '_grid');
		var cs = [];
		var cdefs = [];

		if (handle.length < 1) {
			return;
		}

		// Following solution used because there were some problems with concurrency
		emlib.gridActions = actions;
		emlib.gridActionKey = key;

		// Prepare parameters to be passed to DataTable
		var params = {
			"processing": true,
			"serverSide": true,
			'ajax': this.getEndpointUrl(key),
			'language': {
				'processing': 'در حال بارگذاری...',
				'emptyTable': 'داده‌ای در جدول وجود ندارد',
				'infoEmpty': 'داده‌ای برای نمایش وجود ندارد',
				'search': 'جستجو: ',
				'lengthMenu': 'نمایش _MENU_ رکورد',
				'info': 'در حال نمایش _START_ تا _END_ از مجموع _TOTAL_ رکورد',
				'paginate': {
					'first': 'اولین',
					'last': 'آخرین',
					'next': 'بعدی',
					'previous': 'قبلی'
				}
			},
			'drawCallback': function() {
				$('a.' + emlib.actionButtonClassName).click(function (event) {
					var message = $(event.target).data('message');
					if (message === undefined) {
						message = $(event.target).parents('a.' + emlib.actionButtonClassName).data('message');
					}
					var result = false;


					result = confirm(message);

					if (!result) {
						event.preventDefault();
					}

				});

				$('button.popup-toggle').click(function (event) {
					var t = event.target;
					var id, key = undefined;

					if ($(t).hasClass('btn') == false) {
						t = $(t).parents('button')[0];
					}

					id = $(t).data('id');
					key = $(t).data('key');
					emlib.openViewPopup(key, id);
				});

			},
			'page': function() {
				$('a.' + emlib.actionButtonClassName).click(function (event) {
					var message = $(event.target).data('message');
					if (message === undefined) {
						message = $(event.target).parents('a.' + emlib.actionButtonClassName).data('message');
					}
					var result = false;


					result = confirm(message);

					if (!result) {
						event.preventDefault();
					}

				});
			},
		};

		// If there are any actions
		if (actions.length > 0) {
			cdefs.push({
				'orderable': false,
				"targets": -1,
				"data": null,
				"render": function(data,type,row, meta) {
					var out = '<div class="gridview-action-buttons">';
					var r = undefined;

					for (var i in emlib.gridActions) {
						r = emlib.getActionHtml(emlib.gridActionKey, emlib.gridActions[i], row.id);
						out += (r === undefined ? '' : r);
					}

					out += '</div>';
					return out;
				}
			});
		}

		for (var i in columns) {
			if (typeof(columns[i]) === 'string') {
				cs.push({data: columns[i]});
			} else {
				cs.push(columns[i]);
			}
		}

		params.columns = cs;
		params.order = [[0, 'desc']];

		if (actions.length > 0) {
			params.columnDefs = cdefs;
		}

		var r = handle.DataTable(params);

		$('#gridview-search-field-select').change(function () {
			r.search(JSON.stringify({
				field: $(this).val(),
				text: $('#gridview-searchbox').val()
			})).draw();
		});

		$('#gridview-searchbox').keyup(function () {
			r.search(JSON.stringify({
				field: $('#gridview-search-field-select').val(),
				text: $(this).val()
			})).draw();
		});
	},

	/**
	 * Send a POST request using XHR
	 * @param data
	 * @param callback
	 */
	sendXhrPost: function(data, callback) {
		// Send a ajax POST request
		$.post({
			headers: {
				'X-CSRF-TOKEN': emlib.getCsrfToken()
			},
			url: '/users/change_status',
			data: data
		}, function (data) {
			console.log(data);
		});
	},

	confirmYesOrNo: function(message) {
		return confirm(message);
	},

	getCsrfToken: function () {
		return $('meta[name="csrf-token"]').attr('content');
	},

	handleActionButtons: function (event) {
		var target = $(event.target);
		var button = undefined;
		var actionButtonClassName = emlib.actionButtonClassName;

		// if button itself is clicked
		if (target.hasClass(actionButtonClassName)) {
			button = target;
		} else {
			button = target.parents('a.' + actionButtonClassName);
		}

		if (button === undefined) {
			return;
		}

		event.preventDefault();

		// First of all maybe one of the button's children actually got clicked
		// so we check for the right element and extract values we want from its
		// -data attributes

		window.target = button;
		var message = button.data('message');
		var result = emlib.confirmYesOrNo(message);

		if (result) {
			// send the request for changing the status
			var id = button.data('id');
			var status = button.data('status');

			console.log('Should request');
			console.log('Id: ' + id);
			console.log('Status: ' + status);
			var data = {
				id: id,
				status: status
			};
		}
	}

};
$(document).ready(function() {
	$.fn.dataTable.ext.search.push(
		function( settings, data, dataIndex ) {
			console.log('hello');
		}
	);

	$('#main-modal').modal({
		show: false
	});

	// Users grid
	emlib.enableDataTable('users',
		// 'id', {
		// 	data: 'profile_pic',
		// 	render: function(data, type, row) {
		// 		if (data.length < 20) {
		// 			return 'نامشخص';
		// 		}
		//
		// 		return '<img style="width: 100%; height: auto;" src="' + data + '" />';
		// 	}
		// }, 'user_type_string', 'status', 'account_mode_string', 'name',
		// 'phone', 'city', 'district', 'store_name', 'address', 'req_num', 'days_req', 'date_create_persian', 'actions'
		emlib.getGridViewFields()
	, ['edit', 'view', {name: 'remove', message: 'کاربر حذف خواهد شد'}]);

	// Services grid
	emlib.enableDataTable('services', emlib.getGridViewFields(), ['edit', {name:'remove', message: 'خدمت و خدمت‌های زیرمجموعه حذف خواهند شد'}]);

	// Requests grid
	emlib.enableDataTable('requests', emlib.getGridViewFields(), ['edit', {name: 'remove', message: 'درخواست حذف خواهد شد'}]);

	// Ads grid
	emlib.enableDataTable('ads', [
		'id',
		{
			data: 'poster',
			orderable: false,
			render: function(data, type, row) {
				return '<img src="' + data + '" style="width: 100%; height: auto;" />';
			}
		},
		'owner', 'city', 'date_create', 'date_start', 'date_end', 'clicks', 'views', 'max_click', 'actions'
	], ['edit']);

	// Receipts grid
	emlib.enableDataTable('receipts', [
		'id', 'amount', 'time', 'phone', 'wp', 'transcode',
	], []);

	// Units grid
	emlib.enableDataTable('units', [
		'id', 'title', 'action'
	], ['edit', {name: 'remove', message: 'واحد حذف خواهد شد'}]);

	// Suggests grid
	emlib.enableDataTable('suggests', emlib.getGridViewFields(), ['edit', {name: 'remove', message: 'پیشنهاد حذف خواهد شد'}]);

	// Handle links
	$('a').click(function (event) {
		var message = $(event.target).data('message');
		var result = false;


		if (message !== undefined) {
			result = confirm(message);

			if (!result) {
				event.preventDefault();
			}
		} else {
			return;
		}

	});


	// Handle user status change
	var actionButtonClassName = emlib.actionButtonClassName; 
	var actionButton = $('.' + actionButtonClassName);
	if (actionButton.length > 0) {
		actionButton.click(emlib.handleActionButtons);
	}
});
