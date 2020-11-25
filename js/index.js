var real = document.getElementById("real");
var experimental = document.getElementById("experimental");
var other = document.getElementById("other");

var realState = "closed";
var experimentalState = "closed";
var otherState = "closed";

real.onclick = function(){
    document.querySelector(".real").classList.toggle('hidden');
    if(realState == "closed"){
        realState = "open";
    }
    else{
        realState = "closed";
    }

    if(experimentalState == "open"){
        document.querySelector(".experimental").classList.toggle('hidden');
        experimentalState = "closed";
    }
    else if(otherState == "open"){
        document.querySelector(".other").classList.toggle('hidden');
        otherState = "closed";
    }
}

experimental.onclick = function(){
    document.querySelector(".experimental").classList.toggle('hidden');
    if(experimentalState == "closed"){
        experimentalState = "open";
    }
    else{
        experimentalState = "closed";
    }

    if(realState == "open"){
        document.querySelector(".real").classList.toggle('hidden');
        realState = "closed";
    }
    else if(otherState == "open"){
        document.querySelector(".other").classList.toggle('hidden');
        otherState = "closed";
    }
}

other.onclick = function(){
    document.querySelector(".other").classList.toggle('hidden');
    if(otherState == "closed"){
        otherState = "open";
    }
    else{
        otherState = "closed";
    }

    if(realState == "open"){
        document.querySelector(".real").classList.toggle('hidden');
        realState = "closed";
    }
    else if(experimentalState == "open"){
        document.querySelector(".experimental").classList.toggle('hidden');
        experimentalState = "closed";
    }
}