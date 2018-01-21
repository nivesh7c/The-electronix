var req=new XMLHttpRequest();
function getInfo() {

			req.open("post","picUpload.php",true);

				var d=file1.files[0];
					var myfrm=new FormData();

						myfrm.append("myfile",d);
			req.onreadystatechange=function()
			{
					if(req.readyState==4)
					{

						oo.setAttribute("src",'pic/'+req.responseText);
							//alert(req.responseText);
					//	mypic.style.backgroundImage='url(pic/'+req.responseText+')';		
					
					}

			}
			req.send(myfrm);
}