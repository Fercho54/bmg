
function housecontracts() {
    var contractfullhousenumber = 1;
    //Create contract div dynamically perrrrrro
    
    let contractparentdiv = document.createElement("div");
    contractparentdiv.id = 'contract' + contractfullhousenumber;  
    contractparentdiv.className = 'col-lg-6 col-md-6';    

    let contractgroup = document.createElement("div");
    contractgroup.className = 'form-group';

    let label = document.createElement("label");
    let labeltext = document.createTextNode('Contract');

    var selectcontract = document.createElement("select");    
    selectcontract.className = "selectpicker search-fields";
    selectcontract.name = "contract" + contractfullhousenumber;

    
   

    //Assign different attributes to the element. 
    /*let createcontract;
    createcontract.type = "type";
    createcontract.value = "type"; 
    createcontract.name = "type"; */
    contractfullhousenumber ++;
    /*
    createcontract.onclick = function() { 
        
    };
    
/*<div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Contract</label>
                                                <select class="selectpicker search-fields" name="contract1">
                                                    <option>1 Month</option>
                                                    <option>2 Months</option>
                                                    <option>3 Months</option>
                                                    <option>4 Months</option>
                                                    <option>5 Months</option>
                                                    <option>6 Months</option>
                                                </select>
                                            </div>
                                        </div>
*/



    let contract = document.getElementById("contracthouse");
    
    //Append the element in page (in span).  
    contract.appendChild(contractparentdiv);
    contractparentdiv.appendChild(contractgroup);
    contractgroup.appendChild(label);
    label.appendChild(labeltext);
    contractgroup.appendChild(selectcontract);    
    selectcontract.appendChild(selectcontractoptions);
    
    selectcontractoptions.appendChild(selectcontractoptionsmonth);

    var selectcontractoptions = document.createElement("");
    print (selectcontractoptions);
    var i;
     
  document.getElementById("addcontracthouse").onclick = function() {
    housecontracts();    
  };
  

  var body = document.getElementsByTagName('body')[0],
    newdiv = document.createElement('div');   //create a div
    newdiv.id = 'newid';                      //add an id
    body.appendChild(newdiv);                 //append to the doc.body
    body.insertBefore(newdiv,body.firstChild) //OR insert it

    function createmyElements(id1,id2,id3){
        return [
                '<a href="some link" id="',
                 id1,
                '">linktxt</a>',
                '<div id="" ',
                 id2,
                '"></div>',
                '<someElement id="',
                 id3,
                '"></someElement>'
               ].join('\n');
     }


     function createElementHtml(id,tagname){
        var containerdiv = document.createElement('div'),
            nwtag = document.createElement(tagname);
        nwtag.id = id;
        containerdiv.appendChild(nwtag);
        return containerdiv.innerHTML;
      }
      //usage
      createElementHtml('id1','div'); //=> <div id="id1"></div>
