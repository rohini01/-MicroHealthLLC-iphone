var db;var newhtml;var num;
db=openDatabase("phonegap","1.0","phonegap database","200000");
function Select(){ 	newhtml='';
	
	 chid=document.getElementById('selectcheck').value;
	//var inhtml='<p>'+chid+'</p>';
//document.getElementById('aaaa').innerHTML=chid;

	db.transaction(function(t){
	t.executeSql('CREATE TABLE IF NOT EXISTS checklist_Q(ID INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,Q_type TEXT,Ques TEXT,check_id TEXT,Q_id TEXT)',[],created,handleError);
	});
	function created(){
	//alert('succefully created');
	}
	function handleError(){
	//alert('unsuccefull creating table');
	}
						
var xmlhttp = new XMLHttpRequest();
var url = "http://www.siliconwebsolution.com/project/json/json_questions.php?checklistid="+chid;
xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        myFunction(xmlhttp.response);
        
    }
}
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(response) {
    var arr =JSON.parse(response);
    var item=arr.items;
	for(var i = 0; i < item.length; i++) {
		 var Q_type=item[i].field_type;
		 var Ques=item[i].label;
		 var check_id=item[i].form_id;
		 var Q_id=item[i].field_id;
			//document.write(Checklist);
			
			 (function(Q_type,Ques,check_id,Q_id) {
	db.transaction(function(tx){
   tx.executeSql('SELECT * FROM checklist_Q where Q_id=?',[Q_id],function(tx,results){
      var len = results.rows.length;
	  if(len==0)
	  {
		  //alert('data do not have');
		 insert(Q_type,Ques,check_id,Q_id);
	  }else
	  {
		  //alert('Already have');
	  }
      });
						});					 
})(Q_type,Ques,check_id,Q_id);

function insert(Q_type,Ques,check_id,Q_id)
	{
		db.transaction(function(tx) {
		tx.executeSql('INSERT INTO checklist_Q(Q_type,Ques,check_id,Q_id) VALUES(?,?,?,?)',[Q_type,Ques,check_id,Q_id],inserted,insertError);
				 });
	}
function inserted(){
	//alert('data is inserted succesfully');
	
}
function insertError(){
	//alert('data is insertion error');
}

	}
	}
db.transaction(function(tx){
   tx.executeSql('SELECT * FROM checklist_Q where check_id=?',[chid],function(tx,results){
      var len = results.rows.length;
	  if(len==0)
	  {
		//alert('Please refresh your app data is updated');
	  }else
	  {
		 
		  var l;
		  for(l=0;l<len;l++)
		  {
			
			
			if(l%2==0){
    		 newhtml+='<div style="background-color:#BEBEBE;padding:20px;" class="input">';
    		}
			else{
    		 newhtml+='<div style="padding:20px;" class="input">';
    		}
			
			var row = results.rows.item(l);
			var Q_type=row.Q_type;
			var Ques=row.Ques;
			var check_id=row.check_id;
			var Q_id=row.Q_id;
			
			newhtml+='<label style="text-align:left;">'+Ques+'</label>';
			
			if(Q_type=='textbox'){
	  		num++;
				newhtml+='<input type="text" name="num" class="form-control" onfocusout="data()">';
				newhtml+='<input type="hidden" name="hid"  value='+Q_id+'>';
						
				}
				
			if(Q_type=='textarea'){
				num++;
				newhtml+='<textarea class="form-control" ></textarea>';
				newhtml+='<input type="hidden" name="hid"  value='+Q_id+'>';			
				}
	
				if(Q_type=='date'){
				num++;
				newhtml+='<input type="date" name="num" class="form-control" onfocusout="data()">';
				newhtml+='<input type="hidden" name="hid"  value='+Q_id+'>';			
				}
				
				if(Q_type=='time'){
				num++;
				
				newhtml+='<input type="time" name="num" class="form-control" onfocusout="data()">';
				newhtml+='<input type="hidden" name="hid"  value='+Q_id+'>';				
				}
			
				 if(Q_type=='email'){
				num++;
				newhtml+='<input type="email" name="num" class="form-control" onfocusout="data()">';
				newhtml+='<input type="hidden" name="hid" value='+Q_id+'>';
				}
			
				
				if(Q_type=='bolean'){
				nu++;
				newhtml+='<input type="radio" name="bolean'+Q_id+'" class="bolean" onclick="bolean()" style="display:inline;" value="YES"><p style="display:inline;">YES</p>';
				newhtml+='<input type="hidden" name="bolean-id" value='+Q_id+'>';	
				nu++;
				newhtml+='<input type="radio" name="bolean'+Q_id+'"  class="bolean" onclick="bolean()" style="display:inline;" value="NO"><p style="display:inline;">NO</p>';
				newhtml+='<input type="hidden" name="bolean-id" value='+Q_id+'>';
				
				}
			
				 if(Q_type=='numeric'){
				num++;
				newhtml+='<input type="number" name="num" class="form-control" onfocusout="data()">';
				newhtml+='<input type="hidden" name="hid" value='+Q_id+'>';
				}
				 if(Q_type=='phone'){
				num++;
				newhtml+='<input type="number" name="num" class="form-control" onfocusout="data()">';
				newhtml+='<input type="hidden" name="hid" value='+Q_id+'>';
				}
				 
				if(Q_type=='file'){
				 num++;
                newhtml+='<input type="file">';
				}
				/*	
				if(anstype=='Audio'){
				newhtml= document.createElement("INPUT");
				newhtml.setAttribute("type", "audio");
				document.body.appendChild(newhtml);
				} 	
			 */	
			newhtml+='<br />'
			newhtml+='</div>';
			
			
			
		  }
					newhtml+='<br />';
			 		newhtml+='<div padding:20px;>';
					newhtml+='<input type="button"  class="form-control" onclick="sub()" id="ans" value="SUBMIT">';
			 		newhtml+='</div>';
					newhtml+='<div style="width:100%;height:50px;"></div>';
				
			document.getElementById("checkques").innerHTML=newhtml;
		  
	  }
      });
						});	
	
}

