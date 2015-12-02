function do_tts()
{  
	<!--text=document.getElementsByName('txt').item(0).value;-->
	
	var x=document.getElementById("speech_en");
  text=x.innerHTML;
	if (text!="")
	{
		//optional arguments can be supplied as generateSpeech(text,{ option1: value1, option2: value2 .. }}; the options are listed here ->> amplitude: How loud the voice will be (default: 100)__pitch: The voice pitch (default: 50)__speed: The speed at which to talk (words per minute) (default: 175)__voice: Which voice to use (for a non-default voice, requires you to build speakGenerator.js again from espeak to include the proper data.) (default: en/en-us)__wordgap: Additional gap between words in 10 ms units (default: 0)
		var bytearray = generateSpeech(text);
		if (document.getElementsByName('save').item(0).checked)
		{
		  var url='audio.php?filename='+document.getElementsByName('filename').item(0).value;
		  var xhr = new XMLHttpRequest();
		  xhr.open('POST', url, true);	  	
		  xhr.send(bytearray.buffer);	  
		  xhr.onload = function(e) {
			  if (this.status == 200) {
				  document.getElementById('player').innerHTML=this.response;
			  }
		  }
		}
		else
		{
			document.getElementById('player').innerHTML='<audio  hidden="hidden" autoplay="autoplay" controls="controls" src="data:audio/x-wav;base64,'+encode64(bytearray)+'">';
		}
	}
}

