	$(document).ready(function(){
		$('#search').keypress(function(e){
			if(e.which == 13){
				var param = {id: $('#query_item').val(), query: $('#search').val()};
				console.log(param);
				$.ajax({
					type:'GET',
					url:'fetch.php',
					data:param,
					dataType:'HTML',
					success:function(response){
					$('#responsecontainer').html(response);
					}
				});
				event.preventDefault();
			}
		});
		$('.del_button').click(function(){
			var info = this.id;
			var result= info.split('_');
			var table_name=result[1];
			var row_no=result[2];
			
			var row=document.getElementById(row_no);
			var child_nodes=row.childNodes;
			//var param=[;
			
			var len=child_nodes.length-2;
			var flds='';
			var ar='';
			for(var i=0;i<len;i++)
			{
				if(i==len-1)
					{
						flds = flds + child_nodes[i].className;
						ar = ar +child_nodes[i].innerHTML;
					}
				else
				{
						flds = flds + child_nodes[i].className + ',';
						ar = ar +child_nodes[i].innerHTML + ',';
				}
			}
			
			param={fields:flds,data:ar,name:table_name};
			
			
			
			$.post("delete.php",param, function(response) {
				//alert(response);
				$('#responsecontainer').load("fetch.php?id="+table_name);
				//$('#responsecontainer').html(response);
				//alert('hello');
			});
			return false;
			
		});
		
		$( "#add_row" ).click(function( event ) {
		//event.preventDefault();
			
			var x=document.getElementById("hello");
			x.innerHTML=document.getElementById("copy").innerHTML;
		});
		$( "#add_entry" ).click(function( event ) {
		//event.preventDefault();
			var obj=$( "#form1" ).serializeArray();
			
			len=obj.length;
			ar="";
			for(i=0;i<len-1;i++)
			{
				if(i==len-2)
					ar=ar+obj[i]['value'];
				else
					ar=ar+obj[i]['value']+',';
			}
			var table_name=obj[len-1]['value'];
			var param = {data: ar,name: table_name};
			//alert(table_name);
			$.post("add.php",param, function(response) {
				alert(response);
				$('#responsecontainer').load("fetch.php?id="+table_name);
				//$('responsecontainer').html(response);
			});
		});
		
	});
	