$(document).ready(function($) {

	$.ajax({
		url: 'http://localhost:8080/blog/api/category',
		type: 'GET',
		dataType: 'json',
		success:function(res){
			var html = '';
			for (var i = 0; i < res.length; i++) {
				html +='<a href="" data-id="'+res[i].id+'" class="list-group-item">'+res[i].name+'</a>';
			}

			$('#cat-ajax').html(html);
		}
	});

	$(document).on('click','.list-group-item',function(ev){
		ev.preventDefault();
		var catId = $(this).data('id');
		$.ajax({
			url: 'http://localhost:8080/blog/api/product/'+catId,
			type: 'GET',
			dataType: 'json',
			success:function(res){
			var html = '';
			for (var i = 0; i < res.length; i++) {
				html +='<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">';
					html +='<div class="thumbnail">';
						html +='<img data-src="#" alt="">';
						html +='<div class="caption">';
							html +='<h3>'+res[i].name+'</h3>';
							
							html +='<p>';
								html +='<a href="" class="btn btn-primary">Xem</a>';
								html +='<a href="#" class="btn btn-default">Gio hang</a>';
							html +='</p>';
						html +='</div>';
					html +='</div>';
				html +='</div>';
			}
			$('#pros').html(html);
		}
		})
		
		
	})
	
	
});