
				$(document).ready(function() {
					$("button[name='add_cart']").click(function() {
						var pid = $(this).attr('id');
					$.ajax({
						url: 'index.php?option=cart&cat=insert&pid='+pid,
						type: 'POST',
						data: {pid:pid},
					})
					.done(function(data) {
						$("#ajax_11").html(data);
						alert("Thêm Vào Giỏ Hàng Thành Công");
					})
					});
					$("button[name='delete_Cart']").click(function() {
						var pid = $(this).attr('id');
						$.ajax({
						url: 'index.php?option=cart&cat=delete&pid='+pid,
						type: 'POST',
						data: {pid:pid},
					})
					.done(function(data) {
						$("#ajax_11").html(	data);
					})
						});
				});