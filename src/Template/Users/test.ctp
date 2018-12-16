<script type="text/javascript">
	var getHttpRequest = function(){

	var httpRequest = false;

	if (window.XMLHttpRequest){
		httpRequest = new XMLHttpRequest();
		if (httpRequest.overrideMimeType){
			httpRequest.overrideMimeType('text/xml');
		}
	}
	else if (window.ActiveXObject){
		try{
			httpRequest = new ActiveXObject("Msxml2.XMLHTTP");

		}catch (e) {
			try{
				httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e){}
		}
	}
	if (!httpRequest) {
		alert('Abondand');
		return false;
	}


	return httpRequest;
}	
	var httpRequest = getHttpRequest()
	httpRequest.onreadystatechange = function (){
		if (httpRequest.readyState === 4){
			document.getElementById('ip').innerHTML += 'done';
			debugger
		}
		
	}
	httpRequest.open('GET','/montage_moi/users/cmd',true)
	httpRequest.send()
</script>
<h1>hello</h1>
<p id="ip"></p>
<?php 
	$this->Flash->success(__('The user has been deleted.'));