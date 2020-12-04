let myNumber = $('#outgoingInputCall'),
    hangUpMyCall = $('#hangUpCall'),
    dialPadButtons = $('#dial_Pad_Button');


    myNumber.on("keyup", function () {
        let newText = this.value;
        let CurrentAttr = myNumber.attr('value', newText);
        console.log(CurrentAttr);

});

//console.log(this);
//let newText = this.text;
//this.attr("value", text)

        
 




    
