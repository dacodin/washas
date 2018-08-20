$(function(){
	
	let service,
		date,
		time,
		duration = '';

$.each($('#datepicker'), function (index, el) {
	$(el).change(function () {
		$this = $(this);
		let input = $this;
		date = input.val();
		
		const payload = {
			date: input.val(),
	};
	// console.log(payload);
	updateCartDate(payload, '#date');
	})
});
$('input.timepicker').timepicker({
	change: function(time) {
		$this = $(this);
		let input = $this;
		time = input.val();
		
		const payload = {
			time: input.val(),

		};
		// console.log(payload);
		updateCartTime(payload, '#time');
	}
});


	// get addons for default service ['car']
	// getAddons(1);

	$.each($('.duration'), function (index, el) {
		$(el).click(function () {
			$this = $(this);
			let input = $this.find('input');
			duration = input.val();
			
			const payload = {
			duration: input.val(),
		};
		// console.log(payload);
		updateCartDuration(payload, '#durationContainer');
		})
	});


	$('.mak-check').click(function () {
		const $this = $(this);
		const payload = {
			id: $this.data('service-id'),
			name: $this.data('service-name'),
			price: '₦ '+$this.data('service-price'),
		};

		updateCartService(payload, '#serviceContainer');


		// Make container active
		$('input[name=service]').val(payload.id);
    	$('.mak-check').removeClass('selected');
    	$this.addClass('selected');

    	// show addons field
    	$('#addons-container').removeClass('hide');
    	
    	// Get addons for specified service
    	getAddons(payload.id);
    });
});

function getAddons(serviceId) {
	fetch(`/service/${serviceId}/addons`)
		.then(res => res.json())
		.then(response => {
			let html = '';

			response.payload.forEach(addon => {
				html += `<div class="form-check form-check-inline boxes ">
				
					<input class="form-check-input option-input checkbox" id="addon-${addon.id}" type="checkbox" value="${addon.id}" data-price="${addon.price}" data-name="${addon.name}">
					<label class="form-check-label" for="addon-${addon.id}"><span></span>${addon.name} : ${addon.price}</label>
			
					</div>`;
			});
			$('#render-addons').html(html);
		})
		.catch(error => console.error(error));
}


function updateCartService(payload, target) {
	let output = `<td>${payload.name}</td>
		<td align="right">${payload.price}</td>`;
	$(target).html(output);
}
function updateCartDuration(payload, target) {
	let output = `<td>Duration</td>
		<td align="right">${payload.duration}</td>`;
	$(target).html(output);
}
function updateCartDate(payload, target) {
	let output = `<td>Date</td>
		<td align="right">${payload.date}</td>`;
	$(target).html(output);
}
function updateCartTime(payload, target) {
	let output = `<td>Time</td>
		<td align="right">${payload.time}</td>`;
	$(target).html(output);
}



