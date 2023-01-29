var i=0;

function duplicate_form(){
    
    if(i >= 0){
        /*
            1) Div can be added upto 6 times 
            2) Remove button will appear
        */

       
       if(i < 6){
       
            /*
                Duplicate the div
            */

            var original = document.getElementById('pickup_details' + i);
            var clone = original.cloneNode(true); // "deep" clone
            clone.id = "pickup_details" + ++i; // there can only be one element with an ID
            original.parentNode.appendChild(clone);
        
       }

       if(i > 0 && i < 6){
             var remove_btn = document.getElementById('remove_btn');
             remove_btn.style.display = "block";
           }
    }

}

function remove_form(){
         if(i > 0){
                var original = document.getElementById('pickup_details' + i);
                original.removeChild(original.children[(i - 1)]);
         }
}


// function check(){
//     var relation = document.querySelector('#pickup_relation').value;
//     if( relation == "Others"){
//      document.getElementById("pickup_details" + i).innerHTML += 
//        '<div class="form-group col-xs-1" id="other_relation"><input type="text" class="form-control" id="" placeholder="Enter Relation"  name="other_relation_text[]"></div>';
//     }
//    //  alert(relation);
// }