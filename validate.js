function Validate(){
    var name=document.tour.name.value;
    var email=document.tour.email.value;
    var gender=document.tour.gnd.value;
    var city=document.tour.city.value;
    if(name==null||name==" "){
        alert("Name cant be blank");
        return false;
    }
    
    const domain=email.indexOf("@");
    if(gender==null){
        alert("please select your gender");
        return false;
    }
    if(city=="NULL"){
        alert("Please select the destination");
        return false;
    }
    const ans=email.includes("rknec.edu",domain)
    if(ans==false){
       alert("Use rknec email id for registration");
        return false;
    }
    
}